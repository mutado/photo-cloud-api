<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoArrayRequest;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\OriginalPhotoResource;
use App\Jobs\ProcessImageJob;
use App\Mail\TestMail;
use App\Models\OriginalPhoto;
use Carbon\Carbon;
use Faker\Core\Uuid;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * @group Photos
 * Class OriginalPhotosController
 * @package App\Http\Controllers
 */
class OriginalPhotosController extends Controller
{
    /**
     * Index all photos
     *
     * Returns a list of all photos.
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(\Illuminate\Http\Request $request): JsonResponse
    {
        $this->authorize('viewAny', OriginalPhoto::class);
//        dd(auth()->user()->originalPhotos()->filterBy($request->query)->toSql());
        return response()->json(OriginalPhotoResource::collection(auth()->user()->originalPhotos()->filterBy($request->query)->orderBy('created_at', 'desc')->paginate(100)));
    }

    /**
     * Store a photo
     *
     * Creates a new photo and returns it.
     *
     * @bodyParam photo file required The photo to upload.
     *
     * @param StorePhotoRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StorePhotoRequest $request): JsonResponse
    {
        $this->authorize('create', OriginalPhoto::class);
        $validated = $request->validated();
//        $path = Storage::disk('local')
//            ->putFileAs(
//                'originals',
//               ,
//                $validated['photo']->hashName()
//            );
        $path = $validated['photo']->hashName();
        $image = Image::make($validated['photo'])
            ->orientate();
        $exif = $image->exif();
        Storage::disk('local')->put('originals/' . $path, $image->encode(null, 100));
        $photo = auth()->user()->originalPhotos()->create([
            'path' => $path,
        ]);

        ProcessImageJob::dispatch($photo, $exif);

        return response()->json(OriginalPhotoResource::make($photo->fresh()), 201);
    }

    /**
     * Show a photo
     *
     * Returns a photo.
     *
     * @param Request $request
     * @param $photo
     * @throws AuthorizationException
     */
    public function show(Request $request, $photo)
    {
        // if photo has extension in the end of the string, return the photo with that extension
        $arr = explode('.', $photo);
        if (count($arr) > 1) {
            $photo = OriginalPhoto::find($arr[0]);
            $this->authorize('view', $photo);
            $extension = $arr[1];

            $imageFullPath = Storage::disk('local')->path('originals/' . $photo->path);
            $image = Image::make($imageFullPath);

            return $image->response($extension, request()->query('quality', 100));
        }
        $photo = OriginalPhoto::find($photo);
        $this->authorize('view', $photo);
        return response()->json(OriginalPhotoResource::make($photo));
    }

    /**
     * Download a photo
     *
     * Returns a photo file.
     *
     * @param OriginalPhoto $photo
     * @return BinaryFileResponse|Response
     * @throws AuthorizationException
     * @throws BindingResolutionException
     */
    public function download(OriginalPhoto $photo): BinaryFileResponse|Response
    {
        $this->authorize('view', $photo);

        if (!Storage::disk('local')->exists('originals/' . $photo->path)) {
            abort(404);
        }

        $imageFullPath = Storage::disk('local')->path('originals/' . $photo->path);
        $image = Image::make($imageFullPath);

        // if query param resolution is set, resize the image
        if (Request::has('resolution')) {
            switch (Request::get('resolution')) {
                case 'low':
                    $image = $image->resize(256, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    break;
                case 'medium':
                    $image = $image->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    break;
                case 'high':
                    $image = $image->resize(1280, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    break;
            }
        }

        return $image->response(request()->query('format', $image->extension), request()->query('quality', 100));
    }

    /**
     * Update a photo
     *
     * Updates a photo and returns it.
     *
     * @bodyParam photo file required The photo to upload.
     *
     * @param StorePhotoRequest $request
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(StorePhotoRequest $request, OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('update', $photo);
        $validated = $request->validated();
        $validated['photo'] = $request->file('photo')->store('photos', 'local');
        Storage::delete($photo->path);
        $photo->update([
            'path' => $validated['photo'],
        ]);
        return response()->json(OriginalPhotoResource::make($photo));
    }

    /**
     * Delete a photo
     *
     * Deletes a photo.
     *
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('delete', $photo);
        if ($photo->deleted_at) {
            $photo->forceDelete();
        } else {
            $photo->delete();
        }
        return response()->json(null, 204);
    }

    public function recover(OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('delete', $photo);
        $photo->restore();
        return response()->json(new OriginalPhotoResource($photo->fresh()), 200);
    }

    public function favorite(PhotoArrayRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $photos = [];

        foreach ($validated['photos'] as $photo) {
            $photo = OriginalPhoto::find($photo);
            $this->authorize('update', $photo);
            $photo->update([
                'favorite' => $validated['value'],
            ]);
            $photos[] = $photo;
        }

        return response()->json(OriginalPhotoResource::collection($photos), 200);
    }

    public function hide(PhotoArrayRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $photos = [];

        foreach ($validated['photos'] as $photo) {
            $photo = OriginalPhoto::find($photo);
            $this->authorize('update', $photo);
            $photo->update([
                'hidden' => $validated['value'],
            ]);
            $photos[] = $photo;
        }

        return response()->json(OriginalPhotoResource::collection($photos), 200);
    }
}

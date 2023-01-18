<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\OriginalPhotoResource;
use App\Models\OriginalPhoto;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image;
use Storage;
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
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', OriginalPhoto::class);
        return response()->json(OriginalPhotoResource::collection(auth()->user()->originalPhotos()->orderBy('created_at', 'desc')->paginate(100)));
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
        $validated['photo'] = $request->file('photo')->store('photos', 'local');
        $photo = auth()->user()->originalPhotos()->create([
            'path' => $validated['photo'],
        ]);
        return response()->json(OriginalPhotoResource::make($photo), 201);
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

            $imageFullPath = Storage::disk('local')->path($photo->path);
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

        if (!Storage::disk('local')->exists($photo->path)) {
            abort(404);
        }

        $imageFullPath = Storage::disk('local')->path($photo->path);
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
        Storage::delete($photo->path);
        $photo->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\OriginalPhotoResource;
use App\Models\OriginalPhoto;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
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
        return response()->json(OriginalPhotoResource::collection(auth()->user()->originalPhotos));
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
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('view', $photo);
        return response()->json(OriginalPhotoResource::make($photo));
    }

    /**
     * Download a photo
     *
     * Returns a photo file.
     *
     * @param OriginalPhoto $photo
     * @return BinaryFileResponse
     * @throws AuthorizationException
     */
    public function download(OriginalPhoto $photo): BinaryFileResponse
    {
        $this->authorize('view', $photo);
        return response()->download(storage_path('app/' . $photo->path));
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

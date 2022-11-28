<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\OriginalPhotoResource;
use App\Http\Resources\PhotoReferenceResource;
use App\Models\Folder;
use App\Models\OriginalPhoto;
use App\Models\PhotoReference;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class PhotoReferencesController
 * @package App\Http\Controllers
 * @group Folders
 * @subgroup Photo References
 */
class PhotoReferencesController extends Controller
{
    /**
     * Index all photo references
     *
     * Returns a list of all photo references in a folder.
     *
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(Folder $folder): JsonResponse
    {
        $this->authorize('view', $folder);
        return response()->json(PhotoReferenceResource::collection($folder->photoReferences->load('photo')));
    }

    /**
     * Store a photo in a folder
     *
     * Stores a new photo and adds it into a folder.
     *
     * @bodyParam photo file required The photo to upload.
     *
     * @param StorePhotoRequest $request
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StorePhotoRequest $request, Folder $folder): JsonResponse
    {
        $this->authorize('update', $folder);
        $validated = $request->validated();
        $validated['photo'] = $request->file('photo')->store('photos', 'local');

        $photo = auth()->user()->originalPhotos()->create([
            'path' => $validated['photo'],
        ]);

        $folder->photoReferences()->create([
            'photo_id' => $photo->id,
        ]);

        return response()->json(OriginalPhotoResource::make($photo), 201);
    }

    /**
     * Show a photo
     *
     * Returns a photo.
     *
     * @param Folder $folder
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(Folder $folder, OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('view', $photo);
        return response()->json(OriginalPhotoResource::make($photo));
    }

    /**
     * Show a photo reference
     *
     * Returns a photo reference.
     *
     * @param Folder $folder
     * @param PhotoReference $photoReference
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function showReference(Folder $folder, PhotoReference $photoReference): JsonResponse
    {
        $this->authorize('view', $photoReference);
        return response()->json(PhotoReferenceResource::make($photoReference));
    }

    /**
     * Update a photo
     *
     * Updates a photo inside folder.
     *
     * @bodyParam photo file required The photo to upload.
     *
     * @param StorePhotoRequest $request
     * @param Folder $folder
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(StorePhotoRequest $request, Folder $folder, OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('update', $photo);
        $photo->update($request->validated());
        return response()->json(OriginalPhotoResource::make($photo));
    }

    /**
     * Add a photo to a folder
     *
     * Adds a photo to a folder. Creates a new reference.
     * @param Folder $folder
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function addToFolder(Folder $folder, OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('update', $folder);
        $ref = $folder->photoReferences()->create([
            'photo_id' => $photo->id,
        ]);
        return response()->json(PhotoReferenceResource::make($ref->load(['folder', 'photo'])), 201);
    }

    /**
     * Remove a photo from a folder
     *
     * Removes a photo from a folder. Deletes the reference.
     *
     * @param Folder $folder
     * @param PhotoReference $photoReference
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroyReference(Folder $folder, PhotoReference $photoReference): JsonResponse
    {
        $this->authorize('delete', $photoReference);
        $photoReference->delete();
        return response()->json(null, 204);
    }

    /**
     * Delete a photo
     *
     * Deletes a photo. Deletes all references.
     *
     * @param Folder $folder
     * @param OriginalPhoto $photo
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Folder $folder, OriginalPhoto $photo): JsonResponse
    {
        $this->authorize('delete', $photo);
        $folder->photos()->find($photo->id)->delete();
        return response()->json(null, 204);
    }

}

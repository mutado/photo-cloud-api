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

class PhotoReferencesController extends Controller
{
    /**
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
     * @param Request $request
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

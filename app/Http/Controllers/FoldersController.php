<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShareFolderRequest;
use App\Http\Requests\StoreFolderRequest;
use App\Http\Requests\StoreSharedFolderRequest;
use App\Http\Resources\FolderResource;
use App\Models\Folder;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Folders
 * Class FoldersController
 * @package App\Http\Controllers
 */
class FoldersController extends Controller
{
    /**
     * Index all folders
     *
     * Returns a list of all folders
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', Folder::class);
        return response()->json(FolderResource::collection(auth()->user()->folders));
    }

    /**
     * Store a new folder
     *
     * Creates a new folder and returns it.
     *
     * @param StoreFolderRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StoreFolderRequest $request): JsonResponse
    {
        $this->authorize('create', Folder::class);
        $folder = auth()->user()->folders()->create($request->validated());
        return response()->json(FolderResource::make($folder), 201);
    }

    public function places(Request $request): JsonResponse
    {
        $this->authorize('viewAny', Folder::class);

        return response()->json([
            'countries'=> auth()->user()->originalPhotos()->whereNot('country',null)->select('country')->distinct()->get(),
            'cities'=> auth()->user()->originalPhotos()->whereNot('city',null)->select('city')->distinct()->get(),
        ]);
    }

    /**
     * Show a folder
     *
     * Returns a folder.
     *
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(Folder $folder): JsonResponse
    {
        $this->authorize('view', $folder);
        return response()->json(FolderResource::make($folder->load('photoReferences.photo')));
    }

    /**
     * Update a folder
     *
     * Updates a folder and returns it.
     *
     * @param StoreFolderRequest $request
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(StoreFolderRequest $request, Folder $folder): JsonResponse
    {
        $this->authorize('update', $folder);
        $folder->update($request->validated());
        return response()->json(FolderResource::make($folder));
    }

    /**
     * Delete a folder
     *
     * Deletes a folder.
     *
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Folder $folder): JsonResponse
    {
        $this->authorize('delete', $folder);
        $folder->delete();
        return response()->json(null, 204);
    }

    /**
     * Share a folder
     *
     * Shares a folder with another user.
     *
     * @param ShareFolderRequest $request
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function share(ShareFolderRequest $request, Folder $folder): JsonResponse
    {
        $this->authorize('update', $folder);

        $validated = $request->validated();
        $validated['user_id'] = auth()->id();
        if ($folder->sharedFolder) {
            $folder->sharedFolder->update($validated);
        } else {
            $folder->sharedFolder()->create($validated);
            $folder->refresh();
        }
        $folder->sharedFolder->emails()->createMany(collect($validated['emails'])->map(function ($email) {
            return ['email' => $email];
        })->toArray());

        return response()->json(FolderResource::make($folder->fresh()->load('sharedFolder.emails')));
    }
}

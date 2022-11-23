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

class FoldersController extends Controller
{
    /**
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', Folder::class);
        return response()->json(FolderResource::collection(auth()->user()->folders));
    }

    /**
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

    /**
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(Folder $folder) : JsonResponse
    {
        $this->authorize('view', $folder);
        return response()->json(FolderResource::make($folder));
    }

    /**
     * @param StoreFolderRequest $request
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(StoreFolderRequest $request, Folder $folder) : JsonResponse
    {
        $this->authorize('update', $folder);
        $folder->update($request->validated());
        return response()->json(FolderResource::make($folder));
    }

    /**
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Folder $folder) : JsonResponse
    {
        $this->authorize('delete', $folder);
        $folder->delete();
        return response()->json(null, 204);
    }

    /**
     * @param ShareFolderRequest $request
     * @param Folder $folder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function share(ShareFolderRequest $request, Folder $folder) : JsonResponse
    {
        $this->authorize('update', $folder);

        $validated = $request->validated();
        $validated['user_id'] = auth()->id();
        if ($folder->sharedFolder) {
            $folder->sharedFolder->update($validated);
        } else {
            $folder->sharedFolder()->create($validated);
        }
        $folder->sharedFolder->emails()->createMany(collect($validated['emails'])->map(function ($email) {
            return ['email' => $email];
        })->toArray());

        return response()->json(FolderResource::make($folder->fresh()->load('sharedFolder.emails')));
    }
}

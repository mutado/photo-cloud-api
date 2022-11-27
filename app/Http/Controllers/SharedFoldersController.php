<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSharedFolderEmailRequest;
use App\Http\Requests\StoreSharedFolderRequest;
use App\Http\Resources\SharedFolderResource;
use App\Models\SharedFolder;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class SharedFoldersController extends Controller
{
    /**
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', SharedFolder::class);
        return response()->json(SharedFolderResource::collection(auth()->user()->sharedFolders));
    }

    /**
     * @param StoreSharedFolderRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StoreSharedFolderRequest $request): JsonResponse
    {
        $this->authorize('create', SharedFolder::class);
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();
        $sharedFolder = SharedFolder::create($validated);

        if ($request->has('emails')) {
            $sharedFolder->emails()->createMany(collect($validated['emails'])->map(function ($email) {
                return ['email' => $email];
            })->toArray());
        }

        return response()->json(SharedFolderResource::make($sharedFolder->fresh()->load('emails')), 201);
    }

    /**
     * @param SharedFolder $shared
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(SharedFolder $shared): JsonResponse
    {
        $this->authorize('view', $shared);
        return response()->json(SharedFolderResource::make($shared->load('emails')));
    }

    /**
     * @param StoreSharedFolderRequest $request
     * @param SharedFolder $shared
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(StoreSharedFolderRequest $request, SharedFolder $shared): JsonResponse
    {
        $this->authorize('update', $shared);
        $validated = $request->validated();
        $shared->update($validated);
        return response()->json(SharedFolderResource::make($shared->fresh()->load('emails')));
    }

    /**
     * @param SharedFolder $sharedFolder
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(SharedFolder $shared): JsonResponse
    {
        $this->authorize('delete', $shared);
        $shared->delete();
        return response()->json(null, 204);
    }

    /**
     * @param SharedFolder $shared
     * @param StoreSharedFolderEmailRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function addEmail(SharedFolder $shared, StoreSharedFolderEmailRequest $request): JsonResponse
    {
        $this->authorize('update', $shared);
        $validated = $request->validated();
        $sharedFolderEmail = $shared->emails()->create($validated);
        return response()->json(SharedFolderResource::make($shared->fresh()->load('emails')), 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSharedFolderEmailRequest;
use App\Http\Resources\SharedFolderEmailResource;
use App\Models\SharedFolder;
use App\Models\SharedFolderEmail;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class SharedFolderEmailsController extends Controller
{

    /**
     * @param SharedFolder $shared
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(SharedFolder $shared): JsonResponse
    {
        $this->authorize('view', $shared);
        return response()->json(SharedFolderEmailResource::collection($shared->emails));
    }

    /**
     * @param StoreSharedFolderEmailRequest $request
     * @param SharedFolder $shared
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StoreSharedFolderEmailRequest $request, SharedFolder $shared): JsonResponse
    {
        $this->authorize('update', $shared);
        $shared->emails()->create($request->validated());
        return response()->json(SharedFolderEmailResource::collection($shared->emails), 201);
    }

    /**
     * @param SharedFolder $shared
     * @param SharedFolderEmail $email
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(SharedFolder $shared, string $email): JsonResponse
    {
        $this->authorize('update', $shared);
        $shared->emails()->where('email', $email)->delete();
        return response()->json(SharedFolderEmailResource::collection($shared->emails), 201);
    }
}

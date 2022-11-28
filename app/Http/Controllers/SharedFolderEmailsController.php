<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSharedFolderEmailRequest;
use App\Http\Resources\SharedFolderEmailResource;
use App\Models\SharedFolder;
use App\Models\SharedFolderEmail;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

/**
 * @group Shared Folders
 * Class SharedFolderEmailsController
 * @package App\Http\Controllers
 * @subgroup Shared Folder Emails
 */
class SharedFolderEmailsController extends Controller
{

    /**
     * Index all shared folder emails
     *
     * Returns a list of all shared folder emails.
     *
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
     * Share a folder with an email
     *
     * Creates a new shared folder email and returns it. The shared folder must be owned by the authenticated user.
     *
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
     * Remove a shared folder email
     *
     * Removes a shared folder email.
     *
     * @param SharedFolder $shared
     * @param string $email
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(SharedFolder $shared, string $email): JsonResponse
    {
        $this->authorize('update', $shared);
        SharedFolderEmail::findOrFail(['email' => $email,'shared_folder_id' => $shared->id])->delete();
        return response()->json(SharedFolderEmailResource::collection($shared->emails), 200);
    }
}

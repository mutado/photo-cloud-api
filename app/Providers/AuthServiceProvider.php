<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Folder;
use App\Models\OriginalPhoto;
use App\Models\PhotoReference;
use App\Models\SharedFolder;
use App\Models\SharedFolderEmail;
use App\Policies\FolderPolicy;
use App\Policies\OriginalPhotoPolicy;
use App\Policies\PhotoReferencePolicy;
use App\Policies\SharedFolderEmailPolicy;
use App\Policies\SharedFolderPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        OriginalPhoto::class => OriginalPhotoPolicy::class,
        Folder::class => FolderPolicy::class,
        PhotoReference::class => PhotoReferencePolicy::class,
        SharedFolder::class => SharedFolderPolicy::class,
        SharedFolderEmail::class => SharedFolderEmailPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

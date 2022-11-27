<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class StatisticsController extends Controller
{
    /**
     * @return array
     */
    private function getDiskUsage()
    {
        $disktotal = disk_total_space('/'); //DISK usage
        $disktotalsize = $disktotal / 1073741824;

        $diskfree = disk_free_space('/');
        $used = $disktotal - $diskfree;

        $diskusedize = $used / 1073741824;
        $diskuse1 = round(100 - (($diskusedize / $disktotalsize) * 100));
        $diskuse = round(100 - ($diskuse1));

        return [
            'used_percent' => $diskuse,
            'used_size' => $diskusedize,
            'total_size' => $disktotalsize,
        ];
    }

    public function summary()
    {
        return response()->json([
            'folders' => auth()->user()->folders()->count(),
            'photos' => auth()->user()->originalPhotos()->count(),
            'shared_folders' => auth()->user()->sharedFolders()->count(),
            'shared_folder_emails' => auth()->user()->sharedFolderEmails()->count(),
            'disk_usage' => $this->getDiskUsage(),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function diskUsage()
    {
        return response()->json($this->getDiskUsage());
    }
}

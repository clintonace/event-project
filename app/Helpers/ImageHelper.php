<?php

use Illuminate\Support\Str;

if (!function_exists('imageUploader')) {
    function imageUploader($fileRequest, $user, $folderName)
    {
        $ext = $fileRequest->getClientOriginalExtension();
        $name = Str::slug($user) . time() . "." . $ext;

        $tempPath = $fileRequest->getRealPath();
        $destinationPath = storage_path('app/public/' . $folderName);

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
            chmod($destinationPath, 0775);
        }

        $finalPath = $fileRequest->storeAs($folderName, $name, 'public');

        if ($finalPath) {
            return 'storage/' . $finalPath;
        } else {
            throw new \Exception('File upload failed.');
        }
    }
}

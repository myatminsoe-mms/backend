<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;

class FileStorageHelper
{
    public static function uploadImage($files, $filePrefixName)
    {
        $imageUrls = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                // Generate a unique ID for the file name (e.g., timestamp + random characters)
                $uniqueId = uniqid();

                // Get the original file extension (e.g., jpg, png)
                $fileExtension = $file->getClientOriginalExtension();

                try {
                    // Combine the username, unique ID, and file extension to create the new file name
                    $newFileName = $filePrefixName . '_' . $uniqueId . '.' . $fileExtension;

                    // Store the uploaded image in AWS S3 with the new file name
                    $imagePath = $file->storeAs('images', $newFileName, 's3');
                } catch (Exception $e) {
                    throw new \Exception('Error' . $e->getMessage());
                }

                // Generate a public URL for the uploaded image
                $imageUrl = Storage::disk('s3')->url($imagePath);

                $imageUrls[] = $imageUrl;
            } else {
                throw new InvalidArgumentException('Invalid file uploaded. Please provide a valid image file.');
            }
        }

        return $imageUrls;

    }

    public static function singleUpload($file, $filePrefixName)
    {
        if ($file instanceof UploadedFile) {
            // Generate a unique ID for the file name (e.g., timestamp + random characters)
            $uniqueId = uniqid();

            // Get the original file extension (e.g., jpg, png)
            $fileExtension = $file->getClientOriginalExtension();

            try {
                // Combine the username, unique ID, and file extension to create the new file name
                $newFileName = $filePrefixName . '_' . $uniqueId . '.' . $fileExtension;

                // Store the uploaded image in AWS S3 with the new file name
                $imagePath = $file->storeAs('avatars', $newFileName, 's3');
            } catch (Exception $e) {
                throw new \Exception('Error' . $e->getMessage());
            }

            // Generate a public URL for the uploaded image
            $imageUrl = Storage::disk('s3')->url($imagePath);

        } else {
            throw new InvalidArgumentException('Invalid file uploaded. Please provide a valid image file.');
        }

        return $imageUrl;
    }

    public static function deleteImage($imageUrl)
    {
        try {
            // Parse the S3 URL to extract the file path
            $parsedUrl = parse_url($imageUrl);

            if (!isset($parsedUrl['scheme']) || !isset($parsedUrl['host']) || !isset($parsedUrl['path'])) {
                throw new \Exception('Invalid URL format');
            }

            // Remove the file from AWS S3 using the file path
            $filePath = ltrim($parsedUrl['path'], '/');
            Storage::disk('s3')->delete($filePath);

            // You can return a success message or status as needed
            return true;
        } catch (\Exception $e) {
            // Handle exceptions (e.g., invalid URL or S3 deletion errors)
            // You can log the error or return an error response
            return false; // Handle errors as needed
        }
    }
}

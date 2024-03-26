<?php

namespace App\Modules\CoreModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\UploadFile;
use Laranex\NextLaravel\Cores\Job;

class DeleteFileUploadJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly int $uploadFileId)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $upload_file = UploadFile::findOrFail($this->uploadFileId);
        $is_deleted = FileStorageHelper::deleteImage($upload_file->file_url);
        if ($is_deleted) {
            return $upload_file->delete();
        } else {
            return false;
        }

    }
}

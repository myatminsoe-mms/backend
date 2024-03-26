<?php

namespace App\Modules\CoreModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\UploadFile;
use Laranex\NextLaravel\Cores\Job;

class CreateFileUploadJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload)
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload = collect($this->payload);
        $file_urls = FileStorageHelper::uploadImage($payload->get('images'), auth()->user()->id);
        if (!empty($file_urls)) {
            $upload_files = [];
            foreach ($file_urls as $file_url) {
                $upload_files[] = [
                    'file_url' => $file_url,
                    'is_completed' => 0,
                    'created_by' => auth()->id(),
                ];
            }

            UploadFile::insert($upload_files);
        }

        $files = UploadFile::whereIn('file_url', $file_urls)->get();

        return $files;
    }
}

<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Jobs\DeleteFileUploadJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laranex\NextLaravel\Cores\Feature;

class DeleteFileUploadFeature extends Feature
{
    public function __construct(private readonly int $uploadFileId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(Request $request): JsonResponse
    {
        $is_success = $this->run(new DeleteFileUploadJob($this->uploadFileId));
        if ($is_success) {
            return JsonResponder::success('File deleted successfully.');
        } else {
            return JsonResponder::internalServerError('File not deleted.');
        }

    }
}

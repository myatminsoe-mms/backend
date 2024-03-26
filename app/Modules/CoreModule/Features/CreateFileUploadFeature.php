<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Http\Requests\CreateFileUploadRequest;
use App\Modules\CoreModule\Jobs\CreateFileUploadJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class CreateFileUploadFeature extends Feature
{
    /**
     * Execute the feature.
     */
    public function handle(CreateFileUploadRequest $request): JsonResponse
    {

        $files = $this->run(new CreateFileUploadJob($request->validated()));

        return JsonResponder::success('Files have been successfully uploaded', $files);
    }
}

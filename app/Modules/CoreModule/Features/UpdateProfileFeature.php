<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Http\Requests\UpdateProfileRequest;
use App\Modules\CoreModule\Jobs\UpdateUserJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class UpdateProfileFeature extends Feature
{
    /**
     * Execute the feature.
     */
    public function handle(UpdateProfileRequest $request): JsonResponse
    {
        $user = $this->run(new UpdateUserJob($request->validated(), $request->user()->id));

        return JsonResponder::success('Profile information updated successfully', $user);
    }
}

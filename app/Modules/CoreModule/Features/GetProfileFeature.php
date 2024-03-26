<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Jobs\GetProfileJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laranex\NextLaravel\Cores\Feature;

class GetProfileFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(Request $request): JsonResponse
    {
        $user = $this->run(new GetProfileJob());

        return JsonResponder::success('User profile has been retrieved successfully', $user);
    }
}

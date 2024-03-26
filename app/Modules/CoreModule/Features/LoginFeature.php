<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Http\Requests\LoginRequest;
use App\Modules\CoreModule\Jobs\LoginJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class LoginFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(LoginRequest $request): JsonResponse
    {
        $response = $this->run(new LoginJob($request->validated()));

        return JsonResponder::success('Logged in successfully', $response);
    }
}

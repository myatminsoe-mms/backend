<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Http\Requests\CreateUserRequest;
use App\Modules\CoreModule\Jobs\CreateUserJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class CreateUserFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(CreateUserRequest $request): JsonResponse
    {

        $user = $this->run(new CreateUserJob($request->validated()));

        return JsonResponder::success('User have been successfully created', $user);
    }
}

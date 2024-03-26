<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Http\Requests\UpdateUserRequest;
use App\Modules\CoreModule\Jobs\UpdateUserJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class UpdateUserFeature extends Feature
{
    public function __construct(private readonly int $userId)
    {
    }

    /**
     * Execute the feature.
     */
    public function handle(UpdateUserRequest $request): JsonResponse
    {
        $user = $this->run(new UpdateUserJob($request->validated(), $this->userId));

        return JsonResponder::success('User updated successfully', $user);
    }
}

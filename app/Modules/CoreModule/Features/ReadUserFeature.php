<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Jobs\ReadUserJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class ReadUserFeature extends Feature
{
    public function __construct(private readonly int $userId)
    {
    }

    /**
     * Execute the feature.
     */
    public function handle(): JsonResponse
    {
        $user = $this->run(new ReadUserJob($this->userId));

        return JsonResponder::success('User has been successfully retrieved', $user);
    }
}

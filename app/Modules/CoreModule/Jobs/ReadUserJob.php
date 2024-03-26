<?php

namespace App\Modules\CoreModule\Jobs;

use App\Models\User;
use Laranex\NextLaravel\Cores\Job;

class ReadUserJob extends Job
{
    public function __construct(private readonly int $userId)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        return User::findOrFail($this->userId);

    }
}

<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\Event;
use Illuminate\Support\Facades\Config;
use Laranex\NextLaravel\Cores\Job;
use Carbon\Carbon;

class UpdateEventJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload, private readonly int $eventId)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload = collect($this->payload);
        $updatePayload = $payload->toArray();
        $event = Event::findOrFail($this->eventId);

        if(isset($updatePayload['deleted_files'])) {
            foreach($updatePayload['deleted_files'] as $deletedImage)
            {
                FileStorageHelper::deleteImage($deletedImage);
            }
        }
        if(isset($updatePayload['deleted_files']))
        {
            unset($updatePayload['deleted_files']);
        }

        $end_date = Carbon::parse($updatePayload['end_date'])->toDateString();
        $updatePayload['end_at'] = $end_date . ' ' . $updatePayload['end_time'];
        if($event->event_status == "ACTIVE") {
            $updatePayload['event_status'] = "ACTIVE";
        }
        $event->update($updatePayload);
        return $event;
    }
}

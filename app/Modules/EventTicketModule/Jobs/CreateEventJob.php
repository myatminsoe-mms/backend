<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\Event;
use Laranex\NextLaravel\Cores\Job;
use Carbon\Carbon;

class CreateEventJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload)
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
        $createpayload = $payload->except(['event_tickets'])->toArray();

        // adding end_at timestamp for retrieval of events easily from customer portal
        $end_date = Carbon::parse($createpayload['end_date'])->toDateString();
        $createpayload['end_at'] = $end_date . ' ' . $createpayload['end_time'];
        $event = Event::create($createpayload);

        return $event;
    }
}

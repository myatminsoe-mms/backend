<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\Event;
use Illuminate\Http\Request;
use Laranex\NextLaravel\Cores\Job;

class IndexEventTicketJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $page = $request->query('current_page');
        $perPage = $request->query('per_page'); // if there is no params, all will return
        $search = $request->query('search');
        $order = $request->query('order') ?? [['column' => 'created_at', 'order' => 'desc'], ['column' => 'title', 'order' => 'asc']];

        $searchableFields = ['id', 'title', 'organizer_id', 'organizer_name', 'event_template', 'type_id', 'type_name', 'category_id', 'category_name', 'slug', 'tags', 'start_at', 'end_at', 'publish_at'];
        $sortableFields = [
            'id', 'title', 'organizer_id', 'organizer_name', 'event_template', 'type_id', 'type_name', 'category_id', 'category_name', 'slug', 'tags', 'location_type', 'map_url', 'start_at', 'end_at', 'publish_at',
        ];

        //filters

        $eventStatus = $request->get('event_status');

        $query = Event::with('organizer', 'type', 'category', 'eventTickets')
            ->when($eventStatus, fn ($query) => $query->where('event_status', $eventStatus));

        return $query->purifySortingQuery($order, $sortableFields)->search($searchableFields, $search)->cleanPaginate($perPage, $page);
    }
}

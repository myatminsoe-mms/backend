<?php

namespace App\Modules\OrganizerModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\OrganizerModule\Jobs\DeleteOrganizerJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Laranex\NextLaravel\Cores\Feature;

class DeleteOrganizerFeature extends Feature
{
    public function __construct(private readonly int $organizerId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(): JsonResponse
    {
        $this->run(new DeleteOrganizerJob($this->organizerId));
        DB::commit();

        //        DB::beginTransaction();
        //        try {
        //            $this->run(new DeleteOrganizerJob($this->organizerId));
        //            DB::commit();
        //        } catch (\Exception $e) {
        //            DB::rollBack();
        //
        //            return JsonResponder::internalServerError('Error creating case: ' . $e->getMessage());
        //        }

        return JsonResponder::success('Organizer has been successfully deleted');
    }
}

<?php

namespace App\Modules\CoreModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laranex\NextLaravel\Cores\Job;

class UpdateUserJob extends Job
{
    public function __construct(private array $payload, private readonly int $userId)
    {
    }

    /**
     * Execute the job.
     *
     * @return User
     */
    public function handle()
    {
        $payload = collect($this->payload);
        $updatePayload = $payload->except(['avatar', 'avatar_updated'])->toArray();

        $user = User::findOrFail($this->userId);
        $avatarUpdated = filter_var($payload->get('avatar_updated'), FILTER_VALIDATE_BOOLEAN);
        if ($avatarUpdated) {
            if ($user->getAttributes()['avatar']) {
                // deleting old avatar file
                FileStorageHelper::deleteImage($user->avatar);
            }
            if ($payload->get('avatar') && $payload->get('avatar') instanceof UploadedFile) {
                // creating new avatar file
                $file = FileStorageHelper::singleUpload($payload->get('avatar'), auth()->user()->id);
                $urlParts = parse_url($file);
                $path = isset($urlParts['path']) ? ltrim($urlParts['path'], '/') : '';
                $updatePayload['avatar'] = $path;
            }
        }

        $user->update($updatePayload);

        return $user;
    }
}

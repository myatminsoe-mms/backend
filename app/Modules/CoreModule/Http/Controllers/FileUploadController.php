<?php

namespace App\Modules\CoreModule\Http\Controllers;

use App\Modules\CoreModule\Features\CreateFileUploadFeature;
use App\Modules\CoreModule\Features\DeleteFileUploadFeature;
use Laranex\NextLaravel\Cores\Controller;

class FileUploadController extends Controller
{
    public function upload()
    {
        return $this->serve(new CreateFileUploadFeature());
    }

    public function delete($id)
    {
        return $this->serve(new DeleteFileUploadFeature($id));
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| All organizer related routes that connect to Controllers in OrganizerModule are defined here
|
*/

use App\Modules\OrganizerModule\Http\Controllers\OrganizerController;

//Route::group(['prefix' => '/v1/organizers'], function () {
//
//});

Route::group(['middleware' => ['auth:sanctum', 'user.check']], function () {
    Route::group(['prefix' => '/v1/organizers'], function () {
        Route::get('/', [OrganizerController::class, 'index'])->middleware(['can:index,Organizer']);
        Route::get('/{id}', [OrganizerController::class, 'read'])->middleware(['can:read,Organizer']);
        Route::post('/', [OrganizerController::class, 'create'])->middleware(['can:create,Organizer']);

        /* Organizer information includes file/image upload,
         * frontend side needs to use [post] method by adding _method:PUT in payload
         * e.g formData.append('_method', 'PUT');
         * Laravel will correctly interpret the POST request as PUT because of the _method parameter
         */
        Route::put('/{id}', [OrganizerController::class, 'update'])->middleware(['can:update,Organizer']);

        Route::delete('/{id}', [OrganizerController::class, 'delete'])->middleware(['can:delete,Organizer']);

    });
});

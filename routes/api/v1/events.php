<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| All event related routes that connect to Controllers in EventTicketModule are defined here
|
*/

use App\Modules\EventTicketModule\Http\Controllers\EventController;

Route::group(['middleware' => ['auth:sanctum', 'user.check']], function () {
    Route::group(['prefix' => '/v1/events'], function () {
        Route::get('/', [EventController::class, 'index'])->middleware(['can:index,Event']);
        Route::get('/{id}', [EventController::class, 'read'])->middleware(['can:read,Event']);
        Route::post('/', [EventController::class, 'create'])->middleware(['can:create,Event']);

        /** edit means some or all data to update, so use put method */
        Route::put('/{id}', [EventController::class, 'update'])->middleware(['can:update,Event']);

        /** deactivate is only a field update, so use partial update data patch method. 
         * and need to add name 'deactivate' for clear route naming, means patching only 'status' field
         * to set inactive 
         */
        Route::patch('/{id}/deactivate', [EventController::class, 'deactivate'])->middleware(['can:deactivate,Event']);
    });
});

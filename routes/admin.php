<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('event-list', [DashboardController::class, 'eventList'])->name('admin.event.list');
Route::get('event-create/{id?}', [DashboardController::class, 'eventCreateView'])->name('admin.event.create.view');
Route::post('event-create/update/{id?}', [DashboardController::class, 'eventCreateUpdate'])->name('admin.event.update');

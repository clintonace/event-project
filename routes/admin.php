<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('event-list', [DashboardController::class, 'eventList'])->name('admin.event.list');
Route::get('event-create', [DashboardController::class, 'eventCreateView'])->name('admin.event.create.view');

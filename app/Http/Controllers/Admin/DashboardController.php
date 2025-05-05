<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function eventList()
    {

        return view('admin.event.list');

    }
    public function eventCreateView()
    {

        return view('admin.event.create');

    }
}

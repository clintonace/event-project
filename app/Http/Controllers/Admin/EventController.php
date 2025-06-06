<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsRequest;
use App\Models\Eventt;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function createEvent(EventsRequest $request, $id = null)
    {

        $data = $request->all();

        if ($request->has('banner_1')) {

            $imagePath = imageUploader($request->file('banner_1'), auth()->user()->name, 'event-banners');

            $data['banner_1']= $imagePath;
        }
        if ($request->has('banner_2')) {

            $imagePath = imageUploader($request->file('banner_2'), auth()->user()->name, 'event-banners');

            $data['banner_2']= $imagePath;
        }

        $event = Eventt::updateOrCreate(['id'=>$id], $data);

        Alert::success('Success','Event Created Successfully');
        return back();


    }






}

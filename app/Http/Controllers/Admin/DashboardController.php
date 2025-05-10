<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsRequest;
use App\Models\Eventt;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function eventList()
    {

        return view('admin.event.list');

    }
    public function eventCreateView($id = null)
    {

        $data['event'] = Eventt::find($id);
        return view('admin.event.create', $data);
    }

    public function eventCreateUpdate(EventsRequest $request, $id = null)
    {

        // dd($request->all());

        $data = $request->all();

        if ($request->has('host_image')) {

            $imagePath = imageUploader($request->file('host_image'), auth()->user()->name, 'host-images');

            $data['host_image']= $imagePath;
        }
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

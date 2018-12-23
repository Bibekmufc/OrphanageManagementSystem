<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('adminpages.activities.create');
    }

    public function index()
    {
        $activities = Activity::all()->toArray();
        return view('adminpages.activities.view', compact('activities'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'activity_name' => 'required',
            'activity_location' => 'required',
            'date' => 'required',
        ]);

        $activities = new Activity();

        $activities->activity_name = $request->activity_name;
        $activities->activity_location = $request->activity_location;
        $activities->date = $request->date;


        $activities->save();

        return redirect('/admin/activities/create')->with('success', 'Added successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $activities = Activity::find($id);
        return view('adminpages.activities.edit', compact('activities', 'id'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'activity_name' => 'required',
            'activity_location' => 'required',
            'date' => 'required',
        ]);

        $activities = Activity::find($id);
        $activities->activity_name = $request->activity_name;
        $activities->activity_location = $request->activity_location;
        $activities->date = $request->date;

        $activities->save();
        return redirect('/admin/activities/view')->with('success', 'Data updated Successfully');
    }

    public function destroy($id)
    {
        $activities = Activity::find($id);
        $activities->delete();
        return redirect('/admin/activities/view')->with('success', 'Deleted successfully');
    }

}

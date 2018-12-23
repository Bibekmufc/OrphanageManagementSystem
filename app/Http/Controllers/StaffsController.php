<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpages.staffs.create');

    }

    public function index()
    {
        $staffs = Staff::all()->toArray();
        return view('adminpages.staffs.view', compact('staffs'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'job_shift' => 'required',
            'job_title' => 'required'
        ]);

        $staffs = new Staff();

        $staffs->first_name = $request->firstname;
        $staffs->last_name = $request->lastname;
        $staffs->dob = $request->date;
        $staffs->gender = $request->gender;
        $staffs->contact_number = $request->contact_number;
        $staffs->address = $request->address;
        $staffs->job_shift = $request->job_shift;
        $staffs->Job_title = $request->job_title;


        $staffs->save();

        return redirect('/admin/staffs/create')->with('success', 'Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs = Staff::find($id);
        return view('adminpages.staffs.edit', compact('staffs', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'job_shift' => 'required',
            'job_title' => 'required'
        ]);
        $staffs = Staff::find($id);

        $staffs->first_name = $request->firstname;
        $staffs->last_name = $request->lastname;
        $staffs->dob = $request->date;
        $staffs->gender = $request->gender;
        $staffs->contact_number = $request->contact_number;
        $staffs->address = $request->address;
        $staffs->job_shift = $request->job_shift;
        $staffs->Job_title = $request->job_title;

        $staffs->save();
        return redirect('/admin/staffs/view')->with('success', 'Data updated Successfully');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staffs = Staff::find($id);
        $staffs->delete();
        return redirect('/admin/staffs/view')->with('success', 'Deleted successfully');
    }
}

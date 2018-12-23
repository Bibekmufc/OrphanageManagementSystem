<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $title = 'Volunteer activities';
            return view('volunteer.apply')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.apply');

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
            'name' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'date' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'education' => 'required',
            'profession' => 'required',
            'program' => 'required'

        ]);

        $volunteers = new Volunteer();

        $volunteers->name = $request->name;
        $volunteers->gender = $request->gender;
        $volunteers->nationality = $request->nationality;
        $volunteers->dob = $request->date;
        $volunteers->address = $request->address;
        $volunteers->contact_number = $request->contact_number;
        $volunteers->email = $request->email;
        $volunteers->education = $request->education;
        $volunteers->profession = $request->profession;
        $volunteers->selected_program = $request->program;


        $volunteers->save();

        return redirect('/volunteer')->with('success', 'Thank you for applying. You will be informed soon!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

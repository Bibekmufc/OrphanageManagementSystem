<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Child;

class ChildrenController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function create(){
        return view('adminpages.children.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'admission' => 'required'
        ]);

        $children = new Child();

        $children->first_name = $request->firstname;
        $children->last_name = $request->lastname;
        $children->date_of_birth = $request->date;
        $children->gender = $request->gender;
        $children->description = $request->description;
        $children->admission_date = $request->admission;

        $children->save();

        return redirect('/admin/children/create')->with('success', 'Added successfully!');
    }

    public function index(){
        $children = Child::all()->toArray();
        return view('adminpages.children.view', compact('children'));
    }

    public function show($id){
    
    }

    public function edit($id){
        $children = Child::find($id);
        return view('adminpages.children.edit', compact('children', 'id'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'admission' => 'required'
        ]);
        $children = Child::find($id);

        $children->first_name = $request->firstname;
        $children->last_name = $request->lastname;
        $children->date_of_birth = $request->date;
        $children->gender = $request->gender;
        $children->description = $request->description;
        $children->admission_date = $request->admission;

        $children->save();
        return redirect('/admin/children/view')->with('success', 'Data updated Successfully');

    }

    public function destroy($id){
        $children = Child::find($id);
        $children->delete();
        return redirect('/admin/children/view')->with('success', 'Deleted successfully');
    }
}

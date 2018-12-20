<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function children(){
        return view('adminpages.children');
    }

    public function dashboard(){
        return view('adminpages.index');
    }
}

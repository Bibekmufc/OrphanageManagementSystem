<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Orphanage Management System';
        return view('pages.welcome')->with('title', $title);
    }

    public function about(){
        $title = 'About Orphanage Management System';
        return view('pages.about')->with('title', $title);
    }

    public function children(){
        $title = 'Children';
        return view('pages.children')->with('title', $title);
    }
    public function donate(){
        $title = 'Help us by donating. Every little effort counts towards a brighter future.';
        return view('pages.donate')->with('title', $title);
    }
    public function photos(){
        $title = 'Photos of Children';
        return view('pages.photos')->with('title', $title);
    }
    public function volunteer(){
        $title = 'Volunteer activities';
        return view('pages.volunteer')->with('title', $title);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LaravelGoogleGraph extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    function index()
    {
     $data = DB::table('children')
       ->select(
        DB::raw('gender as gender'),
        DB::raw('count(*) as number'))
       ->groupBy('gender')
       ->get();
     $array[] = ['gender', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->gender, $value->number];
     }
     return view('adminpages.index')->with('gender', json_encode($array));
    }
}

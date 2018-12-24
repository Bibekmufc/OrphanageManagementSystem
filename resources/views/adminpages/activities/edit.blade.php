@extends('layouts.adminlayout')


@section('title')
Edit Activities
@endsection

@section('content')

<style>
    * {
          box-sizing: border-box;
        }
        
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        
        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }
        
        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        
        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }
        
        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>



<h2 style="margin-left: 311px;">Edit Activity</h2>
<p>---------------------------------------------------------------------------------------------------------------------------</p>
<div class="container-fluid">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <form method="POST" action="{{action('ActivitiesController@update', $id)}}" style="margin-left: 81px;">
        @csrf
        <input type="hidden" name="_method" value="PATCH" />
        <div class="row">
            <div class="col-25">
                <label for="activity_name">Activity Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="activity_name" name="activity_name" placeholder="Activity Name" value="{{$activities->activity_name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="activity_location">Location</label>
            </div>
            <div class="col-75">
                <input type="text" id="activity_location" name="activity_location" placeholder="Location" value="{{$activities->last_name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="date">Date and Time</label>
            </div>
            <div class="col-75">
                <input type="datetime-local" id="date" name="date" value="{{$activities->date}}">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Update">
        </div>
    </form>
</div>
@endsection

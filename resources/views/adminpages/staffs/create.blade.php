@extends('layouts.adminlayout')


@section('title')
Dashboard
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

<h2 style="margin-left: 311px;">Add new Staff</h2>
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
    <form method="POST" action="/admin/staffs/create" style="margin-left: 81px;">
        @csrf
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="First Name">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Last Name">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="date">Date of Birth</label>
            </div>
            <div class="col-75">
                <input type="date" id="date" name="date" value="22/12/2018">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="gender">Gender</label>
            </div>
            <div class="col-75">
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="contact_number">Contact Number</label>
            </div>
            <div class="col-75">
                <input type="text" id="contact_number" name="contact_number" placeholder="Phone no.">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="address">Address</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Address">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="job_shift">Job Shift</label>
            </div>
            <div class="col-75">
                <select id="job_shift" name="job_shift">
                    <option value="day">Day</option>
                    <option value="night">Night</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="job_title">Job Title</label>
            </div>
            <div class="col-75">
                <select id="job_title" name="job_title">
                    <option value="receptionist">Receptionist</option>
                    <option value="cleaner">Cleaner</option>
                    <option value="caretaker">Care-taker</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Cook">Cook</option>
                    <option value="Dean">Dean</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection

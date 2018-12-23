@extends('layouts.app')

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

@section('title')
Volunteer
@endsection

@section('content')
<div class="container" style="padding-right: 55px; padding-left: 55px;">
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
  <div  class="alert alert-success">
  <p>{{\Session::get('success')}}</p>
  </div>
  @endif
    <form method="POST" action="/volunteer/apply">
      @csrf
        <div class="row">
            <div class="col-25">
                <label for="name">Full Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Your name..">
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
                <label for="nationality">Nationality</label>
            </div>
            <div class="col-75">
                <input type="text" id="nationality" name="nationality" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="date">Date of Birth</label>
            </div>
            <div class="col-75">
                <input type="date" id="date" name="date" value="">
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
                    <label for="contact_number">Contact Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="contact_number" name="contact_number" placeholder="Phone no.">
                </div>
        </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Email Address">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="education">Education</label>
                </div>
                <div class="col-75">
                    <select id="education" name="education">
                        <option value="Literate Only">Literate Only</option>
                        <option value="High School">High School</option>
                        <option value="Intermediate">Intermediate (+2)</option>
                        <option value="Bachelors Degree">Bachelors Degree</option>
                        <option value="Master Degree">Master Degree</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
                <div class="row">
                    <div class="col-25">
                        <label for="profession">Profession</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="profession" name="profession" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="program">Selected Program</label>
                    </div>
                    <div class="col-75">
                        <select id="program" name="program">
                            <option value="Work in Orphanage">Work in Orphanage</option>
                            <option value="Teaching English">Teaching English </option>
                            <option value="Home Stay Nepal">Home Stay Nepal </option>
                            <option value="Street Children Volunteer Program">Street Children Volunteer Program</option>
                            <option value="Church mission program">Church Mission Program</option>
                            <option value="Women & Children Empowerment Program">Women & Children Empowerment Program</option>
                            <option value=" Community Health Program"> Community Health Program</option>
                            <option value="Environmental Protection & Sanitation program: ">Environmental Protection
                                Program</option>
                            <option value="organic agriculture farm ">Organic Farm Program</option>
                            <option value="Cultural Exchange Program">Cultural Exchange Program</option>
                            <option value="All nepal tours Programs ">All nepal tours Programs </option>
                            <option value="Jungle Safari Program">Jungle Safari Program</option>
                            <option value="Summer Volunteer Program ">Summer Volunteer Program </option>
                            <option value="Office Administration volunteer program">Office Administration program
                            </option>
                            <option value="Vacation Bible School Program ">Vocational Bible School Program </option>
                            <option value="Children and Youth Ministry ">Children and Youth Ministry </option>
                            <option value="Evangelism Program">Evangelism Program </option>
                        </select>
                    </div>
                    <div class="row" style="float: right;">
                        <input type="submit" value="Submit">
                    </div>
    </form>
</div>

@endsection

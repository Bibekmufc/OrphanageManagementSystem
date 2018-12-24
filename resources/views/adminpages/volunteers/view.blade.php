@extends('layouts.adminlayout')


@section('title')
Volunteers
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">List of volunteers</h3>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <table class="table table-borederd">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Education</th>
                    <th>Profession</th>
                    <th>Selected Program</th>
                    <th>Delete</th>
                </tr>
                @foreach ($volunteers as $row)
                <tr>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['gender']}}</td>
                    <td>{{$row['nationality']}}</td>
                    <td>{{$row['dob']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>{{$row['contact_number']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['education']}}</td>
                    <td>{{$row['profession']}}</td>
                    <td>{{$row['selected_program']}}</td>
                    <td>
                        <form method="POST" class="delete_form" action="{{action('VolunteersController@destroy', $row['id'])}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.delete_form').on('submit', function ()) {
            if (confirm("Are you sure you want to delete this data?")) {
                return true;
            } else {
                return false;
            }
        });
    });

</script>
@endsection

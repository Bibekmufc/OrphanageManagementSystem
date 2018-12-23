@extends('layouts.adminlayout')


@section('title')
View Children
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center"> Activities </h3>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <a href="/admin/activities/create" class="btn btn-primary" style="float: right;">Add Activities</a>
            <br />
            <table class="table table-borederd">
                <tr>
                    <th>Activity Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($activities as $row)
                <tr>
                    <td>{{$row['activity_name']}}</td>
                    <td>{{$row['activity_location']}}</td>
                    <td>{{$row['date']}}</td>
                    <td><a href="{{action('ActivitiesController@edit', $row['id'])}}" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form method="POST" class="delete_form" action="{{action('ActivitiesController@destroy', $row['id'])}}">
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

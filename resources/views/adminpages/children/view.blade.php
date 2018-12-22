@extends('layouts.adminlayout')


@section('title')
View Children
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center"> Children Data </h3>
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{$message}}</p>
                </div>
                @endif
        <a href="/admin/children/create" class="btn btn-primary" style="float: right;">Add Children</a>
            <br />
                <table class="table table-borederd">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Description</th>
                        <th>Admission Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                        @foreach ($children as $row)
                        <tr>
                        <td>{{$row['first_name']}}</td>
                        <td>{{$row['last_name']}}</td>
                        <td>{{$row['date_of_birth']}}</td>
                        <td>{{$row['gender']}}</td>
                        <td>{{$row['description']}}</td>
                        <td>{{$row['admission_date']}}</td>
                        <td><a href="{{action('ChildrenController@edit', $row['id'])}}" class="btn btn-secondary">Edit</a></td>
                        <td>
                        <form method="POST" class="delete_form" action="{{action('ChildrenController@destroy', $row['id'])}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE"/>
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
        $(document).ready(function(){
            $('.delete_form').on('submit', function()){
                if(confirm("Are you sure you want to delete this data?"))
                {
                    return true;
                }
                else{
                    return false;
                }
            });
        });
    </script>
@endsection
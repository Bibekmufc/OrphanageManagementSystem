@extends('layouts.adminlayout')


@section('title')
View Children
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center"> Users </h3>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <table class="table table-borederd" style="margin-left: 100px">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach ($users as $row)
                <tr>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['email']}}</td>
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

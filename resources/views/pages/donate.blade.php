@extends('layouts.app')

@section('title')
        Donate
@endsection
@section('content')
<div class="jumbotron">
        <div class="container">
                <h1>{{$title}}</h1>
                <p>You can donate with bitcoin into the following address.</p>
                <input type="myInp" type="text" value="Hello!">
                <button id="btnCopy"> Copy Address </button>   

                <script type="text/javascript">
                        const myInp = document.getElementById("myInp");
                        const btnCopy = document.getElementById("btnCopy");
                
                        btnCopy.onclick = function(){
                                myInp.select();
                                document.execCommand("Copy");    
                        }
                </script>
        </div>
</div>
@endsection
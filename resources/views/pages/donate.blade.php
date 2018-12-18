@extends('layouts.app')

@section('title')
        Donate
@endsection
@section('content')

<div class="jumbotron">
        <div class="container">
                <h1>{{$title}}</h1>
                <p>You can donate with bitcoin into the following address.</p>
                 <input type="text" value="Hello World" id="myInput" disabled>

                <div class="tooltip">
                <button onclick="myFunction()" onmouseout="outFunc()">
                <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                Copy
                </button>
                </div>

                <script>
                function myFunction() {
                var copyText = document.getElementById("myInput");
                copyText.select();
                document.execCommand("copy");
                
                var tooltip = document.getElementById("myTooltip");
                tooltip.innerHTML = "Copied: " + copyText.value;
                }

                function outFunc() {
                var tooltip = document.getElementById("myTooltip");
                tooltip.innerHTML = "Copy to clipboard";
                }
                </script>
        </div>
</div>
@endsection
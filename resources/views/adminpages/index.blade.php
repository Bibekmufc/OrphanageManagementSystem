@extends('layouts.adminlayout')



@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <h3 align="center">Report</h3><br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Percentage of Male and Female Children</h3>
        </div>
        <div class="panel-body" align="center">
            <div id="pie_chart" style="width:750px; height:450px;">

            </div>
        </div>
    </div>

</div>
<style type="text/css">
    .box {
        width: 800px;
        margin: 0 auto;
    }

</style>
<script type="text/javascript">
    var analytics = <?php echo $gender; ?>

    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title: 'Percentage of Male and Female Employee'
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
    }

</script>

@endsection

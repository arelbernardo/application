@extends('layouts.app')

@section('content')
<div class="container-fluid custom_fluid-container">
    <div class="custom_home-head-banner">
        Lorem ipsum dolor sit amet ...
    </div>
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 app_container">
        <div class="expenses_chart-container text-center col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
            <!--daily spent-->
            <div class="expenses_panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Graph 1
                    </div>
                    <div class="panel-body">
                        <canvas id="expense-one"></canvas>
                    </div>
                </div>
            </div>
            <!--remaining budget-->
            <div class="expenses_panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Graph 2
                    </div>
                    <div class="panel-body">
                        <canvas id="expense-two"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var HomeGraphs = new HomeGraphs();
</script>
@endsection
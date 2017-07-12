@extends('layouts.app')

@section('content')
<div class="custom_fluid-container container-fluid">
    <div class="custom_home-head-banner">
        Lorem ipsum dolor sit amet ...
    </div>
    <div class="app_container col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
        <div class="expenses_chart-container">
            <!--daily spent-->
            <div class="expenses_panel-container col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Top Categories
                    </div>
                    <div class="panel-body">
                        <canvas id="expense-one"></canvas>
                    </div>
                </div>
            </div>
            <!--remaining budget-->
            <div class="expenses_panel-container col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Expenses for the last 3 Months
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
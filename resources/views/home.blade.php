@extends('layouts.app')
@section('content')
<div class="module_container col-sm-4">
    <div class="module_search-panel panel panel-default">
        <div class="panel-heading">My Modules</div>
        <div class="panel-body">
            <div class="input-group">
                <input type="text" class="form-control" id="searchModule" name="searchModule" placeholder="search a module ...">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button">search</button>
                </span>
            </div>
        </div>
        <!--loop goes here-->
        <div class="module_item panel-body"><a href="#">Item A</a></div>
        <div class="module_item panel-body"><a href="#">Item B</a></div>
        <div class="module_item panel-body"><a href="#">Item C</a></div>
        <div class="module_item panel-body"><a href="#">Item D</a></div>
    </div>
</div>
<div class="module_container col-sm-8">
    <div class="module_result-panel panel panel-default">
        <div class="panel-heading">Results</div>
        <div class="panel-body"><i>results goes here</i></div>
    </div>
</div>
@endsection
@section('scripts')
    <script></script>
@endsection
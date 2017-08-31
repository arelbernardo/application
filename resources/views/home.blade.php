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
        @if(count($modules) > 0)
            @foreach($modules as $item)
                <div class="module_item panel-body"><a href="{{$item['url']}}" title="{{$item['name']}}">{{$item['name']}}</a></div>
            @endforeach
        @else
            <div class="module_item panel-body"><i>no modules found</i></div>
        @endif
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
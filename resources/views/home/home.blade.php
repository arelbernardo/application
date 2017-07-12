@extends('layouts.app')

@section('content')
<div class="custom_fluid-container container-fluid">
    <div class="custom_home-head-banner">
    </div>
    <div class="app_container col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
        <div class="expenses_add-expense row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group pull-right">
                    <button class="btn btn-default btn-sm" type="button" title="add an expense">
                        <i class="glyphicon glyphicon-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        @include('home.partials.widgets')
    </div>
</div>
@endsection
@section('scripts')
<script>
    new HomeManager();
</script>
@endsection
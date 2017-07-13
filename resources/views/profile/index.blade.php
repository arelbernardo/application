@extends('layouts.app')

@section('content')
<div class="custom_fluid-container container-fluid">
    <div class="custom_home-head-banner">
    </div>
    <div class="app_container col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
        <div class="expenses_add-expense row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="modal_add-expense" data-backdrop="false" data-keyboard="false" data-focus="true"></div>
                <div class="form-group pull-right">
                    @include('resources.button.add', array(
                        'id' => 'btn_add-expense',
                        'title' => 'add an expense',
                        'hasIcon' => true
                    ))
                </div>
            </div>
        </div>
        @include('profile.partials.widgets')
    </div>
</div>
@endsection
@section('scripts')
<script>
    new HomeManager();
</script>
@endsection
@extends('layouts.app')

@section('content')
<div class="custom_fluid-container container-fluid">
    <div class="custom_home-head-banner">
    </div>
    <div class="app_container container">
        <div id="organizer_container">
            <div class="organizer_item_container col-sm-3">
                <div class="organizer_item col-sm-12">
                    <div class="organizer_banner">

                    </div>
                    <div class="organizer_title">Finance app</div>
                </div>
            </div>
            <div class="organizer_item_container col-sm-3">
                <div class="organizer_item col-sm-12">
                    <div class="organizer_banner">

                    </div>
                    <div class="organizer_title">Note taking app</div>
                </div>
            </div>
            <div class="organizer_item_container col-sm-3">
                <div class="organizer_item col-sm-12">
                    <div class="organizer_banner">

                    </div>
                    <div class="organizer_title">Scheduler app</div>
                </div>
            </div>
            <div class="organizer_item_container col-sm-3">
                <div class="organizer_item col-sm-12">
                    <div class="organizer_banner">

                    </div>
                    <div class="organizer_title">Etc Etc</div>
                </div>
            </div>
        </div>
        {{--<div class="expenses_add-expense row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="modal_add-expense" class="modal fade modal-xs" role="dialog" data-keyboard="false" data-focus="true"></div>
                <div class="form-group pull-right">
                    @include('resources.button.add', array(
                        'id' => 'btn_add-expense',
                        'title' => 'add an expense',
                        'hasIcon' => true
                    ))
                </div>
            </div>
        </div>
        @include('profile.partials.widgets')--}}
    </div>
</div>
@endsection
@section('scripts')
<script>
    {{--new ProfileManager('{{Auth::user()->username}}');--}}
</script>
@endsection
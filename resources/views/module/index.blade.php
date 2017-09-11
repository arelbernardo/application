@extends('layouts.app')
@section('content')
    @include('module.partials.module_banner')
    @include('resources.tab.module_tabmenu')
    <div class="tab-content">
    @yield('module_tab-content')
    </div>
@endsection
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'application') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('js/library/jquery/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/library/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="wrapper">
        @include('layouts.navbar')
        <div style="height:95px;"></div>
        <div class="custom_fluid-container container-fluid">
            <div class="app_container container">
                @yield('content')
            </div>
        </div>
        <div class="push"></div>
    </div>
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/library/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/library/jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/library/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/library/chart/Chart.min.js') }}"></script>
@if(env('ENV_TYPE') == 'development')
    <script src="{{ asset('js/app.js') }}"></script>
@else
    <script src="{{ asset('js/app.min.js') }}"></script>
@endif
<!-- local scripts -->
@yield('scripts')
<script>
    new AppGlobalListener();
</script>
</body>
</html>

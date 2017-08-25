@extends('layouts.app')
@section('content')
    <div class="container_error">
        <div class="error_code text-center">{{$code}}</div>
        <div class="error_message text-center">{{$msg}}</div>
    </div>
@endsection

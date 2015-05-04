@extends('app')

@section('main')
    <div class="col-md-12">
        <h2>Login</h2>
        <hr>
    </div>

    @include('auth.login_form')
@stop

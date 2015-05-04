@extends('app')

@section('main')
    <div class="col-md-12">
        <h1>Welcome</h1>
        <p>{!! link_to_route('login', 'Login', null, ['class' => 'btn btn-primary']) !!}</p>
    </div>
@stop

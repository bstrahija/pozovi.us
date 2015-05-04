@extends('app')

@section('main')
    <div class="col-md-12">
        <h1>Dashboard</h1>
        <p>{!! link_to_route('logout', 'Logout', null, ['class' => 'btn btn-danger']) !!}</p>
    </div>
@stop

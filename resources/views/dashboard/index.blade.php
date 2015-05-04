@extends('app')

@section('main')
    <div class="col-md-12">
        <h1>Dashboard</h1>
        <p>{!! link_to_route('logout', 'Logout', null, ['class' => 'btn btn-danger']) !!}</p>
        <?php echo '<pre>'; print_r(var_dump(Auth::user()->toArray())); echo '</pre>'; ?>
    </div>
@stop

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pozovi.us</title>

    @include('partials.assets_head')
</head>
<body>
<div class="container">
    <h1>Dashboard</h1>
    <p>{!! link_to_route('logout', 'Logout', null, ['class' => 'btn btn-danger']) !!}</p>
</div>
</body>
</html>



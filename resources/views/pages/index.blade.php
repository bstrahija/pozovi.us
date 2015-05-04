<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pozovi.us</title>

    @include('partials.assets_head')
</head>
<body>
<div class="container">
    <h1>Welcome</h1>
    <p>{!! link_to_route('login', 'Login', null, ['class' => 'btn btn-primary']) !!}</p>
</div>
</body>
</html>

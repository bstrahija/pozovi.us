<div class="col-md-12">
    <h2>Login</h2>
    <hr>
</div>


{!! Form::open(['route' => 'login.attempt', 'class' => 'col-md-12']) !!}
    <div class="row text-center">
        <div class="col-md-6 col-xs-6">
            <a href="{{ route('auth.social', 'facebook') }}" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Facebook</a>
        </div>

        <div class="col-md-6 col-xs-6">
            <button type="button" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Google+</button>
        </div>
    </div>

    <hr>

    <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => 'Email', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => 'Password', 'required']) !!}
    </div>

    <hr>

    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-lock"></i> Sign In</button>
    </div>
{!! Form::close() !!}

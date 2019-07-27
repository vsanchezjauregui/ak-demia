@extends('templates/main_no_nav')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        {!! Form::open(['route' => 'login', 'class' => 'form-signin', 'method' => 'POST']) !!}
            {!! csrf_field() !!}
            <span id="reauth-email" class="reauth-email"></span>
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required', 'autofocus']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            {!! Form::password('password',  ['class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            
            {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-lg btn-outline-info btn-block btn-signin']) !!}
        {!! Form::close() !!}
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
@endsection        
            
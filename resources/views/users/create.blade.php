@extends('templates/main')

@section('title', 'Crear Usuario')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-6 ">
                <h4 class="card-title">Crear usuario</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => 'users.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com', 'required']) !!}
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password',  ['class' => 'form-control', 'placeholder' => '**************', 'required']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('password_confirmation', 'Confirme su password') !!}
                            {!! Form::password('password_confirmation',  ['class' => 'form-control', 'placeholder' => '**************', 'required']) !!}    
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_type', 'Tipo de usuario') !!}
                        {!! Form::select('user_type',  ['' => 'Seleccione el tipo de usuario', 'user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::submit('Registrar', ['class' => 'btn btn-block btn-outline-info']) !!}    
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block btn-outline-danger" href="{{ route('users.index') }}">Cancelar</a>    
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}         
            </div>
        </div>    
    </section>
    
    
@endsection

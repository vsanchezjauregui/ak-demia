@extends('templates/main')

@section('title', 'Editar Usuario')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-6 ">
                <h4 class="card-title">Editar {{ $user->name }}</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo') !!}
                        {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_type', 'Tipo de usuario') !!}
                        {!! Form::select('user_type',  ['user' => 'Usuario', 'admin' => 'Administrador'], $user->user_type, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::submit('Actualizar', ['class' => 'btn btn-block btn-outline-info']) !!}    
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block btn-outline-danger" href="{{ URL::previous() }}">Cancelar</a>    
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}         
            </div>
        </div>    
    </section> 
    
    
@endsection

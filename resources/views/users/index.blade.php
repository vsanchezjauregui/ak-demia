@extends('templates/main')

@section('title', 'Lista de usuarios')

@section('content')
    <div class='card'>
        @include('flash::message')
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'form-inline float-left']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="serch"><i class="fa fa-search"></i></span>
                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!} 
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4 pull-center">
                <h3>Lista de usuarios</h3>
            </div>
            <div class="col-md-4">
                <a href="{{ route('users.create') }}" class='btn btn-outline-info float-right'><i class='fa fa-chalkboard-teacher'></i> Agregar un nuevo usuario</a>                
            </div>
        </div><hr>
        <div style='display: @if(count($users)==0) block; @else none @endif'>
            No se han registrado usuarios! haga click en el botón superior para crear uno nuevo     
        </div>
        <div style='display: @if(count($users)>0) block; @else none @endif'>
            
            <table class='table table-striped table-hover table-sm'>
                <thead>
                    <th>Nivel</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if($user->user_type == 'admin')
                                    <span class='badge badge-admin'>Administrador</span>
                                @else
                                    <span class='badge badge-user'>Usuario</span>
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('users.edit', $user->id) }}" class='btn btn-info'><i class='fa fa-user-edit'></i></a> <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Desea eliminar ')" class='btn btn-danger'><i class='fa fa-trash-alt'</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>
    </div>
@endsection
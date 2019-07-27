@extends('templates/main')

@section('title', 'Lista de profesores')

@section('content')
    <div class='card'>
        @include('flash::message')
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['route' => 'teachers.index', 'method' => 'GET', 'class' => 'form-inline float-left']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="serch"><i class="fa fa-search"></i></span>
                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!} 
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4 pull-center">
                <h3>Lista de profesores</h3>
            </div>
            <div class="col-md-4">
                <a href="{{ route('teachers.create') }}" class='btn btn-outline-info float-right'><i class='fa fa-chalkboard-teacher'></i> Agregar un nuevo profesor</a>                
            </div>
        </div><hr>
        <div style='display: @if(count($teachers)==0) block; @else none @endif'>
            No se han registrado Profesores! haga click en el botón superior para crear uno nuevo     
        </div>
        <div style='display: @if(count($teachers)>0) block; @else none @endif'>
            <table class='table table-striped table-hover table-sm'>
                <thead>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ substr($teacher->cell_phone,0,4).'-'.substr($teacher->cell_phone,4) }}</td>
                            <td><a class='btn btn-outline-success btn-sm' href="{{ route('teachers.show', $teacher->id) }}"><i class="fa fa-eye"></i></a> <a href="{{ route('teachers.edit', $teacher->id) }}" class='btn btn-outline-info btn-sm'><i class='fa fa-user-edit'></i></a> <a href="{{ route('teachers.destroy', $teacher->id) }}" onclick="return confirm('Desea eliminar ')" class='btn btn-sm btn-outline-danger'><i class='fa fa-trash-alt'</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $teachers->render() !!}
        </div>
    </div>
@endsection
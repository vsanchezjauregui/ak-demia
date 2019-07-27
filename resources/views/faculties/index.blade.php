@extends('templates/main')

@section('title', 'Lista de Facultades')

@section('content')
    <div class='card col-md-8'>
        @include('flash::message')
        <div class="row">
            <div class="col-md-3">
                {!! Form::open(['route' => 'faculties.index', 'method' => 'GET', 'class' => 'form-inline float-left']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="serch"><i class="fa fa-search"></i></span>
                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!} 
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6 pull-center">
                <h3>Lista de Facultades</h3>
            </div>
            <div class="col-md-3">
                <a href="{{ route('faculties.create') }}" class='btn btn-outline-info btn-sm float-right'><i class='fa fa-university'></i> Agregar una nueva Facultad</a>                
            </div>
        </div><hr>
        <div style='display: @if(count($faculties)==0) block; @else none @endif'>
            No se han registrado Facultades! Haga click en el botón superior para crear una nueva
        </div>
        <div style='display: @if(count($faculties)>0) block; @else none @endif'>
            <table class='table table-striped table-hover table-sm'>
                <thead>
                    <th class="centrar">Nombre</th>
                    <th class="centrar">Decano</th>
                    <th class="centrar">Acciones</th>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                        <tr>
                            <td class="centrar">{{ $faculty->faculty_name }} </td>
                            <td class="centrar">
                                @foreach($teachers as $teacher)
                                    @if ($teacher->id == $faculty->id_teacher)
                                        {{ $teacher->name.' '.$teacher->last_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="centrar"><a class='btn btn-outline-success btn-sm' href="{{ route('faculties.show', $faculty->id) }}"><i class="fa fa-eye"></i></a> <a href="{{ route('faculties.edit', $faculty->id) }}" class='btn btn-outline-info btn-sm'><i class='fa fa-edit'></i></a> <a href="{{ route('faculties.destroy', $faculty->id) }}" onclick="return confirm('Desea eliminar')" class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-alt'</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $faculties->render() !!}
        </div>
    </div>
@endsection
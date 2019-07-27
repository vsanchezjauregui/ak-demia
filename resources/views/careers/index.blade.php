
@extends('templates/main')

@section('title', 'Lista de carreras')

@section('content')
    <div class='card col-md-8'> 
        @include('flash::message')
        <div class="row">
            <div class="col-md-3">
                {!! Form::open(['route' => 'careers.index', 'method' => 'GET', 'class' => 'form-inline float-left']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="serch"><i class="fa fa-search"></i></span>
                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!} 
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6 pull-center">
                <h3>Lista global de Carreras</h3>
            </div>
            <div class="col-md-3">
                <a href="{{ route('careers.create') }}" class='btn btn-outline-info btn-sm float-right'><i class='fa fa-graduation-cap'></i> Agregar una nueva Carrera</a>                
            </div>
        </div><hr>
        
        <div style='display: @if(count($careers)==0) block; @else none @endif'>
            No se han registrado Carreras! Haga click en el botón superior para crear una nueva
        </div>
        <div style='display: @if(count($careers)>0) block; @else none @endif'>
            <table class='table table-striped table-hover table-sm'>
                <thead>
                    <th>Facultad</th>
                    <th>Nombre</th>
                    <th>Nivel</th>
                    <th class='centrar'>Acciones</th>
                </thead>
                <tbody>
                    @foreach($careers as $career)
                        <tr>
                            <td>
                                @foreach($faculties as $faculty)
                                    @if($faculty->id == $career->id_faculty)
                                        {{ $faculty->faculty_name }}
                                    @endif    
                                @endforeach
                            </td>
                            <td>{{ $career->career_name }} </td>
                            <td>
                                @switch($career->career_level)
                                    @case('tec')
                                        Técnica
                                        @break
                                    @case('bach')
                                        Bachillerato
                                        @break
                                    @case('lic')
                                        Licenciatura
                                        @break
                                    @case('maes')
                                        Maestría
                                        @break
                                @endswitch
                            </td>
                            <td class="centrar"><a class='btn btn-outline-success btn-sm' href="{{ route('careers.show', $career->id) }}"><i class="fa fa-eye"></i></a> <a href="{{ route('careers.edit', $career->id) }}" class='btn btn-outline-info btn-sm'><i class='fa fa-edit'></i></a> <a href="{{ route('careers.destroy', $career->id) }}" onclick="return confirm('Desea eliminar')" class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-alt'</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $careers->render() !!}
        </div>
    </div>
@endsection
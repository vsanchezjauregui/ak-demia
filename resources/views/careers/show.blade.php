@extends('templates/main')

@section('title', 'Detalles de carrera')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-8">
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li> 
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title"><i class='fa fa-university'></i> Carrera de {{ $career->career_name }}</h3>    
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-outline-info float-right" href="{{ route('careers.index') }}"><i class="fa fa-arrow-circle-left"></i> Volver a la lista</a>
                    </div>
                </div><hr>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active a_roja" id="detalles-tab" data-toggle="tab" href="#detalles" role="tab" aria-controls="detalles" aria-selected="false">Detalles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a_roja" id="materias-tab" data-toggle="tab" href="#materias" role="tab" aria-controls="materias" aria-selected="false">Materias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a_roja" id="alumnos-tab" data-toggle="tab" href="#alumnos" role="tab" aria-controls="alumnos" aria-selected="false">Alumnos</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="detalles" role="tabpanel" aria-labelledby="detalles-tab">
                        <div class="container separa_arriba">
                            <div class="row">
                                {!! Form::label('career_description', 'Objetivo General', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10 centrar_etiqueta justificar">
                                    <p>
                                        <b>{{ $career->career_description }}</b>
                                    </p>
                                </div>
                            </div><hr>
                            <div class="row form-group">
                                <div class="col-5">
                                    <div class="row">
                                        {!! Form::label('id_faculty', 'Facultad', ['class' => 'col-sm-4 col-form-label menos-padding-lados']) !!}
                                        <div class="col-sm-8 centrar_etiqueta menos-padding-lados"> 
                                            <b>{{ $career->id_faculty }}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        {!! Form::label('career_cheif', 'Jefe de carrera', ['class' => 'col-sm-4 col-form-label menos-padding-lados']) !!}
                                        <div class="col-sm-8 centrar_etiqueta menos-padding-lados">
                                            <b>{{ $career->career_cheif }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div><hr>
                            <div class="row form-group">
                                <div class="col-4">
                                    {!! Form::label('career_level', 'Nivel', ['class' => ' col-form-label']) !!}<br>
                                    <b>
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
                                    </b>
                                </div>
                                <div class="col-4">
                                    {!! Form::label('career_modality', 'Modalidad', ['class' => 'col-form-label']) !!}<br>
                                    <b>
                                        @switch($career->career_modality)
                                            @case('12')
                                                Anual
                                                @break
                                            @case('6')
                                                Semestral
                                                @break
                                            @case('4')
                                                Cuatrimestral
                                                @break
                                            @case('2')
                                                Bimestral
                                                @break
                                            @case('1')
                                                Mensual
                                                @break
                                        @endswitch
                                    </b>
                                </div>
                                <div class="col-4">
                                    {!! Form::label('career_cheif', 'Duración', ['class' => 'col-form-label']) !!}<br>
                                    <b>{{ $career->career_duration . ' ' }}
                                        @switch($career->career_modality)
                                            @case('12')
                                                años
                                                @break
                                            @case('6')
                                                semestres
                                                @break
                                            @case('4')
                                                cuatrimestres
                                                @break
                                            @case('2')
                                                bimestres
                                                @break
                                            @case('1')
                                                meses
                                                @break
                                        @endswitch
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="materias" role="tabpanel" aria-labelledby="materias-tab">
                        <div style="display:flex; justify-content:center" class="separa_arriba">
                            <h3>Also, Coming soon...</h3>    
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
                        <div style="display:flex; justify-content:center" class="separa_arriba">
                            <h3>Also, Coming soon...</h3>    
                        </div>
                    </div>
                </div>
                <hr>
                <div class="float-right">
                    <a class="btn btn-outline-info btn-sm float-right" href="{{ route('careers.edit', $career->id) }}"><i class="fa fa-edit"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection

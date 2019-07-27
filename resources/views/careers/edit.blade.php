@extends('templates/main')

@section('title', 'Editar Carrera')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-6">
                
            <h4 class="card-title"><i class='fa fa-graduation-cap'></i> Editar la carrera de {{ $career->career_name }}</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => ['careers.update', $career->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('career_name', '*Nombre de la Carrera') !!}
                        {!! Form::text('career_name', $career->career_name, ['class' => 'form-control']) !!}
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('id_faculty', 'Facultad a la que pertenece') !!}
                            {!! Form::select('id_faculty', $faculties, $career->id_faculty, ['class' => 'form-control', 'placeholder' => 'Ninguna']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('career_cheif', 'Jefe de carrera') !!}
                            {!! Form::select('career_cheif', $teachers, $career->career_cheif, ['class' => 'form-control', 'placeholder' => 'Ninguno']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            {!! Form::label('career_level', '*Nivel académico') !!}
                            {!! Form::select('career_level', ['tec' => 'Técnica', 'bach' 
                            => 'Bachillerato', 'lic' => 'Licenciatura', 'maes' => 'Maestría'], $career->career_level, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('career_modality', '*Modalidad') !!}
                            {!! Form::select('career_modality', ['12' => 'Anual', '6' 
                            => 'Semestral', '4' => 'Cuatrimestral', '3' => 'Trimestral', '2' => 'Bimensual', '1' => 'Mensual'], $career->career_modality, ['class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('career_duration', '*Cantidad de Periodos') !!}
                            {!! Form::number('career_duration', $career->career_duration, ['class' => 'form-control', 'min' => '1', 'placeholder' => '1']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('career_description', 'Objetivo General') !!}
                        {!! Form::textarea('career_description', $career->career_description, ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    (*) Campos requeridos
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                {!! Form::submit('Actualizar', ['class' => 'btn btn-block btn-outline-info']) !!}    
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-outline-danger" href="{{ URL::previous() }}">Cancelar</a>    
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>    
    </section>
    
    
@endsection

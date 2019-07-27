@extends('templates/main')

@section('title', 'Detalles del profesor')

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
                        <h3 class="card-title"><i class='fa fa-chalkboard-teacher'></i> {{ $teacher->name.' '.$teacher->last_name }}</h3>    
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-outline-info float-right" href="{{ route('teachers.index') }}"><i class="fa fa-arrow-circle-left"></i> Volver a la lista</a>
                    </div>
                </div><hr>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active a_roja" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Datos personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a_roja" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Dirección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a_roja" id="materias-tab" data-toggle="tab" href="#materias" role="tab" aria-controls="materias" aria-selected="false">Materias</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container separa_arriba">
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="row">
                                        {!! Form::label('email', 'Correo', ['class' => 'col-sm-3 col-form-label']) !!}
                                        <div class="col-sm-9 centrar_etiqueta"> 
                                            <b>{{ $teacher->email }}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {!! Form::label('id_num', 'Cédula', ['class' => 'col-sm-3 col-form-label']) !!}
                                        <div class="col-sm-9 centrar_etiqueta">
                                            <b>{{ $teacher->id_num }}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {!! Form::label('gender', 'Género', ['class' => 'col-sm-3 col-form-label']) !!}
                                        <div class="col-sm-9 centrar_etiqueta">
                                            <b>
                                                @if($teacher->gender == 'male')
                                                    Masculino
                                                @else
                                                    Femenino
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        {!! Form::label('cell_phone', 'Teléfono celular', ['class' => 'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6 centrar_etiqueta">
                                            <b>{{ substr($teacher->cell_phone,0,4).'-'.substr($teacher->cell_phone,4) }}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {!! Form::label('home_phone', 'Teléfono de casa', ['class' => 'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6 centrar_etiqueta">
                                            <b>{{ substr($teacher->home_phone,0,4).'-'.substr($teacher->home_phone,4) }}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {!! Form::label('work_phone', 'Teléfono de trabajo', ['class' => 'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6 centrar_etiqueta">
                                            <b>{{ substr($teacher->work_phone,0,4).'-'.substr($teacher->work_phone,4) }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div><hr>
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="row">
                                        {!! Form::label('nationality', 'País de procedencia', ['class' => 'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6 centrar_etiqueta">
                                            <b>{{ $teacher->nationality }}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        {!! Form::label('degree', 'Nivel Académico', ['class' => 'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6 centrar_etiqueta">
                                            <b>{{ $teacher->degree }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container separa_arriba">
                            <div class="row form-group">
                                <div class="col-4">
                                    {!! Form::label('province', 'Provincia', ['class' => ' col-form-label']) !!}<br>
                                    <b>{{ $teacher->province }}</b>
                                </div>
                                <div class="col-4">
                                    {!! Form::label('canton', 'Cantón', ['class' => 'col-form-label']) !!}<br>
                                    <b>{{ $teacher->canton }}</b>
                                </div>
                                <div class="col-4">
                                    {!! Form::label('Distrito', 'Distrito', ['class' => 'col-form-label']) !!}<br>
                                    <b> {{ $teacher->district }} </b>
                                </div>
                            </div><hr>
                            <div class="row">
                                {!! Form::label('nationality', 'Señas', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10 centrar_etiqueta">
                                    <p>
                                        <b>{{ $teacher->address }}</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="materias" role="tabpanel" aria-labelledby="contact-tab">
                        <div style="display:flex; justify-content:center" class="separa_arriba">
                            <h3>Coming soon...</h3>    
                        </div>
                    </div>
                </div>
                <hr>
                <div class="float-right">
                    <a class="btn btn-outline-info btn-sm float-right" href="{{ route('teachers.edit', $teacher->id) }}"><i class="fa fa-user-edit"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection

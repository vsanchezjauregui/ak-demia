@extends('templates/main')

@section('title', 'Insertar Profesor')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-10 ">
                
            <h4 class="card-title"><i class='fa fa-chalkboard-teacher'></i> Insertar un nuevo profesor</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => 'teachers.store']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        {!! Form::label('name', '*Nombre') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('last_name', '*Apellido') !!}
                                        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        {!! Form::label('email', '*Correo') !!}
                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('gender', 'Género') !!}
                                        <div class=" custom-radio custom-control-inline">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                {!! Form::radio('gender', 'male', true, ['class' => 'custom-control-input', 'id' => 'customRadioInline1']); !!}
                                                <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                {!! Form::radio('gender', 'female', false, ['class' => 'custom-control-input', 'id' => 'customRadioInline2']); !!}
                                                <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('id_num', 'Cédula') !!}
                                        {!! Form::text('id_num', null, ['class' => 'form-control cedula']) !!}
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('degree', 'Nivel académico') !!}
                                        {!! Form::text('degree', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('cell_phone', '*Telefono celular') !!}
                                        {!! Form::text('cell_phone', null, ['class' => 'form-control phone']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('home_phone', 'Telefono de casa') !!}
                                        {!! Form::text('home_phone', null, ['class' => 'form-control phone']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('work_phone', 'Telefono trabajo') !!}
                                        {!! Form::text('work_phone', null, ['class' => 'form-control phone']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('nationality', 'Nacionalidad') !!}
                                        <select class="form-control" name="nationality" id="nationality">
                                            <?php
                                                foreach ($variables['countries'] as $country){
                                                    echo    '<option value="'.$country->iso3166a1.'"';
                                                    if ($country->iso3166a1=="CR"){
                                                        echo " selected";
                                                    }
                                                    echo    '>'.$country->nombre;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('province', 'Provincia') !!}
                                        <select class="form-control" name="province" id="province">
                                            <option value="">Seleccione...</option>
                                            <?php
                                                foreach ($variables['provincias'] as $provicia){
                                                    echo    '<option value="'.$provicia->numeroProvincia.'">'.$provicia->nombre;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('canton', 'Canton') !!}
                                        <select class="form-control" name="canton" id="canton">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('district', 'Distrito') !!}
                                        <select class="form-control" name="district" id="district">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Señas') !!}
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '4']) !!}
                            </div>
                        </div>
                    </div>
                    (*) Campos requeridos
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                {!! Form::submit('Registrar', ['class' => 'btn btn-block btn-outline-info']) !!}    
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-outline-danger" href="{{ route('teachers.index') }}">Cancelar</a>    
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>    
    </section>
    
    
@endsection

@extends('templates/main')

@section('title', 'Editar Profesor')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-10 ">
                
            <h4 class="card-title"><i class='fa fa-chalkboard-teacher'></i> Editando a {{ $variables['teacher']->name.' '.$variables['teacher']->last_name }}</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert"> 
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li> 
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => ['teachers.update', $variables['teacher']->id], 'method' => 'PUT']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        {!! Form::label('name', '*Nombre') !!}
                                        {!! Form::text('name', $variables['teacher']->name, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('last_name', '*Apellido') !!}
                                        {!! Form::text('last_name', $variables['teacher']->last_name, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class='col-md-6'> 
                                    <div class="form-group">
                                        {!! Form::label('email', '*Correo') !!}
                                        {!! Form::email('email', $variables['teacher']->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('gender', 'Género') !!}
                                        <div class="custom-radio custom-control-inline">
                                            @if($variables['teacher']->gender == 'male')
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    {!! Form::radio('gender', 'male', true, ['class' => 'custom-control-input', 'id' => 'customRadioInline1']); !!}
                                                    <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    {!! Form::radio('gender', 'female', false, ['class' => 'custom-control-input', 'id' => 'customRadioInline2']); !!}
                                                    <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                                                </div> 
                                            @else
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    {!! Form::radio('gender', 'male', true, ['class' => 'custom-control-input', 'id' => 'customRadioInline1']); !!}
                                                    <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    {!! Form::radio('gender', 'female', false, ['class' => 'custom-control-input', 'id' => 'customRadioInline2']); !!}
                                                    <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                                                </div> 
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('id_num', 'Cédula') !!}
                                        {!! Form::text('id_num', $variables['teacher']->id_num, ['class' => 'form-control cedula']) !!}
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('degree', 'Nivel académico') !!}
                                        {!! Form::text('degree', $variables['teacher']->degree, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('cell_phone', '*Telefono celular') !!}
                                        {!! Form::text('cell_phone', $variables['teacher']->cell_phone, ['class' => 'form-control phone']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('home_phone', 'Telefono de casa') !!}
                                        {!! Form::text('home_phone', $variables['teacher']->home_phone, ['class' => 'form-control phone']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('work_phone', 'Telefono trabajo') !!}
                                        {!! Form::text('work_phone', $variables['teacher']->work_phone, ['class' => 'form-control phone']) !!}
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
                                                    if ($country->iso3166a1==$variables['teacher']->nationality){
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
                                            <?php
                                                foreach ($variables['provincias'] as $provincia){
                                                    echo    '<option value="'.$provincia->numeroProvincia.'"';
                                                    if($provincia->numeroProvincia == $variables['teacher']->province){
                                                        echo ' selected';
                                                    }
                                                    echo '>'.$provincia->nombre;
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
                                            <?php
                                                foreach ($variables['cantones'] as $canton){
                                                    echo    '<option value="'.$canton->numeroCanton.'"';
                                                    if($canton->numeroCanton == $variables['teacher']->canton){
                                                        echo ' selected';
                                                    }
                                                    echo '>'.$canton->nombre;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('district', 'Distrito') !!}
                                        <select class="form-control" name="district" id="district">
                                            <?php
                                                foreach ($variables['distritos'] as $distrito){
                                                    echo    '<option value="'.$distrito->numeroDistrito.'"';
                                                    if($distrito->numeroDistrito == $variables['teacher']->district){
                                                        echo ' selected';
                                                    }
                                                    echo '>'.$distrito->nombre;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Señas') !!}
                                {!! Form::textarea('address', $variables['teacher']->address, ['class' => 'form-control', 'rows' => '4']) !!}
                            </div>
                        </div>
                    </div>
                    (*) Campos requeridos
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                {!! Form::submit('Actualizar', ['class' => 'btn btn-block btn-outline-info']) !!}    
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-outline-danger" href="{{  URL::previous() }}">Cancelar</a>    
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>    
    </section>
    
    
@endsection

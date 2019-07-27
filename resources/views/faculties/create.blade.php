@extends('templates/main')

@section('title', 'Agregar Facultad')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-6">
                
            <h4 class="card-title"><i class='fa fa-university'></i> Agregar una nueva Facultad</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => 'faculties.store']) !!}
                    <div class="form-group">
                        {!! Form::label('faculty_name', '*Nombre de la Facultad') !!}
                        {!! Form::text('faculty_name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('faculty_description', 'Objetivo General') !!}
                        {!! Form::textarea('faculty_description', null, ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('id_teacher', 'Decano') !!}
                        {!! Form::select('id_teacher', $teachers, null, ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Ninguno']) !!}
                    </div>
                    (*) Campos requeridos
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                {!! Form::submit('Registrar', ['class' => 'btn btn-block btn-outline-info']) !!}    
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

@extends('templates/main')

@section('title', 'Editar Facultad')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="card col-md-6">
                
            <h4 class="card-title"><i class='fa fa-university'></i> Editar la Facultad de {{ $faculty->faculty_name}}</h4><hr>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['route' => ['faculties.update', $faculty->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('faculty_name', '*Nombre de la Facultad') !!}
                        {!! Form::text('faculty_name', $faculty->faculty_name, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('faculty_description', 'Objetivo General') !!}
                        {!! Form::textarea('faculty_description', $faculty->faculty_description, ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('id_teacher', 'Decano') !!}
                        {!! Form::select('id_teacher', $teachers, $faculty->id_teacher, ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Ninguno']) !!}
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

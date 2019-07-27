@extends('templates/main')

@section('title', 'Detalles de Facultad')

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
                        <h3 class="card-title"><i class='fa fa-university'></i> Facultad de {{ $faculty->faculty_name }}</h3>    
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-outline-info float-right" href="{{ route('faculties.index') }}"><i class="fa fa-arrow-circle-left"></i> Volver a la lista</a>
                    </div>
                </div><hr>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active a_roja" id="carreras-tab" data-toggle="tab" href="#carreras" role="tab" aria-controls="carreras" aria-selected="false">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a_roja" id="alumnos-tab" data-toggle="tab" href="#alumnos" role="tab" aria-controls="alumnos" aria-selected="false">Alumnos</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent"> 
                    <div class="tab-pane fade show active" id="carreras" role="tabpanel" aria-labelledby="carreras-tab">
                        <div class="separa_arriba">
                            <div style='display: @if(count($careers)==0) block; @else none @endif'>
                                No se han registrado Carreras! Haga click en el botón "Agregar una carrera" para crear una nueva<br><br>
                            </div>
                            <div style='display: @if(count($careers)>0) block; @else none @endif'>
                                <table class='table table-striped table-hover table-sm'>
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Nivel</th>
                                        <th class='centrar'>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($careers as $career)
                                            <tr>
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
                            </div>
                            <a class="btn btn-outline-info btn-sm float-left" href="{{ route('careers.create') }}"><i class="fa fa-graduation-cap"></i> Agregar una carrera</a>
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
                    <a class="btn btn-outline-info btn-sm float-right" href="{{ route('faculties.edit', $faculty->id) }}"><i class="fa fa-edit"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carne:</strong>
                            {{ $estudiante->carne }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $estudiante->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $estudiante->año }}
                        </div>
                        <div class="form-group">
                            <strong>Sede:</strong>
                            {{ $estudiante->sede }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $estudiante->carrera_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

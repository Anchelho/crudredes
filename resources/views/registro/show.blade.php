@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Registros</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Gerencia:</strong>
                            {{ $registro->gerencia }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $registro->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $registro->appaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $registro->apmaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $registro->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $registro->face }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $registro->insta }}
                        </div>
                        <div class="form-group">
                            <strong>Twiter:</strong>
                            {{ $registro->twi }}
                        </div>
                        <div class="form-group">
                            <strong>Regional:</strong>
                            {{ $registro->regional }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $registro->cel }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electronico:</strong>
                            {{ $registro->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

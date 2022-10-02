@extends('layouts.app')

@section('template_title')
    {{ $bitacora->name ?? 'Show Bitacora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bitacora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bitacoras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $bitacora->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Solicitante:</strong>
                            {{ $bitacora->Solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Responsablesistema:</strong>
                            {{ $bitacora->ResponsableSistema }}
                        </div>
                        <div class="form-group">
                            <strong>Factibilidadtarea:</strong>
                            {{ $bitacora->FactibilidadTarea }}
                        </div>
                        <div class="form-group">
                            <strong>Sistemaafectado:</strong>
                            {{ $bitacora->SistemaAfectado }}
                        </div>
                        <div class="form-group">
                            <strong>Dependenciasistema:</strong>
                            {{ $bitacora->DependenciaSistema }}
                        </div>
                        <div class="form-group">
                            <strong>Nombretarea:</strong>
                            {{ $bitacora->NombreTarea }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $bitacora->Descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

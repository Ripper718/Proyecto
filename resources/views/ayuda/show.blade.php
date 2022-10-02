@extends('layouts.app')

@section('template_title')
    {{ $ayuda->name ?? 'Show Ayuda' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ayuda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ayudas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $ayuda->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresolicitante:</strong>
                            {{ $ayuda->NombreSolicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Tipofalla:</strong>
                            {{ $ayuda->TipoFalla }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionfalla:</strong>
                            {{ $ayuda->DescripcionFalla }}
                        </div>
                        <div class="form-group">
                            <strong>Correocontacto:</strong>
                            {{ $ayuda->CorreoContacto }}
                        </div>
                        <div class="form-group">
                            <strong>Numerocontacto:</strong>
                            {{ $ayuda->NumeroContacto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ayuda</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<a href="../manuales/sistema.docx" download="Manual de Sistema" class="btn btn-warning"> Descargar manual de Usuario </a>
<a class="btn btn-warning" href="../manuales/usuario.docx" download="Manual de Usuario"> Descargar manual de Sistema </a>
</body>
</html>


@extends('layouts.app')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ayuda') }}
                                
                            </span>

                                

                             <div class="float-right">
                                <a href="{{ route('ayudas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('+ Ingresar solicitud') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Folio</th>
										<th>Nombre Solicitante</th>
										<th>Tipo Falla</th>
										<th>Descripcion Falla</th>
										<th>Correo Contacto</th>
										<th>Fono Contacto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ayudas as $ayuda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ayuda->folio }}</td>
											<td>{{ $ayuda->NombreSolicitante }}</td>
											<td>{{ $ayuda->TipoFalla }}</td>
											<td>{{ $ayuda->DescripcionFalla }}</td>
											<td>{{ $ayuda->CorreoContacto }}</td>
											<td>{{ $ayuda->NumeroContacto }}</td>

                                            <td>
                                                <form action="{{ route('ayudas.destroy',$ayuda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ayudas.show',$ayuda->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ayudas->links() !!}
            </div>
        </div>
    </div>
@endsection

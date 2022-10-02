@extends('layouts.app')

@section('template_title')
    Bitacora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bitacora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bitacoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('+ Crear') }}
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
                                        
										<th># Folio</th>
										<th>Solicitante</th>
										<th>Responsable Sistema</th>
										<th>Factibilidad Tarea(SI/NO)</th>
										<th>Sistema Afectado</th>
										<th>Dependencia Sistema</th>
										<th>Nombre Tarea</th>
										<th>Descripcion Breve</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bitacoras as $bitacora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bitacora->folio }}</td>
											<td>{{ $bitacora->Solicitante }}</td>
											<td>{{ $bitacora->ResponsableSistema }}</td>
											<td>{{ $bitacora->FactibilidadTarea }}</td>
											<td>{{ $bitacora->SistemaAfectado }}</td>
											<td>{{ $bitacora->DependenciaSistema }}</td>
											<td>{{ $bitacora->NombreTarea }}</td>
											<td>{{ $bitacora->Descripcion }}</td>

                                            <td>
                                                <form action="{{ route('bitacoras.destroy',$bitacora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bitacoras.show',$bitacora->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    </br>
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
                {!! $bitacoras->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('template_title')
    Politica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Politica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('politicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Folio</th>
										<th>Nombrepolitica</th>
										<th>Descripcionpolitica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($politicas as $politica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $politica->folio }}</td>
											<td>{{ $politica->NombrePolitica }}</td>
											<td>{{ $politica->DescripcionPolitica }}</td>

                                            <td>
                                                <form action="{{ route('politicas.destroy',$politica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('politicas.show',$politica->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('politicas.edit',$politica->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $politicas->links() !!}
            </div>
        </div>
    </div>
@endsection

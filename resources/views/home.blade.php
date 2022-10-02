@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estado de conexión') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                        <div >
                            <a href="{{ route('empleados.index') }}" class="btn btn-primary"> Ir a empleados </a> 
                            <a href="../script/php/Index.php" class="btn btn-dark btn block"> Respaldo y restauración </a> 
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection
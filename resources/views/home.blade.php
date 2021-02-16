@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">Hola, {{ Auth::user()->name }}</div>

                    <div class="card-body">   

                        <a href="{{route('productos.mostrar')}}" class="btn btn-primary">Ir a comprar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

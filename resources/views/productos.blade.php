@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="container">
            <h2>Selecciona todos tus productos</h2>


            {{$productos->links()}}
            <div class="row">

                @foreach ($productos as $producto)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4" style="margin-bottom: 1.5%">
                        <div class="card card-producto" style="width:100%">
                            <img class="card-img-top" src="{{asset('images/productos.jpg')}}" alt="{{$producto->nombre}}" style="width:100%; height:300px">
                            <div class="card-body">
                                <h4 class="card-title">{{$producto->nombre}}</h4>
                                <p class="card-text">
                                    {{$producto->descripcion}}
                                </p>
                                <h4><i class="fas fa-list-ol"></i> Cantidad: {{$producto->cantidad_inventario}}</h4>
                                <a href="https" class="btn btn-primary stretched-link">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            {{$productos->links()}}
    </div>

@endsection

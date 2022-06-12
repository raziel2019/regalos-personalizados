@extends('layouts.nav')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->

<div class="container-fluid mt--7">

  <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h1 class="mb-0">Compras</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('Tienda')}}" class="btn btn-sm btn-primary">Comprar regalos</a>
                        </div>
                    </div>
                </div>
              
                <div class="col-12">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @elseif(\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Frase</th>
                                <th scope="col">productos</th>
                                <th scope="col">Estatus Compra</th>
                                <th scope="col">smza</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($ventas as $orden=>$compra)
                            <tbody>
                                <tr>
                                    <td>{{++$orden}}</td>
                                    <td>{{$compra->frase_producto}}</td>
                                    <td>{{$compra->productos->nombreProducto}}</td>
                                    <td>{{$compra->estatusventas->estatus}}</td>
                                    <td>{{$compra->direccion_ventas->smza->smza}}</td>
                                    <td>{{$compra->created_at}}</td>
                                    
                                    <td>       
                                    <a class="btn btn-primary" href="{{ route('Tienda.detail', $compra->id ) }}">Ver</a>            
                                    </td>
                                </tr>
                            </tbody>

                        @endforeach
                    </table>
                </div>
             
            </div>
        </div>
      
    </div>
</div>

@endsection
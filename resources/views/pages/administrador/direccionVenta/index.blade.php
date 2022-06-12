@extends('layouts.app')

    @section('content')

        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Dirección Venta</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('direccionVentas.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">mza</th>
                            <th scope="col">lote</th>
                            <th scope="col">calle</th>
                            <th scope="col">colonia</th>
                            <th scope="col">noExterior</th>
                            <th scope="col">noInterior</th>
                            <th scope="col">cpp</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($direccionVentas as $orden=>$direccionVenta)
                            <tr>
                                <td>{{++$orden}}</td>
                                <td>{{$direccionVenta->mza}}</td>
                                <td>{{$direccionVenta->lote}}</td>
                                <td>{{$direccionVenta->colonia}}</td>
                                <td>{{$direccionVenta->noExterior}}</td>
                                <td>{{$direccionVenta->noInterior}}</td>
                                <td>{{$direccionVenta->smza->smza}}</td>
                                <td>{{$direccionVenta->cpp}}</td>
                                    <td>
                                        
                                        <form action="{{route("direccionVentas.destroy", $direccionVenta->id)}}" method="POST"> 
                                            @method("DELETE")
                                            @csrf
                                            <a class="btn btn-secondary" href="{{ route('direccionVentas.edit', $direccionVenta->id ) }}">
                                            <i class="fas fa-edit text-success"></i>
                                            Modificar
                                            </a>
                                            <button class="btn btn-secondary" type="submit">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                            Eliminar
                                            </button>
                                        </form>              
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('layouts.footers.auth')
                    </div>
                </div>
            </div>
        </div>
        
    @endsection

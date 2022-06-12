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
                            <h1 class="mb-0">Ventas</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('ventas.create') }}" class="btn btn-sm btn-primary">Agregar Ventas</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                                        </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Frase</th>
                                <th scope="col">Usuarios ID</th>
                                <th scope="col">productos ID</th>
                                <th scope="col">Estatus Venta ID</th>
                                <th scope="col">smza</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($venta as $orden=>$data)
                    <tbody>
                        <tr>
                            <td>{{++$orden}}</td>
                            <td>{{$data->frase_producto}}</td>
                            <td>{{$data->users->nombre}}</td>
                            <td>{{$data->productos->nombreProducto}}</td>
                            <td>{{$data->estatusventas->estatus}}</td>
                            <td>{{$data->direccion_ventas->smza->smza}}</td>
                            <td>{{$data->created_at}}</td>
                           
                            <td>                   
                                <form action="{{route("ventas.destroy", $data->id)}}" method="POST"> 
                                    @method("DELETE")
                                    @csrf
                                    <a class="btn btn-primary" href="{{ route('ventas.edit', $data->id ) }}">Editar</a>
                                    <button class="btn btn-secondary" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                          </nav>
                    </div>
            </div>
        </div>
        
    </div>
    
    @include('layouts.footers.auth')
</div>

@endsection




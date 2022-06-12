@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

@role('Administrador')

    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Productos</h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">CantidadVendidos</th>
                                    <th scope="col">Foto</th>
                               
                                </tr>
                            </thead>
                            @foreach ($productos as $orden=>$producto)
                        <tbody>
                            <tr>
                                <td>{{ ++$orden }}</td>
                                <td>{{ $producto->nombreProducto }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{$producto->cantidad}}</td>
                                <td>
    
                                    <a class="avatar avatar-xl rounded-circle" data-toggle="tooltip" data-original-title="">
                                        <img alt="Image" src="{{ asset('imagen-producto/'. $producto->foto ) }}">
                                    </a>
                                
                            </td>
                                
                            </tr>
                        </tbody>
    
                        @endforeach
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $productos->links('pagination::bootstrap-4') }}
                            </nav>
                        </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Todos los Usuarios</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Roles</th>
                                </tr>
                            </thead>
                            @foreach ($usuario as $orden=>$users)
                            <td>{{++$orden}}</td>
                            <td>{{$users->nombre}}</td>
                            <td>
            
                                <a class="avatar avatar-xl rounded-circle" data-toggle="tooltip" data-original-title="">
                                    <img alt="Image" src="{{ asset('foto/'. $users->foto ) }}">
                                </a>
                            
                        </td>
                        @foreach ($users->roles as $role)
                            <td>{{$role->name}}</td>    
                        @endforeach
                          
                                    </tr>
                                </tbody>
            
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>





        @include('layouts.footers.auth')
    </div>

@endrole

@role('Usuario')

<div class="container-fluid mt--7">
    <div class="row">

        <div class="col-xl">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Grafica</h6>
                            <h2 class="mb-0">Total de Compras</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <canvas id="chart-orders" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>

@endrole

@role('Empleado')

<div class="container-fluid mt--7">
    <div class="row">

        <div class="col-xl">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Grafica</h6>
                            <h2 class="mb-0">Total de ventas</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <canvas id="chart-orders" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>

@endrole

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
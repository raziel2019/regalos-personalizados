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
                        <h3 class="mb-0">Costo Envio</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('smza.create') }}" class="btn btn-sm btn-primary">Agregar</a>
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
                            <th scope="col">SMZA</th>
                            <th scope="col">Zona</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($smzas as $orden=>$smza)
                            <tr>
                                <td>{{++$orden}}</td>
                                <td>{{$smza->smza}}</td>
                                <td>{{$smza->costo_zonas->costo}}</td>
                                <td>{{$smza->municipios->nombre}}</td>
                                    <td>
                                        
                                        <form action="{{route("smza.destroy", $smza->id)}}" method="POST"> 
                                            @method("DELETE")
                                            @csrf
                                            <a class="btn btn-secondary" href="{{ route('smza.edit', $smza->id ) }}">
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

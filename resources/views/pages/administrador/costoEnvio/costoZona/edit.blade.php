@extends('layouts.app')

    @section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->

    <div class="container-fluid mt--7" style="">
            <div class="card bg-white shadow" style="padding-bottom: 20px">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Editar SuperManzana</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('costoZona') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('costoZona.update',$costoZona->id ) }}" autocomplete="off">
                @csrf
                @method('put')
                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Municipio</label>
                            <select name="municipio_id" id="" class="form-control">
                                @foreach ($municipios as $municipio)
                                    @if ($municipio->municipio_id == $costoZona->municipio_id)
                                    <option value="{{$municipio->municipio_id}}" selected>{{$municipio->nombre}}</option>
                                    @else
                                    <option value="{{$municipio->municipio_id}}">{{$municipio->nombre}}</option>
                                    @endif
                                
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="">Zona</label>
                            <input type="text" id="zona" name="zona" class="form-control" value="{{$costoZona->zona}}" required>
                        </div>
                        <div class="col-4">
                            <label for="">Costo envio</label>
                            <input type="number" id="costo" name="costo" class="form-control" value="{{$costoZona->costo}}" required>
                        </div>
                        
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-6 center">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Guardar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        @include('layouts.footers.auth')

    @endsection

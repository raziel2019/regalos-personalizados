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
                            <a href="{{ route('smza') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('smza.update',$smza->id ) }}" autocomplete="off">
                @csrf
                @method('put')
                    <div class="row form-group">
                        <div class="col-6">
                            <label for="">Municipio</label>
                            <select name="municipio_id" id="" class="form-control">
                                @foreach ($costoZonas as $costoZona)
                                    @if ($costoZona->id == $smza->costo_zona_id)
                                    <option value="{{$costoZona->id}}" selected>{{$costoZona->zona}}</option>
                                    @else
                                    <option value="{{$costoZona->id}}">{{$costoZona->zona}}</option>
                                    @endif
                                
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="">Super manzana</label>
                            <input type="text" id="smza" name="smza" class="form-control" value="{{$smza->smza}}" required>
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

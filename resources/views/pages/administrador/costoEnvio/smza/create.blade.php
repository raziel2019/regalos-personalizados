@extends('layouts.app')

    @section('content')
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->

        <div class="container-fluid mt--7" style="">
            <div class="card bg-white shadow" style="padding-bottom: 20px">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Agregar SuperManzana</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('smza') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('smza.store' ) }}" autocomplete="off">
                    @csrf
                        <div class="row form-group">

                            <div class="col-6">
                                <label for="">Zona</label>
                                <select name="costo_zona_id" id="costo_zona_id" class="form-control" required>
                                    @foreach ($costoZonas as $costoZona)
                                            <option value="{{$costoZona->id}}">{{$costoZona->zona}} $ {{$costoZona->costo}}</option>
                         
                                    @endforeach
                                </select>
                                @error('costo_zona_id')
                                    <div class="alert alert-danger">{{ $errors->first('costo_zona_id') }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Super manzana</label>
                                <input type="text" id="smza" name="smza" class="form-control" required>
                                @error('smza')
                                    <div class="alert alert-danger">{{ $errors->first('smza') }}</div>
                                @enderror
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

@extends('layouts.app')

    @section('content')
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->

        <div class="container-fluid mt--7" style="">
            <div class="card bg-white shadow" style="padding-bottom: 20px">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Agregar Zona</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('costoZona') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('costoZona.store' ) }}" autocomplete="off">
                    @csrf
                        <div class="row form-group">
                            <div class="col-4">
                                <label for="">Municipio</label>
                                <select name="municipio_id" id="" class="form-control">
                                    @foreach ($municipios as $municipio)
                                        @if ($municipio->id == 5)
                                            <option value="{{$municipio->id}}" selected>{{$municipio->nombre}}</option>
                                            @else
                                            <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
                                        @endif                            
                                    @endforeach
                                </select>
                                @error('municipio_id')
                                    <div class="alert alert-danger">{{ $errors->first('municipio_id') }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="">Zona</label>
                                <input type="text" id="zona" name="zona" class="form-control">
                                @error('zona')
                                    <div class="alert alert-danger">{{ $errors->first('zona') }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="">Costo</label>
                                <input type="number" id="costo" name="costo" class="form-control">
                                @error('costo')
                                    <div class="alert alert-danger">{{ $errors->first('costo') }}</div>
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

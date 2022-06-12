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
                            <a href="{{ route('direccionVentas') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('direccionVentas.update',$direccionVenta->id ) }}" autocomplete="off">
                @csrf
                @method('put')

                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">Mza</label>
                                <input type="text" id="mza" name="mza" class="form-control" value="{{$direccionVenta->mza}}" required>
                            </div>
                            <div class="col-6">
                                <label for="">lote</label>
                                <input type="text" id="lote" name="lote" class="form-control" value="{{$direccionVenta->lote}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">calle</label>
                                <input type="text" id="calle" name="calle" class="form-control" value="{{$direccionVenta->calle}}" required>
                            </div>
                            <div class="col-6">
                                <label for="">colonia</label>
                                <input type="text" id="colonia" name="colonia" class="form-control" value="{{$direccionVenta->colonia}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">noExterior</label>
                                <input type="text" id="noExterior" name="noExterior" class="form-control" value="{{$direccionVenta->noExterior}}" required>
                            </div>
                            <div class="col-6">
                                <label for="">noInterior</label>
                                <input type="text" id="noInterior" name="noInterior" class="form-control" value="{{$direccionVenta->noInterior}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                                <label for="">Smza</label>
                                <select name="smza_id" id="smza_id" class="form-control">
                                    @foreach ($smzas as $smza)
                                        @if ($smza->id == $smza->smza_id)
                                        <option value="{{$smza->id}}" selected>{{$smza->smza}}</option>
                                        @else
                                        <option value="{{$smza->id}}">{{$smza->smza}}</option>
                                        @endif
                                    
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">cpp</label>
                                <input type="text" id="cpp" name="cpp" class="form-control" value="{{$direccionVenta->cpp}}" required>
                            </div>
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
        @include('layouts.footers.auth')

    @endsection

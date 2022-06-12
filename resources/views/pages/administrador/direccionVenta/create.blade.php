@extends('layouts.app')

    @section('content')
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->

        <div class="container-fluid mt--7" style="">
            <div class="card bg-white shadow" style="padding-bottom: 20px">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Agregar Dirección Venta</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('direccionVentas') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('direccionVentas.store' ) }}" autocomplete="off">
                    @csrf
                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">Mza</label>
                                <input type="text" id="mza" name="mza" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label for="">lote</label>
                                <input type="text" id="lote" name="lote" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">calle</label>
                                <input type="text" id="calle" name="calle" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label for="">colonia</label>
                                <input type="text" id="colonia" name="colonia" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                            <label for="">noExterior</label>
                                <input type="text" id="noExterior" name="noExterior" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label for="">noInterior</label>
                                <input type="text" id="noInterior" name="noInterior" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                                <label for="">Smza</label>
                                <select name="smza_id" id="" class="form-control">
                                    @foreach ($smzas as $smza)
                                        <option value="{{$smza->id}}">{{$smza->smza}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">cpp</label>
                                <input type="text" id="cpp" name="cpp" class="form-control" required>
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

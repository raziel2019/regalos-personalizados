@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>

<div class="container-fluid mt--7">
    <div class="row justify-content-center">
       <div class="col">
           <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h1 class="mb-0">Editar venta</h1>
                    </div>
                </div>
            </div>

               <div class="card-body">
            
                    <form action="{{ route('ventas.update',$venta->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Información de venta') }}</h6>

                        <div class="form-group{{ $errors->has('ventas') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-ventas">{{ __('ventas Productos') }}</label>
                            <input type="text" min="0" name="frase_producto" id="input-ventas" class="form-control form-control-alternative{{ $errors->has('ventas') ? ' is-invalid' : '' }}" placeholder="{{ __('ventas') }}" value="{{$venta->frase_producto}}" required>
                        </div>

                        <div class="form-group{{ $errors->has('estatus') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('estatus') }}</label>
                            <select name="estatusventa_id" class="custom-select form-control-alternative col-lg-5{{ $errors->has('estatus') ? ' is-invalid' : '' }}" id="inputGroupSelect01" required>
                                <option value="1">Pendiente</option> 
                                <option value="2">Proceso</option> 
                                <option value="3">Vendido</option>    
                            </select>                        
                            @if ($errors->has('estatus'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('estatus') }}</strong>
                                </span>
                            @endif
                        </div>
                      
                        <div class="col-md-6 center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" >Editar</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>

@include('layouts.footers.auth')

@endsection
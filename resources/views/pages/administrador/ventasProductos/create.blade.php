@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <h1 class="mb-0">{{ __('Agregar Venta') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('ventas.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('post')

                <h6 class="heading-small text-muted mb-4">{{ __('Ingrese datos de la venta') }}</h6>
                
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                
                <div class="form-group{{ $errors->has('ventas') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-ventas">{{ __('ventas Productos') }}</label>
                    <input type="text" min="0" name="ventas" id="input-ventas" class="form-control form-control-alternative{{ $errors->has('ventas') ? ' is-invalid' : '' }}" placeholder="{{ __('ventas') }}" value="" required>

                    @if ($errors->has('ventas'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ventas') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('usuario') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-email">{{ __('Usuario') }}</label>
                    <select name="usuario" class="custom-select form-control-alternative col-lg-5{{ $errors->has('usuario') ? ' is-invalid' : '' }}" id="inputGroupSelect01" required>
                        @foreach($usuario as $user)
                            <option value="{{$user->id}}">{{$user->nombre}}</option>
                        @endforeach    
                    </select>                        
                    @if ($errors->has('usuario'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('usuario') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('producto') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-email">{{ __('Producto') }}</label>
                    <select name="producto" class="custom-select form-control-alternative col-lg-5{{ $errors->has('producto') ? ' is-invalid' : '' }}" id="inputGroupSelect01" required>
                        @foreach($productos as $product)
                            <option value="{{$product->id}}">{{$product->nombreProducto}}</option>
                        @endforeach    
                    </select>                        
                    @if ($errors->has('producto'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('producto') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('DireccionVenta') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-email">{{ __('DireccionVentas') }}</label>
                    <select name="direccion_ventas_id" class="custom-select form-control-alternative col-lg-5{{ $errors->has('estatus') ? ' is-invalid' : '' }}" id="inputGroupSelect01" required>
                        @foreach($direccionVentas as $DireccionVenta)
                            <option value="{{$DireccionVenta->id}}">{{$DireccionVenta->id}}</option>
                        @endforeach    
                    </select>                        
                    @if ($errors->has('DireccionVentas'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('DireccionVentas') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('estatus') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-email">{{ __('estatus') }}</label>
                    <select name="estatus" class="custom-select form-control-alternative col-lg-5{{ $errors->has('estatus') ? ' is-invalid' : '' }}" id="inputGroupSelect01" required>
                        @foreach($estatus as $estatu)
                            <option value="{{$estatu->id}}">{{$estatu->estatus}}</option>
                        @endforeach    
                    </select>                        
                    @if ($errors->has('estatus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('estatus') }}</strong>
                        </span>
                    @endif
                </div>
                    <div class="col-md-6 center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Guardar') }}</button>
                    </div>
                </div>
            </form>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

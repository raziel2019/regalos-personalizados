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
                        <h1 class="mb-0">Editar Material</h1>
                    </div>
                </div>
            </div>

               <div class="card-body">
            
                    <form action="{{ route('productos.update',$productos->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del materiales') }}</h6>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                            <input type="text" name="nombre" id="input-status" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{$productos->nombreProducto}}">
                        </div>
    
                        <div class="form-group{{ $errors->has('  	descripcion   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('  	Descripcion  ') }}</label>
                            <textarea type="text" name="descripcion" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	descripcion ') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripcion ') }}">{{$productos->descripcionProducto}}</textarea>
    
                            @if ($errors->has(' 	descripcion  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first(' 	descripcion  ') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('cantidad') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('Cantidad') }}</label>
                            <input type="text" name="cantidad" id="input-status" class="form-control form-control-alternative{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" placeholder="{{ __('Cantidad') }}" value="{{$productos->cantidad}}">
                        </div>
    
                        <div class="form-group">
                            <label class="form-control-label" for="input-foto">Precio</label>
                            <input type="number" name="precio" id="input-foto" class="form-control form-control-alternative" placeholder="{{ __('Precio') }}" value="{{$productos->precio}}" required>
                        </div>
                        <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-foto">{{ __('Foto') }}</label>
                            <input type="file" name="foto" id="input-foto" class="form-control form-control-alternative{{ $errors->has('foto') ? ' is-invalid' : '' }}" placeholder="{{ __('Foto') }}" >
    
                            @if ($errors->has('foto'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has(' material   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __(' Material  ') }}</label>
                            
                            
                                @foreach ($materiales as $orden=>$material)
                                <br><label class="form-control-label" for="input-status"><input type="checkbox" name="material[]" id="input-status" value="{{ $material->id }}">&nbsp;{{ $material->nombreMaterial }}</label>
                                @endforeach

                            @if ($errors->has('material  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('material  ') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="background:#5e72e4 !important;" >Editar</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>

@include('layouts.footers.auth')

@endsection
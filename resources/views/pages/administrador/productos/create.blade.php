@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <h1 class="mb-0">{{ __('Agregar Producto') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('productos.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('post')

                <h6 class="heading-small text-muted mb-4">{{ __('Ingrese datos del producto') }}</h6>
                
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                    <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                        <input type="text" name="nombre" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="" required>

                        @if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has(' descripcion   ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-status">{{ __(' Descripcion  ') }}</label>
                        <textarea type="text" name="descripcion" id="input-status" class="form-control form-control-alternative{{ $errors->has('descripcion ') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripcion ') }}" value="" required></textarea>

                        @if ($errors->has('descripcion  '))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion  ') }}</strong>
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

                    <div class="form-group{{ $errors->has('  	cantidad   ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-status">{{ __('  	Cantidad  ') }}</label>
                        <input type="number" name="cantidad" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	cantidad ') ? ' is-invalid' : '' }}" placeholder="{{ __('Cantidad ') }}" value="" required>

                        @if ($errors->has(' 	cantidad  '))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first(' 	cantidad  ') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('  	precio   ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-status">{{ __('  	Precio  ') }}</label>
                        <input type="number" name="precio" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	precio ') ? ' is-invalid' : '' }}" placeholder="{{ __('Precio ') }}" value="" required>

                        @if ($errors->has(' 	precio  '))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first(' 	precio  ') }}</strong>
                            </span>
                        @endif
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
                    <div class="col-md-6 center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Guardar') }}</button>
                    </div>
                </div>
            </form>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

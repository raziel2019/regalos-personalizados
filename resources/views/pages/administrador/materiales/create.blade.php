@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <h1 class="mb-0">{{ __('Agregar Material') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('materiales.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('post')

                <h6 class="heading-small text-muted mb-4">{{ __('Ingrese datos del material') }}</h6>
                
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

                    <div class="form-group{{ $errors->has('  	cantidad   ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-status">{{ __('  	Cantidad  ') }}</label>
                        <input type="number" name="cantidad" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	cantidad ') ? ' is-invalid' : '' }}" placeholder="{{ __('Cantidad ') }}" value="" required>

                        @if ($errors->has(' 	cantidad  '))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first(' 	cantidad  ') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="input-foto">Imagen</label>
                        <input type="file" name="imagen" id="input-foto" class="form-control form-control-alternative" placeholder="{{ __('Imagen') }}" required>
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

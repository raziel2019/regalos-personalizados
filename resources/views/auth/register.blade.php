@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card bg-secondary shadow border-0" style="background:white !important;">
                    
                        
                        <div class="text-center">
                            <div class="card-profile-image mb-5">
                                <img  class="rounded-circle " src="{{ asset('cuadros/logo.png') }}">
                            </div>
                        </div>
                        
                
                    <div class="card-body px-lg-5 py-lg-5 mt-3">
                        <div class="text-center text-muted mb-4 mt-5">
                            <small style="font-family: 'Rancho', cursive; font-size:17px"><strong>¡Forma parte de nuestra comunidad!</strong></small>
                            <br>
                            <small style="font-family: 'Rancho', cursive; font-size:13px">{{ __('Tu información personal será usada para procesar tu orden') }}</small>
                        </div>
                        <form role="form" method="POST" action="{{ route('registro.store' ) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Nombre</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" type="text" name="nombre" value="{{ old('nombre') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Correo electrónico</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Contraseña</small>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <small style="font-size: 12px">Confirmar contraseña</small>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirmar contraseña') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-foto">Foto de Perfil</label>
                                <input type="file" name="foto" id="input-foto" class="form-control form-control-alternative" placeholder="{{ __('Foto') }}" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-4" style="font-family: 'Rancho', cursive; font-size:16px">{{ __('Crear cuenta') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

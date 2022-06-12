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
                        <h1 class="mb-0">Editar Usuarios</h1>
                    </div>
                </div>
            </div>

               <div class="card-body">
            
                    <form action="{{ route('usuarios.update',$usuarios->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del usuarios') }}</h6>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                            <input type="text" name="nombre" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{$usuarios->nombre}}">
    
                            @if ($errors->has('apellidoPaterno'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('apellidoPaterno') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        
                        <div class="form-group{{ $errors->has(' nickname   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __(' Nickname  ') }}</label>
                            <input type="text" name="nickname" id="input-status" class="form-control form-control-alternative{{ $errors->has('nickname ') ? ' is-invalid' : '' }}" placeholder="{{ __('nickname ') }}" value="{{$usuarios->nickname}}">
    
                            @if ($errors->has('nickname  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nickname  ') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        <div class="form-group{{ $errors->has('  	email   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('  	Email  ') }}</label>
                            <input type="email" name="email" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	email ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	email ') }}" value="{{$usuarios->email}}">
    
                            @if ($errors->has(' 	email  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first(' 	email  ') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        <div class="form-group{{ $errors->has('  	password   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('  	Password  ') }}</label>
                            <input type="password" name="password" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	password ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	password ') }}" value="{{$usuarios->password}}">
    
                            @if ($errors->has(' 	password  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first(' 	password  ') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        <div class="form-group">
                            <label class="form-control-label" for="input-foto">Foto de Perfil</label>
                            <input type="file" name="foto" id="input-foto" class="form-control form-control-alternative" placeholder="{{ __('Foto') }}" required>
                        </div>

                        <div class="form-group{{ $errors->has('  	role   ') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-status">{{ __('  	Roles ') }}</label>
                            <select name="rol" id="" class="form-control"  required>
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has(' 	Role  '))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first(' 	role  ') }}</strong>
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
</div>

@include('layouts.footers.auth')

@endsection
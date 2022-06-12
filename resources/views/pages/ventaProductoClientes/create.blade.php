@extends('layouts.nav')

    @section('content')
<div class="container">
        <div class="py-5 text-center">
            <img style="   width: 100px;" src="{{ asset('cuadros/logo.png') }}" class="mx-auto d-block" >
            <h2>Realizar compra de regalo</h2>
            <p class="lead">Visite nuestro catálogo de artículos. Lo invitamos a que se registre y reciba noticias de nuestros productos en nuestra redes sociales.</p>
        </div>
        <form class="" method="post" action="{{ route('Tienda.store' ) }}" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">
                    @if (\Session::has('request'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('request') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Tu compra</h2>
                    </h4>
                    <img src="{{ asset('imagen-producto/'. $producto->foto ) }}" class="card-img-top" alt="...">
                    <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                        <small class="text-muted">{{$producto->descripcionProducto}}</small>
                        </div>
                        <span class="text-muted">${{$producto->precio}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                        <h5 class="my-0">Costo Regalo</h5>
                        </div>
                        <input id="costoRegalo" type="text" class="form-control" value="${{$producto->precio}}" readonly>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                        <h5 class="my-0">Costo Envio</h5>
                        </div>
                        <input id="costoEnvio" type="text" class="form-control" readonly>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                        <h4 class="my-0">Total</h4>
                        </div>
                        <input id="total" type="text" class="form-control" readonly>
                    </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Ingrese la dirección de entrega del regalo</h4>
                    
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Frase</label>
                            <input type="text"  name="frase_producto" class="form-control @error('frase_producto') is-invalid @enderror" maxlength="20" required>
                                    <input type="hidden"  name="productos_id" class="form-control" value="{{$producto->id}}" required>
                                    @error('frase_producto')
                                        <div class="alert alert-danger">{{ $errors->first('frase_producto') }}</div>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Mza</label>
                            <input type="text" id="mza" name="mza" class="form-control @error('mza') is-invalid @enderror" required>
                            @error('mza')
                                <div class="alert alert-danger">{{ $errors->first('mza') }}</div>
                            @enderror
                        </div>

                    </div>
        
                    <div class="mb-3">
                        <label for="">lote</label>
                        <input type="text" id="lote" name="lote" class="form-control @error('lote') is-invalid @enderror" required>
                        @error('lote')
                            <div class="alert alert-danger">{{ $errors->first('lote') }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">calle</label>
                        <input type="text" id="calle" name="calle" class="form-control @error('calle') is-invalid @enderror" required>
                            @error('calle')
                                <div class="alert alert-danger">{{ $errors->first('calle') }}</div>
                            @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">colonia</label>
                        <input type="text" id="colonia" name="colonia" class="form-control @error('colonia') is-invalid @enderror" required>
                        @error('colonia')
                            <div class="alert alert-danger">{{ $errors->first('colonia') }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">noExterior</label>
                        <input type="text" id="noExterior" name="noExterior" class="form-control @error('noExterior') is-invalid @enderror" required>
                            @error('noExterior')
                                <div class="alert alert-danger">{{ $errors->first('noExterior') }}</div>
                            @enderror
                    </div>
        
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="">noInterior</label>
                                <input type="text" id="noInterior" name="noInterior" class="form-control @error('noInterior') is-invalid @enderror" required>
                                    @error('noInterior')
                                        <div class="alert alert-danger">{{ $errors->first('noInterior') }}</div>
                                    @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="">Smza</label>
                                <select id="smza_id" name="smza_id" id="" class="form-control @error('smza_id') is-invalid @enderror" required>
                                    @foreach ($smzas as $smza)
                                        <option value="{{$smza->id}}">{{$smza->smza}}</option>
                                    @endforeach
                                </select>
                                    @error('smza_id')
                                        <div class="alert alert-danger">{{ $errors->first('smza_id') }}</div>
                                    @enderror
                        </div>
                    
                        <div class="col-md-3 mb-3">
                            <label for="">cpp</label>
                                    <input type="text" id="cpp" name="cpp" class="form-control @error('cpp') is-invalid @enderror" required>
                                    @error('cpp')
                                        <div class="alert alert-danger">{{ $errors->first('cpp') }}</div>
                                    @enderror
                        </div>

                    </div>
        
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                    </form>
                </div>
        </div>
</div>
<br>
<br>
@endsection

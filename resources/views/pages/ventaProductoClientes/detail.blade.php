@extends('layouts.nav')

    @section('content')

    <div class="container">
        <div class="py-5 text-center">
            <img style="   width: 100px;" src="{{ asset('cuadros/logo.png') }}" class="mx-auto d-block" >
            <h2>Detalle de la compra</h2>
            <p class="lead">Visite nuestro catálogo de artículos. Lo invitamos a que se registre y reciba noticias de nuestros productos en nuestra redes sociales.</p>
        </div>
        
            <div class="row">
            
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Detalle</h2>
                    </h4>
                    <img src="{{ asset('imagen-producto/'. $venta->productos->foto ) }}" class="card-img-top" alt="...">
                    <ul class="list-group mb-3">

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                            <h5 class="my-0">Costo Regalo</h5>
                            </div>
                            <input id="costoRegalo" type="text" class="form-control" value="${{$venta->productos->precio}}" readonly>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                            <h5 class="my-0">Costo Envio</h5>
                            </div>
                            <input id="costoEnvio" type="text" class="form-control" value="${{$venta->direccion_ventas->smza->costo_zonas->costo}}" readonly>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                            <h4 class="my-0">Total</h4>
                            </div>
                            <input id="total" type="text" class="form-control" value="${{($venta->direccion_ventas->smza->costo_zonas->costo) + $venta->productos->precio}}" readonly>
                        </li>

                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Información</h4>
                    
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Frase</label>
                            <input type="text"  name="frase_producto" class="form-control" maxlength="20" value="{{$venta->frase_producto}}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Mza</label>
                            <input type="text" id="mza" name="mza" class="form-control" value="{{$venta->direccion_ventas->mza}}" readonly>
                        </div>

                    </div>
        
                    <div class="mb-3">
                        <label for="">lote</label>
                            <input type="text" id="lote" name="lote" class="form-control" value="{{$venta->direccion_ventas->lote}}" readonly>
                    </div>
        
                    <div class="mb-3">
                        <label for="">calle</label>
                        <input type="text" id="calle" name="calle" class="form-control" value="{{$venta->direccion_ventas->calle}}" readonly>
                    </div>
        
                    <div class="mb-3">
                        <label for="">colonia</label>
                            <input type="text" id="colonia" name="colonia" class="form-control" value="{{$venta->direccion_ventas->colonia}}" readonly>
                    </div>
        
                    <div class="mb-3">
                        <label for="">noExterior</label>
                            <input type="text" id="noExterior" name="noExterior" class="form-control" value="{{$venta->direccion_ventas->noExterior}}" readonly>
                    </div>
        
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <<label for="">noInterior</label>
                            <input type="text" id="noInterior" name="noInterior" class="form-control" value="{{$venta->direccion_ventas->noInterior}}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="">Smza</label>
                            <input type="text" id="smza" name="smza" class="form-control" value="{{$venta->direccion_ventas->smza->smza}}" readonly>
                        </div>
                    
                        <div class="col-md-3 mb-3">
                            <label for="">cpp</label>
                            <input type="text" id="cpp" name="cpp" class="form-control" value="{{$venta->direccion_ventas->cpp}}" readonly>
                        </div>

                    </div>
        
                    <hr class="mb-4">
                    
                
                </div>
        </div>
</div>
<br>
<br>

@endsection

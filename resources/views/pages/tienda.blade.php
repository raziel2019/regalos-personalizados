@extends('layouts.nav')

@section('content')


<div class="container">
    <div class="row mt-5">
  @foreach ($productos as $orden=>$producto)
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <a href="{{ route('Tienda.create', $producto->id ) }}">
          <img src="{{ asset('imagen-producto/'. $producto->foto ) }}" class="card-img-top" alt="...">
          <h4 class="text-center" style="color: #F89CA4; font-family: 'Rancho', cursive;">{{$producto->descripcionProducto}}</h4>
          <h5 class="text-center" style="font-family: 'Rancho', cursive;">${{$producto->precio}}</h5>
        </a>
      </div>
  @endforeach
    </div>
    <div >
      <nav class="d-flex pagination justify-content-center" aria-label="...">
          {{ $productos->links('pagination::bootstrap-4') }}
          </nav>
  </div>
 
</div>




@endsection
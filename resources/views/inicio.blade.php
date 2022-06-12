@extends('layouts.nav')

@section('content')



<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{ asset('slides/slide1.png') }}"
          alt="First slide">
          
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('slides/slide2.png') }}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
     
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('slides/slide3.png') }}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>

    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="container">
<!--Cards-->
  <div class="card-deck mt-5">
        <div class="card">
          <img src="{{ asset('cuadros/card.svg') }}" class="card-img-top" alt="...">
        </div>

        <div class="card">
          <img src="{{ asset('cuadros/card1.svg') }}" class="card-img-top" alt="...">
        </div>
        
        <div class="card">
          <img src="{{ asset('cuadros/card2.svg') }}" class="card-img-top"  alt="...">
        </div>
  </div>

  <!-- ENCABEZADO -->

    <blockquote class="blockquote text-center mt-5">
      <h2 style="font-family: 'Rancho', cursive; font-size: 40px;">NUEVOS DISEÑOS</h2>
    </blockquote>

  <!-- BOTONES CATEGORIAS  -->

  <div class="text-center">
    <button type="button" class="btn btn-light btn-md mr-3">Categoria</button>
    <button type="button" class="btn btn-light btn-md mr-3">Categoria</button>
    <button type="button" class="btn btn-light btn-md mr-3">Categoria</button>
    <button type="button" class="btn btn-light btn-md ml-1">Categoria</button>
  </div>


<!-- PRODUCTOS -->

<div class="row mt-5">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('cuadros/regalo.png') }}" class="card-img-top card-animate" alt="...">
          <h4 class="text-center" style="color: #F89CA4; font-family: 'Rancho', cursive;">Descripcion</h4>
            <h5 class="text-center" style="font-family: 'Rancho', cursive;">$100</h5>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('cuadros/regalo.png') }}" class="card-img-top" alt="...">
          <h4 class="text-center" style="color: #F89CA4; font-family: 'Rancho', cursive;">Descripcion</h4>
            <h5 class="text-center" style="font-family: 'Rancho', cursive;">$100</h5>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('cuadros/regalo.png') }}" class="card-img-top" alt="...">
          <h4 class="text-center" style="color: #F89CA4; font-family: 'Rancho', cursive;">Descripcion</h4>
            <h5 class="text-center" style="font-family: 'Rancho', cursive;">$100</h5>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('cuadros/regalo.png') }}" class="card-img-top" alt="...">
          <h4 class="text-center" style="color: #F89CA4; font-family: 'Rancho', cursive;">Descripcion</h4>
            <h5 class="text-center" style="font-family: 'Rancho', cursive;">$100</h5>
      </div>
  </div>


</div>

<img src="{{ asset('cuadros/grupo5.png') }}" class="d-block w-100 mt-5" alt="Responsive image">

<div class="container mt-5">
  <h1 class="text-center" style="font-family: 'Rancho', cursive;">NUESTROS CLIENTES</h1>
    <div class="row mt-2">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <p style="font-family: 'Rancho', cursive; font-size:25px;">Hola como estas me siento muy bien de ser tu amigo raciel, martin te amo tanto santos y wicho son lo mejor que me ha pasado</p>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <p style="font-family: 'Rancho', cursive; font-size:25px;">Hola como estas me siento muy bien de ser tu amigo raciel, martin te amo tanto santos y wicho son lo mejor que me ha pasado</p>
      </div>
    </div>
</div>

<div class="container-fluid mt-4 p-4" style="background:#F2577A">
  <h1 class="text-center" style="font-family: 'Rancho', cursive; font-size:70px;">Siguenos en instagram</h1>
  <h1 class="text-center" style="color:white; font-family:'Rancho', cursive; font-size:30px;">Regalos personalizados cancun</h1>
</div>

<br>


@endsection
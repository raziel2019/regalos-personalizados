<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  -->
    
    
    <!-- ESTILOS PERSONALES PARA EL EQUIPO -->
    <link href="{{asset('assets/css/estilos.css') }}" rel="stylesheet">
    
    <!-- TIPOGRAFIAS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Rosario:wght@300&display=swap" rel="stylesheet">
    
    <!-- ICONOS -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


     <!-- Favicon -->
     <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
     <!-- Extra details for Live View on GitHub Pages -->

     <!-- Icons -->
     <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
     <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
     <!-- Argon CSS -->
     <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

    <title>Regalos</title>
  </head>
  <body>
    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
@endauth
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light border-bottom" style="background:white !important;">
            <form class="form-inline">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><i class="icon ion-md-search"></i></button>
                <a href="{{route('Compras')}}" class="btn btn-outline-danger my-2 my-sm-0">
                <i class="icon ion-md-cart"></i>
                </a>
                
            </form>
            <a class="navbar-brand mr-auto ml-auto" href="#" style="font-family: 'Rancho', cursive !important; color: #F2575D; font-size:35px !important;">
                <img style="   width: 100px;" src="{{ asset('cuadros/logo.png') }}" class="mx-auto d-block" >
            </a>
        <div>
            @if (Auth::check()) 
            <a class="navbar-brand "> <i class="ni ni-circle-08"></i>@if (Auth::check()) {{ auth()->user()->nombre }}   @endif</a>
            @endif
            <a class="navbar-brand " href="#">
                <i class="icon ion-logo-instagram"></i>
            </a>
            <a class="navbar-brand " href="#">
                <i class="icon ion-logo-facebook"></i>
            </a>
            <a class="navbar-brand " href="#">
                <i class="icon ion-md-mail"></i>
            </a>
            <a class="navbar-brand " href="#">
                <i class="icon ion-logo-whatsapp"></i>
            </a>
            
        </div>
        </nav>
        
    </div>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background:white !important;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto ml-auto">
                    <a class="nav-link active" href="{{route('Inicio')}}">INICIO <span class="sr-only">(current)</span></a>
                    <a class="nav-link active" href="{{route('Nosotros')}}">NOSOTROS</a>
                    <a class="nav-link active" href="{{route('Contacto')}}">CONTACTO</a>
                    @if (!Auth::check())
                    <a class="nav-link active" href="/shop">PRODUCTOS</a>
                    @endif
                    @if (Auth::check())
                    @role('Dios|Administrador|Empleado|Usuario')
                    <a class="nav-link active" href="{{route('Tienda')}}">PRODUCTOS</a>
                    <a class="nav-link active" href="{{route('home')}}">DASHBOARD</a>
                    @endrole
                @endif
                   @if (!Auth::check())  
                   <a class="nav-link active" href="{{route('login')}}">INICIO SESIÓN</a>
                   <a class="nav-link active" href="{{route('register')}}">REGISTRO</a>
                   @elseif (Auth::check())
                   <a href="{{ route('logout') }}" class="nav-link active" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <span>{{ __('CERRAR SESIÓN') }}</span>
                    </a>
                     @endif
                    </div>
                </div>
        </nav>
    </div>
    @yield('content')



    
    @yield('footer')
    <footer> 
     <div class="container-footer">
            <div class="footer">
                 <div class="copyright">
                    <p class="text-center">  © 2021 Todos los Derechos Reservados  <a href="">Regalos Personalizados Cancun</a> </p> 
                 </div>
             </div>

         </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    @if (Route::current()->uri() == 'tienda/{id}') 
    <script  type="text/javascript">
    jQuery(document).ready(function($){
        const smzas = @json($smzas);
        let smza_id = $("#smza_id").val();
        let costoEnvio = parseFloat(smzas[smza_id]['costo_zonas']['costo']);
        let precio = parseFloat({{$producto->precio}});
        const totalDiv = $("#total");
        const costoEnvioDiv = $("#costoEnvio");
        costoEnvioDiv.val("$"+(costoEnvio));
        totalDiv.val("$"+(costoEnvio+precio));
        // console.log(total);
        // console.log(smzas);
        $( "#smza_id" ).change(function() {
            smza_id = $("#smza_id").val();
            costoEnvio = parseFloat(smzas[smza_id]['costo_zonas']['costo']);
            costoEnvioDiv.val("$"+(costoEnvio));
            totalDiv.val("$"+(costoEnvio+precio));
            // console.log(costoEnvio)
            // $('#total').val(smzas['id']);
        });
    })

    </script>
    @endif
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
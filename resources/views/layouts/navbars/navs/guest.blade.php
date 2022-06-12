<style>

    /*Menu */
.nav-link {
    font-family: 'Rosario', sans-serif !important;
    padding: 5px 20px !important;
}
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0,0,0,.5);
    border-top: 2px black solid;
    margin-top: -17px;
    transition: 0.3s;
    cursor: pointer;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    border: none;
}


</style>

<head>
    <!-- TIPOGRAFIAS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
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
     
</head>

<div class="container-fluid">
    <nav class="navbar navbar-light bg-light border-bottom" style="background:white !important;">
        <form class="form-inline">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><i class="icon ion-md-search"></i></button>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><i class="icon ion-md-cart"></i></button>
        </form>
        <a class="navbar-brand mr-auto ml-auto" href="#" style="font-family: 'Rancho', cursive !important; color: #F2575D; font-size:35px !important;">
            <img style="   width: 100px;" src="{{ asset('cuadros/logo.png') }}" class="mx-auto d-block" >
        </a>
    <div>
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
                <a class="nav-link active" href="{{route('Tienda')}}">PRODUCTOS</a>
                <a class="nav-link active" href="{{route('login')}}">INICIA SESIÓN</a>
                <a class="nav-link active" href="{{route('register')}}">REGISTRO</a>

                </div>
            </div>
    </nav>
</div>


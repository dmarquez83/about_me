@extends('layouts.app')
@section('tobar')
    <h1>Servicios</h1>
    <p><a href="{{ route('home')}}">Home</a> / Servicios</p>
    @endsection
    @section('content')
            <!-- Main container -->
    <div class="container main-container">
        <div class="clearfix">

            <!-- service-box http://fa2png.io/r/ionicons/ ion-cube-->
            <div class="col-md-4 service-box">
                <i class="ion-cube size-50"></i>
                <h3>Desarrollo de Sistemas</h3>
                <div class="h-10"></div>
                <p class="parrafo">El diseño adaptable proporciona a todos los dispositivos un mismo código que se ajusta al tamaño de pantalla.</p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box web">
                <i class="ion-ios-world size-50"></i>
                <h3>Paginas Web</h3>
                <div class="h-10"></div>
                <p class="parrafo">Te puedo ayudar a modernizar tu sitio web, creando una plataforma atractiva para que puedas presentar tu negocio.</p>

            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-compose icono size-50"></i>
                <h3>Diseño Grafico</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-pulse-strong size-50"></i>
                <h3>Facil de usar</h3>
                <div class="h-10"></div>
                <p>Creando páginas auto administrables, en las que puedas actualizar tus productos y darle más vida a tu web.</p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <!--  <i class="ion-arrow-down-c size-50"></i>
                  <h3></h3>
                  <div class="h-10"></div>
                  <p class="parrafo">Creando páginas auto administrables, en las que puedas actualizar tus productos y darle más vida a tu web.</p>-->
              </div>
              <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-arrow-resize size-50"></i>
                <h3>Desarrollo a Medida</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

        </div>
    </div>
    <!-- end Main container -->
@endsection
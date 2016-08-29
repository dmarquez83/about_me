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
                <i class="ion-android-favorite-outline size-50"></i>
                <h3>Sitios Web</h3>
                <div class="h-10"></div>
                <p class="parrafo">El diseño adaptable proporciona a todos los dispositivos un mismo código que se ajusta al tamaño de pantalla.</p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-options size-50"></i>
                <h3>Sistemas De Información</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-android-checkmark-circle size-50"></i>
                <h3>Sistemas de Seguimiento y Control</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-pulse-strong size-50"></i>
                <h3>Facil de usar</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-earth size-50"></i>
                <h3>Sitios Web</h3>
                <div class="h-10"></div>
                <p class="parrafo">Te puedo ayudar a modernizar tu sitio web y la marca de tu empresa, creando una plataforma atractiva para que puedas presentar tu negocio.
                    Creando páginas auto administrables, para que puedas tener un blog, actualizar tus productos y darle más vida a tu web.
                    Te Puedo apoyar desde el diseño de tu logo,  tarjetas de presentación y mucho más.</p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-speedometer size-50"></i>
                <h3>Desarrollo a Medida</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

        </div>
    </div>
<!-- end Main container -->
@endsection
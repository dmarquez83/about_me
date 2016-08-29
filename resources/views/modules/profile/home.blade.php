@extends('layouts.app')
@section('tobar')
    <h1>Sobre Mi</h1>
    <p><a href="{{ route('home')}}">Home</a> / Sobre Mi</p>
@endsection
@section('content')
<!-- Main container -->
<div class="container main-container clearfix">
    <div class="col-md-6">
        <img src="{{ asset('assets/img/digna_marquez.png')}}" class="img-responsive" alt="" />
    </div>
    <div class="col-md-6">
        <h3 class="uppercase">Digna Marquez </h3>
        <h5>Desarrolladora Web</h5>
        <div class="h-30"></div>
        <p class="parrafo">Me encanta escribir código conciso, fácil de mantener, valoro la comunicación clara por encima de casi todo lo demás.
            Mi Meta siempre será Satisfacer las necesidades de la empresa y Fechas límite,  Cuando trabajo en un nuevo proyecto, me gusta hablar con el equipo de trabajo, de modo que pueda tener una comprensión clara de las actividades de cada miembro del equipo para tener una mejor visión del proyecto y cumplir las metas. </p>

        <p class="parrafo">Tengo la ventaja de tener años de experiencia como gerente y coordinadora del area de desarrollo de sistemas de dos grandes empresas de mi país Venezuela y al mismo tiempo he llevado mi trabajo FreeLance como desarrolladora web y llevar estos dos trabajos en paralelo me a permitido tener suficientes habilidades para llevar a cabo los proyectos de manera satisfactoria. </p>
    </div>
    <div class="col-md-12">
        <p class="parrafo">Te puedo ayudar a modernizar tu sitio web y la marca de tu empresa, creando una plataforma atractiva para que puedas presentar tu negocio. Creando páginas auto administrables, para que puedas tener un blog, actualizar tus productos y darle más vida a tu web. Te Puedo apoyar desde el diseño de tu logo, tarjetas de presentación y mucho más.</p>
        <div class="h-10"></div>
        <!--  <ul class="social-ul">
             @include('common.public.social')
        </ul>-->
    </div>
</div>
<!-- end Main container -->
@endsection
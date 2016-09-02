@extends('layouts.app')
@section('tobar')
    <h1>Portafolio</h1>
    <p><a href="{{ route('home')}}">Home</a> / Portafolio</p>
    @endsection
    @section('content')
            <!-- Main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Todos</a></li>
                            <li><a href="" data-filter=".photography">Desarrollo de Sistemas</a></li>
                            <li><a href="" data-filter=".logo">Paginas Web</a></li>
                            <li><a href="" data-filter=".graphics">Diseño Grafico</a></li>
                            <li><a href="" data-filter=".ads">Desarrollo a Medida</a></li>
                            <li><a href="" data-filter=".fashion">Otros</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->
                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    @include('modules.portfolio.home')
                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end Main container -->
@endsection
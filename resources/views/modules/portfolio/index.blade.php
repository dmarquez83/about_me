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
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".photography">Photography</a></li>
                            <li><a href="" data-filter=".logo">Logo</a></li>
                            <li><a href="" data-filter=".graphics">Graphics</a></li>
                            <li><a href="" data-filter=".ads">Advertising</a></li>
                            <li><a href="" data-filter=".fashion">Fashion</a></li>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @include('common.public.title')
    <link rel="icon" href="{{ asset('assets/img/fav.png') }}" type="image/x-icon">

    <!-- Bootstrap -->
     {!! Html::style('assets/css/bootstrap.min.css') !!}
     {!! Html::style('assets/ionicons/css/ionicons.min.css') !!}

    <!-- main css -->
    {!! Html::style('assets/css/style.css') !!} 

    @yield('styles')

    <!-- modernizr -->    
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
   <!--  <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> -->
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        @include('common.public.header')
        <!-- end box header -->

        <!-- nav -->
        @include('common.public.nav')
        <!-- end nav -->

        <!-- box-intro -->
        @include('common.public.intro')
        <!-- end box-intro -->
    </div>

    <!-- portfolio div -->
        @include('modules.portfolio.home')
    <!-- end portfolio div -->

    <!-- footer -->
        @include('common.public.footer')
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.1.js') }}"></script>
    <!--  plugins -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>
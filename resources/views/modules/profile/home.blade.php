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
        <h3 class="uppercase">About Me </h3>
        <h5>Creative & Lorem ipsum dolor sit amet</h5>
        <div class="h-30"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia-, bene laudata virtus voluptatis aditus </p>

        <p>Tum ille: Tu autem cum ipse tantum librorum habeas, quos hic tandem requiris? Esse enim quam vellet iniquus iustus poterat inpune. </p>
        <div class="h-10"></div>
        <ul class="social-ul">
            @include('common.public.social')
        </ul>
    </div>
</div>
<!-- end Main container -->
@endsection
@extends('layouts.base')
@section('styles')
	@parent
	<link href="{{asset('css\maintext.css')}}" rel='stylesheet'/>
@endsection

@section('header')
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/bg_1.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
          	<h1 class="mb-3 mt-5 bread">{{(isset($one->name))? $one->name:''}}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          </div>

        </div>
      </div>
    </section>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 body">
				{!! (isset($one->body))? $one->body:'' !!}                
        </div>
    </div>
</div>
@endsection

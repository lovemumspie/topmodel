@extends('layouts.base') 

@section('styles')
 @parent
 <link href="{{asset('css/card.css')}}" rel="stylesheet" />
 @endsection

 @section('scripts')
 @parent
<script src="{{asset('js/card.js')}}">
	
</script>
 @endsection
 
@section('header')
  <section class="hero-wrap d-flex js-fullheight">
      <div class="overlay"></div>
      <div class="forth js-fullheight d-flex align-items-center" style="background-image: url(images/bg_1.jpg);">
        <div class="text text-center">
          <span class="subheading">Top Model</span>
          <h1>Your Career of A Model</h1>
          <h2 class="mb-5">We Are Professional Model Agency Based in London</h2>
          <p><a href="#" class="btn-custom py-3 pr-2">Contact Us</a></p>
        </div>
      </div>
      <div class="third about-img js-fullheight" style="background-image: url(images/bg_2.jpg);">
      </div>
    </section>
@endsection



@section('content')
<section class="container">
    <div class="page-header">
        <h1>Material cards demo<br>
          <small>See full features on <a href="https://github.com/marlenesco/material-cards" target="_blank">Github</a></small></h1>
    </div>
    <div class="row active-with-click">
@foreach($objects as $one)

	
	<div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>{{$one->name}}</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-sean-penn.jpg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>

@endforeach
</div>
</section>
@endsection
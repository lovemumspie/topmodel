@extends('layouts.base')
@section('header')
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/bg_1.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
          	<h1 class="mb-3 mt-5 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          </div>

        </div>
      </div>
    </section>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
<form method="post" action="{{asset('home')}}">
	{!! csrf_field()!!}
@if (count($errors) > 0)
	@foreach ($errors->all() as $err)
<div>
{{ $err}}
</div>
	@endForeach
@endif
  <div class="form-group">
   <label for="title">Your full  Name</label>
    <input type="text"  name="title" class="form-control" id="title" aria-describedby="TextName" placeholder="Enter TextName">
     
	 <label for="excerpt">Say somth about yourself </label>
    <input type="text" class="form-control"  name="excerpt" id="excerpt aria-describedby="text" placeholder="Enter text">
	
	     <label for="body">Say fullful description your prfrrences in work area</label>
    <textarea class="form-control" name="body" id="body" aria-describedby="Fulltext" placeholder="Enter full description text">Enter full description text </textarea>
	
	<div>
	     <label for="status" name = "status" >Say full TextName</label>
		  <input type="rA" class="form-control" id="meta_keywords" aria-describedby="typeOfWork" name="meta_keywords" value="photograph">photograph<Br>
   <input type="checkbox" class="form-control" id="meta_description" aria-describedby="typeOfWork" name="meta_description" value="model">model<Br> 
   <input type="checkbox" class="form-control" id="seo_title" aria-describedby="typeOfWork" name="seo_title" value="studio">studio<Br> 
      <input type="checkbox" class="form-control" id="slug" aria-describedby="typeOfWork" name="slug" value="MUAH">MUAH<Br> 
    </div>
	   
 
   
    <input type="file" for="image" class="form-control" id="image" name="image" aria-describedby="Photo"  >
 
 
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
     
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="Check">
    <label class="form-check-label" for="Check">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

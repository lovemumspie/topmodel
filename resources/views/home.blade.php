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

  <div class="form-group">
   <label for="YourName">Your full  Name</label>
    <input type="text"  name="YourName" class="form-control" id="YourName" aria-describedby="TextName" placeholder="Enter TextName">
     
	 <label for="TextName">Say somth about yourself </label>
    <input type="text" class="form-control"  name="TextName"id="TextName" aria-describedby="text" placeholder="Enter text">
	
	     <label for="FullText">Say fullful description your prfrrences in work area</label>
    <textarea class="form-control" name="TextAbout" id="TextAbout" aria-describedby="Fulltext" placeholder="Enter full description text">Enter full description text </textarea>
	
	<div>
	     <label for="typeOfWork">Say full TextName</label>
		  <input type="checkbox" class="form-control" id="typeOfWork" aria-describedby="typeOfWork" name="photograph" value="photograph">photograph<Br>
   <input type="checkbox" class="form-control" id="typeOfWork" aria-describedby="typeOfWork" name="model" value="model">model<Br> 
   <input type="checkbox" class="form-control" id="typeOfWork" aria-describedby="typeOfWork" name="studio" value="studio">studio<Br> 
      <input type="checkbox" class="form-control" id="typeOfWork" aria-describedby="typeOfWork" name="muah" value="MUAH">MUAH<Br> 
    </div>
	   
 
   <label for="Photo"  class="form-control" name="Photo" id="Photo">Your photo</label>
    <input type="file" class="form-control" id="Photo" aria-describedby="Photo"  >
 
 
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

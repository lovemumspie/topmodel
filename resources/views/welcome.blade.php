@extends('layouts.base') 
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
    <section class="ftco-consult bg-primary">
      <div class="container-fluid px-md-4">
        <div class="row align-items-center">
          <div class="col-lg-2 text-lg-right">
            <h3 class="mb-4 mb-lg-0">Search A Model</h3>
          </div>
          <div class="col-lg-10">
            <form action="#" class="consult-form">
              <div class="d-lg-flex align-items-md-end">
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Height</option>
                        <option value="">5.5</option>
                        <option value="">5.6</option>
                        <option value="">5.7</option>
                        <option value="">5.8</option>
                        <option value="">5.9</option>
                        <option value="">6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <!-- <label for="#">Bust</label> -->
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Bust</option>
                        <option value="">85cm</option>
                        <option value="">90cm</option>
                        <option value="">95cm</option>
                        <option value="">100cm</option>
                        <option value="">105cm</option>
                        <option value="">110cm</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <!-- <label for="#">Weist</label> -->
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Weist</option>
                        <option value="">65</option>
                        <option value="">70</option>
                        <option value="">75</option>
                        <option value="">80</option>
                        <option value="">85</option>
                        <option value="">90</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <!-- <label for="#">Hips</label> -->
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Hips</option>
                        <option value="">90</option>
                        <option value="">95</option>
                        <option value="">100</option>
                        <option value="">105</option>
                        <option value="">110</option>
                        <option value="">115</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <!-- <label for="#">Eye</label> -->
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Eye</option>
                        <option value="">Amber</option>
                        <option value="">Blue</option>
                        <option value="">Brown</option>
                        <option value="">Gray</option>
                        <option value="">Green</option>
                        <option value="">Black</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" value="Search" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-diamond"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Finding Agency</h3>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-cosmetics"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Types of Modeling</h3>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-fashion"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Freelance</h3>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-loupe"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Search Models</h3>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>



    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Models</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>Agency</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="40">0</strong>
                <span>Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="245">0</strong>
                <span>Events</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_1.jpg);">
          </div>
          <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
            <div class="heading-section mb-5 pt-5 pl-md-5">
              <span class="subheading">Welcome to Top Model</span>
              <h2 class="mb-4">We Are Model Agency</h2>
            </div>
            <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Fashion Shows</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Photosessions</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Model Video</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Models</span>
            <h2 class="mb-4">Popular Model</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
      </div>
      <div class="container-fluid px-md-0">
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-1.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Patricia <br>Becket</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-2.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Emily <br>Stewart</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-3.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Sofia <br>Scott</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-4.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Chloe <br>Johnson</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-5.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Victoria <br>Henderson</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url(images/model-6.jpg);">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Age:</span><span>18</span></li>
										<li><span>Height:</span><span>179</span></li>
										<li><span>Bust:</span><span>85</span></li>
										<li><span>Waist:</span><span>65</span></li>
										<li><span>Hips:</span><span>90</span></li>
										<li><span>Shoes:</span><span>39</span></li>
										<li><span>Eyes:</span><span>Blue</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a href="model-single.html">Ella <br>Turner</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">My satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Agent</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Model</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Model</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Agent</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_2.jpg);">
            <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
              <span class="icon-play"></span>
            </a>
          </div>
          <div class="col-md-6 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section pt-md-5">
                <span class="subheading">Events</span>
                <h2 class="mb-4">Latest Fashion Shows</h2>
            </div>
            <div class="pb-md-5">
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Our latest update</span>
            <h2 class="mb-4">Case Study</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
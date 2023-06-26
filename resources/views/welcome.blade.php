@extends('layouts.app')

    @section('content')


    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url({{url('/img/slider-main/bg1.jpg')}})">
          <div class="slider-content">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                      <h2 class="slide-title" data-animation-in="slideInLeft">Years of excellence in</h2>
                      <h3 class="slide-sub-title" data-animation-in="slideInRight">Social media</h3>
                      <p data-animation-in="slideInLeft" data-duration-in="1.2">
                          <a href="{{url('service')}}" class="slider btn btn-primary">Our Services</a>
                          <a href="{{url('contact')}}" class="slider btn btn-primary border">Contact Now</a>
                      </p>
                    </div>
                </div>
              </div>
          </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url({{url('/img/slider-main/bg2.jpg')}})">
          <div class="slider-content text-left">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                      <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Freelance course</h2>
                      <h3 class="slide-title" data-animation-in="fadeIn">When Skill Matters</h3>
                      <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                      <p data-animation-in="slideInRight">
                          <a href="{{url('service')}}" class="slider btn btn-primary border">Our Services</a>
                      </p>
                    </div>
                </div>
              </div>
          </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url({{url('/img/slider-main/bg3.jpg')}})">
          <div class="slider-content text-right">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                      <h2 class="slide-title" data-animation-in="slideInDown">big community</h2>
                      <h3 class="slide-sub-title" data-animation-in="fadeIn">Be a trainer</h3>
                      <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
                      <div data-animation-in="slideInLeft">
                          <a href="{{url('service')}}" class="slider btn btn-primary" aria-label="contact-with-us">Our services</a>
                          <a href="{{url('contact')}}" class="slider btn btn-primary border" aria-label="learn-more-about-us">Contact us</a>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>



      <section id="ts-features" class="ts-features">
        <div class="container">
          <div class="row">
              <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title">About Us</h2>
                    <h3 class="into-sub-title">Enrole for our high quality course</h3>
                    <p>Do you want to improve your skill? Now nothing to worry about. You can contact with us. We provide high quality. We also facilate you to earn money easily. Checkout our services.</p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="ts-service-box">
                          <span class="ts-service-icon">
                            <i class="fas fa-trophy"></i>
                          </span>
                          <div class="ts-service-box-content">
                            <h3 class="service-box-title">Get success by skill building</h3>
                          </div>
                      </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                      <div class="ts-service-box">
                          <span class="ts-service-icon">
                            <i class="fas fa-sliders-h"></i>
                          </span>
                          <div class="ts-service-box-content">
                            <h3 class="service-box-title">We Build Partnerships</h3>
                          </div>
                      </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->

                <div class="row">
                    <div class="col-md-6">
                      <div class="ts-service-box">
                          <span class="ts-service-icon">
                            <i class="fas fa-thumbs-up"></i>
                          </span>
                          <div class="ts-service-box-content">
                            <h3 class="service-box-title">Guided by Commitment</h3>
                          </div>
                      </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                      <div class="ts-service-box">
                          <span class="ts-service-icon">
                            <i class="fas fa-users"></i>
                          </span>
                          <div class="ts-service-box-content">
                            <h3 class="service-box-title">Earn moner Eeasily</h3>
                          </div>
                      </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->
              </div><!-- Col end -->

              <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Earn money</h3>
                <p>You can earn money by referring other people. register now ang get your referrel code.</p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                      <div class="card-header p-0 bg-transparent" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Referrel
                            </button>
                          </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                          </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0 bg-transparent" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Customer Service
                            </button>
                          </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                          </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0 bg-transparent" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Integrity
                            </button>
                          </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                          </div>
                      </div>
                    </div>
                </div>
                <!--/ Accordion end -->

              </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </section><!-- Feature are end -->

      <section id="facts" class="facts-area dark-bg">
        <div class="container">
          <div class="facts-wrapper">
              <div class="row">
                <div class="col-md-3 col-sm-6 ts-facts">
                    <div class="ts-facts-img">
                      <img loading="lazy" src="{{url('/img/icon-image/fact1.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                      <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                      <h3 class="ts-facts-title">Total services</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                      <img loading="lazy" src="{{url('/img/icon-image/fact2.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                      <h2 class="ts-facts-num"><span class="counterUp" data-count="{{App\Models\User::all()->count()}}">0</span></h2>
                      <h3 class="ts-facts-title">Total Members</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                      <img loading="lazy" src="{{url('/img/icon-image/fact3.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                      <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                      <h3 class="ts-facts-title">Hours of Work</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                      <img loading="lazy" src="{{url('/img/icon-image/fact4.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                      <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                      <h3 class="ts-facts-title">Experience Shared</h3>
                    </div>
                </div><!-- Col end -->

              </div> <!-- Facts end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
      </section><!-- Facts end -->

      <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
          <div class="row text-center">
              <div class="col-12">
                <h2 class="section-title">We Are Specialists In</h2>
                <h3 class="section-sub-title">What We Do</h3>
              </div>
          </div>
          <!--/ Title row end -->

          <div class="row">
              <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon1.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('service')}}">Watch time</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon2.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('login')}}">Referrel earning</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 2 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon3.png')}}"  alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('login')}}">Referrel ecommerce</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 3 end -->

              </div><!-- Col end -->

              <div class="col-lg-4 text-center">

              </div><!-- Col end -->

              <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon4.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('tik')}}">Tiktok</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon5.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('face')}}">facebook boost</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 5 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon6.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="{{url('service')}}">Foreign products</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 6 end -->
              </div><!-- Col end -->
          </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
      </section><!-- Service end -->


    @endsection

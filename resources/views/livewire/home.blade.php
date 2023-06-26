<div>

    <header id="header" class="header-one">
        <div class="bg-black">
          <div class="container">

          </div><!-- Container end -->
        </div>

        <div class="site-navigation">
          <div class="container">
              <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div id="navbar-collapse" class="collapse navbar-collapse">
                          <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li class="active"><a href="index.html">Home One</a></li>
                                  <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="about.html">About Us</a></li>
                                  <li><a href="team.html">Our People</a></li>
                                  <li><a href="testimonials.html">Testimonials</a></li>
                                  <li><a href="faq.html">Faq</a></li>
                                  <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="projects.html">Projects All</a></li>
                                  <li><a href="projects-single.html">Projects Single</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="services.html">Services All</a></li>
                                  <li><a href="service-single.html">Services Single</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="typography.html">Typography</a></li>
                                  <li><a href="404.html">404</a></li>
                                  <li class="dropdown-submenu">
                                      <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#!">Child Menu 1</a></li>
                                        <li><a href="#!">Child Menu 2</a></li>
                                        <li><a href="#!">Child Menu 3</a></li>
                                      </ul>
                                  </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                  <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                  <li><a href="news-single.html">News Single</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" wire:click.prevent="contact" href="contact.html">Contact</a></li>
                          </ul>
                      </div>
                    </nav>
                </div>
                <!--/ Col end -->
              </div>
              <!--/ Row end -->

              <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
              </div><!-- Search end -->

              <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                  <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
              </div><!-- Site search end -->
          </div>
          <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
      </header>
      <!--/ Header end -->


    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url({{url('/img/slider-main/bg1.jpg')}})">
          <div class="slider-content">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                      <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                      <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                      <p data-animation-in="slideInLeft" data-duration-in="1.2">
                          <a href="services.html" class="slider btn btn-primary">Our Services</a>
                          <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
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
                      <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                      <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                      <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                      <p data-animation-in="slideInRight">
                          <a href="services.html" class="slider btn btn-primary border">Our Services</a>
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
                      <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                      <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                      <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
                      <div data-animation-in="slideInLeft">
                          <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                          <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
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
                    <h3 class="into-sub-title">We deliver landmark projects</h3>
                    <p>We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains,
                      she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village
                      and the subline of her own road, the Line Lane.</p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="ts-service-box">
                          <span class="ts-service-icon">
                            <i class="fas fa-trophy"></i>
                          </span>
                          <div class="ts-service-box-content">
                            <h3 class="service-box-title">We've Repution for Excellence</h3>
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
                            <h3 class="service-box-title">A Team of Professionals</h3>
                          </div>
                      </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->
              </div><!-- Col end -->

              <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Our Values</h3>
                <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                      <div class="card-header p-0 bg-transparent" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Safety
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
                      <h3 class="ts-facts-title">Total Projects</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                      <img loading="lazy" src="{{url('/img/icon-image/fact2.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                      <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                      <h3 class="ts-facts-title">Staff Members</h3>
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
                      <h3 class="ts-facts-title">Countries Experience</h3>
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
                      <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon2.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 2 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon3.png')}}"  alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 3 end -->

              </div><!-- Col end -->

              <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="{{url('img/services/service-center.jpg')}}" alt="service-avater-image">
              </div><!-- Col end -->

              <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon4.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon5.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 5 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                      <img loading="lazy" src="{{url('/img/icon-image/service-icon6.png')}}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                      <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 6 end -->
              </div><!-- Col end -->
          </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
      </section><!-- Service end -->

</div>

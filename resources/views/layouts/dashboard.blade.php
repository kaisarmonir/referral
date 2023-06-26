
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Constra - Construction Html5 Template</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{url('css/all.min.css')}}">
  <!-- Animation -->

  <!-- Colorbox -->

  <!-- Template styles-->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

@livewireStyles
<script type="module">
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>

</head>
<body>
  <div class="body-inner">


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
                            <li class="nav-item"><a class="nav-link" href="{{url('/dashboard')}}">dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>

                            <li class="nav-item"><a class="nav-link" href="#">Income</a></li>

                            <li class="nav-item"><a class="nav-link" href="#">course</a></li>



                                <li class="nav-item"><a class="nav-link"  href="{{url('/service')}}">service</a></li>
                            <li class="nav-item"><a class="nav-link"  href="{{url('/faq')}}">FAQ</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                               </li>
                          </ul>
                      </div>


                    </nav>
                </div>
                <!--/ Col end -->
              </div>
              <!--/ Row end -->


          </div>
          <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
      </header>
      <div class="container pt-3" style="min-height: 100vh">
    <!--/ Topbar end -->
<!-- Header start -->

@yield('content')



</div>

  <footer id="footer" class="footer bg-overlay">


    <div class="footer-main" style="background-color:black">
        <div class="container ">
          <div class="row justify-content-between">

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">About Us</h3>
              <div class="working-hours">
                We provide B2B business service. Organize Frelancing course, Social media solution web development and many more.


              </div>
            </div><!-- Col end -->

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Learn More</h3>
              <ul class="list-arrow">
                <li><a href="service-single.html">FAQ</a></li>
                <li><a href="service-single.html">Tearms and condition</a></li>
                <li><a href="service-single.html">Contact us</a></li>


              </ul>
            </div><!-- Col end -->
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
                <h3 class="widget-title">Working Hours</h3>

                <p> We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                Hotline and Email.</p>


                  <i class="fa-brands fa-dev"></i><small class="ml-1">Kaisar Monir</small>
              </div><!-- Col end -->

          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{url('js/jquery.min.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{url('js/bootstrap.min.js')}}" defer></script>
  <!-- Slick Carousel -->

  <!-- Color box -->

  <!-- shuffle -->



  <!-- Google Map API Key-->


  <!-- Template custom -->
  <script src="{{url('js/script.js')}}"></script>
  @vite(['resources/js/app.js'])
  </div><!-- Body inner end -->
  @livewireScripts
  </body>

  </html>

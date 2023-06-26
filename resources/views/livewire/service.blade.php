@extends('layouts.app')

    @section('content')

    <div class="container pt-3" >


        <section id="main-container" class="main-container">
            <div class="container">
              <div class="row text-center">
                <div class="col-12">
                  <h2 class="section-title">Grab the Packages</h2>
                  <h3 class="section-sub-title">Pricing</h3>
                </div>
              </div>
              <!--/ Title row end -->
              <div class="row">
         <div class="text-right col-12">     <a href="{{url('/servicecreate')}}"><button class="btn btn-secondary">Add a service</button></a></div>
        </div>
              <div class="row">


                @foreach ($service as $service)


<div class="col-lg-4 col-md-6">
    <a href="{{url('service').'/'.$service->id}}" class="text-primary"><i class="fas fa-edit"></i></a>



                      <form method="POST" action="{{url('service').'/'.$service->id}}" id="delete-form-{{$service->id}}" style="display: none;">
                            @csrf
                            @method('DELETE')

                          </form>
                          <a href="#" class="delete-icon-link ml-2 text-danger" data-record-id="{{$service->id}}">
                            <i class="fas fa-trash delete-icon"></i>
                          </a>




    <div class="ts-pricing-box">
      <div class="ts-pricing-header" style="background: linear-gradient(to bottom right, #3399ff 0%, #cc99ff 100%);">
        <h2 class="ts-pricing-name">{{$service->name}}</h2>
        @can('alll')

        @endcan
        <h2 class="ts-pricing-price">
          <span class="currency">	&#2547;</span><strong>{{$service->price}}</strong>
        </h2>
      </div><!-- Pricing header -->
      <div class="ts-pricing-features">
        <ul class="list-unstyled">
          <li><h6>{{$service->title}}</h6> </li>
          <li>{{$service->description}} </li>
        </ul>
      </div><!-- Features end -->
      <div class="plan-action">
        <a href="{{url()->current().'/'.$service->id.'/'.'edit'}}" class="btn btn-dark">Order Now</a>
      </div>
    </div><!-- Plan 1 end -->
  </div><!-- Col end -->


@endforeach




              </div>
              <!--/ Content row end -->

            </div><!-- Conatiner end -->
          </section><!-- Main container end -->

        <!--    <script src="https://www.youtube.com/iframe_api"></script>

            <div id="player"></div>
            <script>
              // Replace 'YOUR_VIDEO_ID' with the actual YouTube video ID
              var videoId = 'TmRgK-pXH9c';
              var player;

              function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                  height: '360',
                  width: '640',
                  videoId: videoId,
                  events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                  }
                });
              }

              function onPlayerReady(event) {
                event.target.playVideo();
              }

              var startTime;
              function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING) {
                  startTime = new Date().getTime();
                } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                  var endTime = new Date().getTime();
                  var duration = Math.floor((endTime - startTime) / 1000);
                  console.log('Video duration:', duration, 'seconds');
                  alert(duration);
                }
              }
            </script> -->
<!-- Your Blade template -->


<!-- JavaScript code -->

<!-- Your Blade template -->

  <!-- JavaScript code -->
  <script>
    var deleteLinks = document.querySelectorAll('.delete-icon-link');

    deleteLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        var recordId = link.getAttribute('data-record-id');
        var confirmDelete = confirm('Are you sure you want to delete this record?');

        if (confirmDelete) {
          var formId = 'delete-form-' + recordId;
          var form = document.getElementById(formId);
          form.submit();
        }
      });
    });
  </script>



    </div>
    @endsection

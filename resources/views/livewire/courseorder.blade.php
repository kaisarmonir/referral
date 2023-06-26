@extends('layouts.app')

    @section('content')

    <div class="container pt-3">
<div class=" d-flex justify-content-center">
<div class=" col-md-6">
        <section id="main-container" class="main-container">
            <div class="container">
              <div class="row text-center">
                <div class="col-12">

                  <h3 class="section-sub-title">Payment</h3>
                </div>
              </div>
              <!--/ Title row end -->
              <div class="row">

        </div>
              <div class="row">





<div class="col-lg-12 col-md-12">


    <div class="ts-pricing-box">
      <div class="ts-pricing-header" style="background:  linear-gradient(to bottom right, #3399ff 0%, #ff6666 100%);">
        <h2 class="ts-pricing-name">{{$course->name}}</h2>
        @can('alll')

        @endcan
        <h2 class="ts-pricing-price">
          <span class="currency">	&#2547;</span><strong>{{$course->price}}</strong>
        </h2>
      </div><!-- Pricing header -->
      <div class="ts-pricing-features">
        <ul class="list-unstyled">
          <li><h6>{{$course->title}}</h6> </li>
          <li>{{$course->description}} </li>

              <li>please pay {{$course->price}} by {{$paymentInfo->number}} and give the transaction id bellow.</li>@can('all')
              <a href="{{url('paymentInfo/1')}}" class="text-primary"><i class="fas fa-edit"></i></a>
              @endcan

                <form action="{{url('order')}}" method="post">
@csrf
                    <div class="form-group">
                        @error('mobile')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                      <label for="exampleInputEmail1">Payment Mobile Number</label>
                      <input type="text" class="form-control"  name= "mobile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment number">

                    </div>

                    <div class="form-group">
                        @error('method')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                        <label for="exampleInputEmail1">Payment method</label>
                        <input type="text" class="form-control" name= "method" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$paymentInfo->method}}">

                      </div>

                      <div class="form-group d-none">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" name= "name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$course->name}}">

                      </div>
                      <div class="form-group d-none">
                        <label for="exampleInputEmail1">price</label>
                        <input type="text" class="form-control" name= "price" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$course->price}}">

                      </div>

                    <div class="form-group">
                        @error('tran')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                        <label for="exampleInputEmail1">Transaction Id</label>
                        <input type="text" class="form-control"  name= "tran" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Transaction Id">

                      </div>

                    <button type="submit" class="btn btn-primary">Place Order</button>
                  </form>

        </ul>
      </div><!-- Features end -->

    </div><!-- Plan 1 end -->
  </div><!-- Col end -->







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
    </div>
</div>
    @endsection

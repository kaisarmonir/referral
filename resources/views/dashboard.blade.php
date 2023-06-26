@extends('layouts.app')

    @section('content')

<div class="container">



        <div class="row">

            <div class="col-md-8">


                <div class="left-column">


                          <!--/ Title row end -->





                          </div>
                          <!--/ Content row end -->


                          <div class="content-wrapper">
                            <!-- Content Header (Page header) -->

                                <style>
                                    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }

  .card-counter i{
    font-size: 5em;
    opacity: 0.3;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.8;

    display: block;
    font-size: 18px;
  }

  .count-name a:hover{
    color: #fff;

  }
                                </style>
                                <div class="container"><br>
                                    <h1> Dashboard</h1> <br>



                                    <div class="row">
                                    <div class="col-md-4">
                                      <div class="card-counter primary">
                                        <i class="fa fa-code-fork"></i>
                                        <span class="count-numbers">{{$earning->withdraw}}&#2547;</span>
                                        <span class="count-name"><a href="#"> Withdrawn</a></span>

                                      </div>
                                    </div>



                                    <div class="col-md-4">
                                      <div class="card-counter success">
                                        <i class="fa fa-database"></i>
                                        <span class="count-numbers">{{$earning->firstGen+$earning->secondGen+$earning->thirdGen}}&#2547;</span>
                                        <span class="count-name">Your Income</span>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="card-counter incr info">
                                        <i class="fa fa-users"></i>
                                        <span class="count-numbers">{{$m}}</span>
                                        <span class="count-name">Your Team Member</span>
                                      </div>
                                    </div>
                                  </div>



                                </div>

<br>
@if ($notice)
<div class="card text-info text-center">{{$notice->notice}}</div>
@endif

<br>
                                <div class="row text-center">
                                    <div class="col-12">
                                      <h2 class="section-title text-success text-bold">Your Refar Code</h2>
                                      <h3 class="section-sub-title">{{auth()->user()->id}}</h3>
                                    </div>
                                  </div>

                </div>



                <div class="accordion accordion-group" id="our-values-accordion">


                    @foreach ($faq as $key=>$faq)


                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="heading{{$faq->id}}">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                  {{$faq->title}}
                              </button>
                            </h2>
                        </div>
                        <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#our-values-accordion">
                            <div class="card-body">
                                {{$faq->description}}
                            </div>
                        </div>
                      </div>



                    @endforeach
                <!--/ Accordion end -->
<br>   <a href="{{url('/faq')}}"><p class="text-left pl-2 text-info">Know more...</p></a><br>
              </div>


              </div>



              <div class="col-md-4">
                <div class="right-column text-center pt-3 pl-2" >

<div id="comments" class="comments-area">
    <h3 class="comments-heading">Reviews</h3>

    <ul class="comments-list">
      <li>


        @foreach ($review as $review)


        <div class="comment d-flex">
            <i class='fas fa-coins mr-3' style='font-size:24px;color:red'></i>
          <div class="comment-body">
            <div class="meta-data">

              <span class="comment-author mr-3">{{$review->name}}</span>
              <span class="comment-date float-right">{{$review->created_at}}</span>
            </div>

            <div class="comment-content">
              <p>{{$review->description}}</p>
            </div>

         <!--   <div class="text-left">
              <a class="comment-reply font-weight-bold" href="#">Reply</a>
            </div> -->
          </div>
        </div><!-- Comments end -->

        @endforeach

        <a href="{{url('/review')}}"><p class="text-left pl-2 text-info">More review...</p></a>


        </div><!-- Comments end -->
      </li><!-- Comments-list li end -->
    </ul><!-- Comments-list ul end -->
  </div><!-- Post comment end -->


            <!--     <div id="player" class=" text-center"></div> -->
                </div>
              </div>

        </div>





    </div>
    <script src="https://www.youtube.com/iframe_api"></script>





    <script>
      // Conversion function for Bengali numbers
      function convertToBengaliNumber(number) {
        const bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return number.toString().replace(/\d/g, (digit) => bengaliDigits[digit]);
      }

      // Replace 'YOUR_VIDEO_ID' with the actual YouTube video ID
      var videoId = 'TmRgK-pXH9c';
      var player;
      var isVideoPlaying = false;

      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '168',
          width: '300',
          videoId: videoId,
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        // Remove the following line to stop autoplay
        // event.target.playVideo();

        // Add event listener for scroll
        window.addEventListener('scroll', checkVideoVisibility);
      }

      var startTime;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
          startTime = new Date().getTime();
          isVideoPlaying = true;
        } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
          var endTime = new Date().getTime();
          var duration = Math.floor((endTime - startTime) / 1000);
          var bengaliDuration = convertToBengaliNumber(duration);
          console.log('Video duration:', bengaliDuration, 'সেকেন্ড');
         alert(duration)
          isVideoPlaying = false;
        }
      }

      var videoElement = document.getElementById('player');
      var videoOffsetTop = videoElement.offsetTop;
      var videoHeight = videoElement.offsetHeight;

      function checkVideoVisibility() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var scrollBottom = scrollTop + window.innerHeight;
        var videoTop = videoOffsetTop + scrollTop;
        var videoBottom = videoTop + videoHeight;

        if (scrollBottom < videoTop || scrollTop > videoBottom) {
          // Video is out of view
          if (isVideoPlaying) {
            player.pauseVideo();
            isVideoPlaying = false;
          }
        } else {
          // Video is in view
          if (!isVideoPlaying) {
            player.playVideo();
            isVideoPlaying = true;
          }
        }
      }
    </script>


    @endsection

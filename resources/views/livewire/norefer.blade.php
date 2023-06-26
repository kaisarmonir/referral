@extends('layouts.app')

    @section('content')

    <div class="container pt-3">



<a href="{{url('admin')}}" class="text-primary">Go back to admin dashboard</a>
        <div class="" style="text-align: center">
            <div style="text-align: ">




             Not found
            </div> <br>
</div>


      <!--  <script src="https://www.youtube.com/iframe_api"></script>

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
            </script>
        -->


    </div>
    @endsection

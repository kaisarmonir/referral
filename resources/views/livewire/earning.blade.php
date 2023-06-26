@extends('layouts.app')

    @section('content')

    <div class="container pt-3">



<a href="{{url('admin')}}" class="text-primary">Go back to admin dashboard</a>
        <div class="" style="text-align: center">
            <div style="text-align: ">


@if ($user)


                Name:{{$user->name}} <br>
                Mobile:{{$user->mobile}} <br>
                Refer code:{{$earning->user_id}} <br>
                Total earning:{{$earning->firstGen+$earning->secondGen+$earning->thirdGen}} <br>
                Total withdraw:{{$earning->withdraw}}
            </div> <br> <br>
<form id="myForm" method="post" action="{{url('earning').'/'.$earning->id}}">
@csrf
@method('patch')

<label for="numberField">Withdraw Now:</label>
<input type="number" id="numberField" placeholder="Enter amount" name="withdraw" required>
<br>
<input type="submit" value="Withdraw">
</form>
@else
not found
@endif
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

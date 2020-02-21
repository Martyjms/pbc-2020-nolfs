@extends('layout')

@section('title', 'Highlight Videos')

@section('content')










    <h1 class="font-weight-light text-center  mt-4 mb-0">Highlight Videos</h1>

    <hr class="mt-2 mb-5">



    <div class="container-fluid pb-video-container">
      <div class="col-md-10 offset-md-1">

          <div class="row pb-row">
              <div class="col-md-4">
                <label class="form-control label-warning text-center">SR HIGH - 2019</label>
                <a href="https://www.youtube.com/watch?v=Gc8JvIbyULY" ><button type="button" class="btn btn-primary btn-lg">SR High 2019</button></a>


              </div>
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">JR HIGH 1 - 2019</label>
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\JR. HIGH 1 FINAL FILM 2_x265.mp4')}}" frameborder="0" allowfullscreen controls></video>

              </div>
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">JR HIGH 2 - 2019</label>
                  <video class="pb-video-frame " width="100%" height="230" src="{{asset('video\Jr. High 2 FInal Film.mp4')}}" frameborder="0" allowfullscreen controls></video>

              </div>

          </div>
          <div class="row pb-row">
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">PRETEEN 1 - 2019</label>
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\Preteen 1 Final Video.mp4')}}" frameborder="0" allowfullscreen controls></video>
              </div>

              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">PRETEEN 2 - 2019</label>
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\Preteen 2 Youtube Copy.mp4')}}" frameborder="0" allowfullscreen controls></video>

              </div>
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">PRIMARY - 2019</label>
                    <iframe class="pb-video-frame" width="560" height="315" src="https://www.youtube.com/embed/YVHITK6TCjE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\PRIMARY Video.mp4')}}" frameborder="0" allowfullscreen controls></video> --}}
              </div>

          </div>
      </div>
  </div>



  {{-- <div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">

        <div class="row pb-row">
            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">SR HIGH - 2019</label>
              <a href="https://www.youtube.com/watch?v=Gc8JvIbyULY" ><button type="button" class="btn btn-primary btn-lg">SR High 2019</button></a>
                <video class="pb-video-frame" volume="0.5"  width="100%" height="230" src="{{asset('video\sr_high_video_2019.mp4')}}" frameborder="0" allowfullscreen controls></video>

            </div>
            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">JR HIGH 1 - 2019</label>
                <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\JR. HIGH 1 FINAL FILM 2_x265.mp4')}}" frameborder="0" allowfullscreen controls></video>

            </div>
            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">JR HIGH 2 - 2019</label>
                <video class="pb-video-frame " width="100%" height="230" src="{{asset('video\Jr. High 2 FInal Film.mp4')}}" frameborder="0" allowfullscreen controls></video>

            </div>

        </div>
        <div class="row pb-row">
            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">PRETEEN 1 - 2019</label>
                <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\Preteen 1 Final Video.mp4')}}" frameborder="0" allowfullscreen controls></video>
            </div>

            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">PRETEEN 2 - 2019</label>
                <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\Preteen 2 Youtube Copy.mp4')}}" frameborder="0" allowfullscreen controls></video>

            </div>
            <div class="col-md-4 pb-video">
              <label class="form-control label-warning text-center">PRIMARY - 2019</label>
                  <iframe class="pb-video-frame" width="560" height="315" src="https://www.youtube.com/embed/YVHITK6TCjE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\PRIMARY Video.mp4')}}" frameborder="0" allowfullscreen controls></video>
            </div>

        </div>
    </div>
</div> --}}


@endsection






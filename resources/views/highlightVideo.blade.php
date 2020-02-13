@extends('layout')

@section('title', 'Highlight Videos')

@section('content')








    <h1 class="font-weight-light text-center  mt-4 mb-0">Highlight Videos</h1>

    <hr class="mt-2 mb-5">



    <div class="container-fluid pb-video-container">
      <div class="col-md-10 offset-md-1">

          <div class="row pb-row">
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">SR HIGH - 2019</label>
                  <video class="pb-video-frame" volume="0.5"  width="100%" height="230" src="{{asset('video\sr_high_video_2019.mp4')}}" frameborder="0" allowfullscreen controls></video>

              </div>
              <div class="col-md-4 pb-video">
                <label class="form-control label-warning text-center">JR HIGH 1 - 2019</label>
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\JR. HIGH 1 FINAL FILM 2.mp4')}}" frameborder="0" allowfullscreen controls></video>

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
                  <video class="pb-video-frame" width="100%" height="230" src="{{asset('video\PRIMARY Video.mp4')}}" frameborder="0" allowfullscreen controls></video>

              </div>

          </div>
      </div>
  </div>

    {{-- <div class="container justify-content-center">

    <div class="row"> --}}


                  {{-- <video playsinline="playsinline" class="example-image-link col-md-4" autoplay="false" muted="muted" loop="false"> --}}
                        {{-- <source class="example-image-link col-md-4" src="{{ asset('video\Camp2020landing.mp4')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward." alt="Having Fun at Plesantview Bible Camp" type="video/mp4">
                      </video><img class="img-fluid" src="{{asset('video\srHighThumb.png')}}" alt=""/></a>
        <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
        <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>

    </div>
    <div class="row">
            <a class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1717.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt=""/></a>
            <a class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
            <a class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>
        </div>
        <div class="row">
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1717.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt=""/></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>
            </div>
        <div class="row">
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1717.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt=""/></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>
            </div>
        <div class="row">
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1717.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt=""/></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
                <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>
            </div>
            <div class="row ">
                    <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1717.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt=""/></a>
                    <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1763.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="" /></a>
                    <a class="example-image-link col-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>
                </div>


    </div>
  </section>
 --}}







{{-- <!-- Page Content -->
<div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Camp Memories</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">

      <div class="col-lg-3 col-md-4 col-6">
        <a href="{{asset('Photos2019\IMG_1717.jpg')}}" class="d-block mb-4 h-100" data-toggle="lightbox" data-gallery="camp-memories">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="{{asset('Photos2019\IMG_1717.jpg')}}" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="{{asset('Photos2019\IMG_1717.jpg')}}" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="{{asset('Photos2019\IMG_1763.jpg')}}" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1763.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1717.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="">
            </a>
      </div>
    </div>

  </div> --}}
  <!-- /.container -->


@endsection






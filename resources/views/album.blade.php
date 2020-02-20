@extends('layout')

@section('title', 'Camp Memories')

@section('content')


{{-- @push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />
    @endpush --}}











    <hr />


    <h1 class="font-weight-light text-center  mt-4 mb-0">Camp Memories</h1>

    <hr class="mt-2 mb-5">

    <div class="container justify-content-center">

    <div class="row">

        <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\sr.high.43.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\sr.high.43.jpg')}}" alt=""/></a>
        <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\cabinPhotoPreteen-43.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\cabinPhotoPreteen-43.jpg')}}" alt="" /></a>
        <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1741.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1741.jpg')}}" alt="" /></a>

    </div>
    <div class="row">
            <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1717-resized.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1717-resized.jpg')}}" alt=""/></a>
            <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\cabin-fence-43-resized.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\cabin-fence-43-resized.jpg')}}" alt="" /></a>
            <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\pointing-43.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\pointing-43.jpg')}}" alt="" /></a>
        </div>
        <div class="row">
                <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\chapel-sleepover.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\chapel-sleepover.jpg')}}" alt=""/></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\IMG_6907-4.3-resized.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\IMG_6907-4.3-resized.jpg')}}" alt="" /></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\IMG_1733-43-resized.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_1733-43-resized.jpg')}}" alt="" /></a>
            </div>
        <div class="row">
                <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_2074.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_2074.jpg')}}" alt=""/></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\crafts.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\crafts.jpg')}}" alt="" /></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\IMG_8087-43.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_8087-43.jpg')}}" alt="" /></a>
            </div>
        <div class="row">
                <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_7588.JPG')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_7588.JPG')}}" alt=""/></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\mustang-43.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\mustang-43.jpg')}}" alt="" /></a>
                <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\IMG_9350-43-resized.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\IMG_9350-43-resized.jpg')}}" alt="" /></a>
            </div>
            <div class="row ">
                    <a data-tilt class="example-image-link col-md-4" href="{{asset('Photos2019\IMG_1782-resized.jpg')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-fluid" src="{{asset('Photos2019\IMG_1782-resized.jpg')}}" alt=""/></a>
                    <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\cabinPhoto43.jpg')}}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="img-fluid" src="{{asset('Photos2019\cabinPhoto43.jpg')}}" alt="" /></a>
                    <a data-tilt class="example-image-link col-4" href="{{asset('Photos2019\preteen-43.jpg')}}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="img-fluid" src="{{asset('Photos2019\preteen-43.jpg')}}" alt="" /></a>
                </div>


    </div>









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






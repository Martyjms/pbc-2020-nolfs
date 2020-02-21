@extends('layout')

@section('title', 'Highlight Videos')

@section('content')



<section class="camps container">
    <h1 class="display-4">Clicking on the thumbnail will direct you to our YouTube channel</h1>

    <div class="d-flex flex-row flex-wrap justify-content-center">




        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">SR HIGH</h1>
            <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top" background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\sr.high.43-resized.jpg')}}"  alt="Sr High">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="https://www.youtube.com/watch?v=Gc8JvIbyULY" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>


        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRE-TEEN 1</h1>
          <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\preteen1-43-resized.jpg')}}"  alt="PRE-TEEN 1">

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                <a href="https://www.youtube.com/watch?v=19AVh8xiEf4" class="stretched-link"></a>
                </div>
          </div>
        </div>
    </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">JR HIGH 1</h1>
          <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top" background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\jr high 1.jpg')}}"  alt="Fun in the sand">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                <a href="https://www.youtube.com/watch?v=VWbZZe71DeU" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRE-TEEN 2</h1>
          <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\preteen-43.jpg')}}" alt="Fun in the sand">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
            </div>
            <div class="d-flex justify-content-between align-items-center">
            <a href="https://www.youtube.com/watch?v=v77qejKl1mA" class="stretched-link"></a>
            </div>
          </div>
        </div>
    </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">Primary</h1>
            <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\primary-43.jpg')}}" alt="Fun in the sand">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                <a href="https://www.youtube.com/watch?v=YVHITK6TCjE" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">Junior High 2</h1>
            <div class="card mb-4 shadow-sm">
            <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\IMG_7712-43.jpg')}}"  alt="Fun in the sand">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">August 9 - 14</p>
                <p>Grades 7, 8, 9</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                <a href="/register" class="stretched-link">Registration</a>
                <p>$315</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>








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






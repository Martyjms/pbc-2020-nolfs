

@extends('layout')

@section('content')

<div class="container">
    <div class="row welcome text-center">
      <div class="col-12">

        <h1 class="display-4">2021 Director's Message</h1>
        <hr>
        <br>

          <p class="lead">Happy New Years and welcome to 2021!   We are excited to see the blessings God brings us this year.</p>
          <p class="lead">Currently the staff of PBC and FBC are continuing to pray and seek guidance as to what our summer program will look like.  We continue to follow the guidelines the Saskatchewan health authority has put in place and hope for lesser restrictions come summer.</p>
          <p class="lead">We are determined to have an in person camp program this year in as safe a capacity as possible.  That being said, with changes continually happening, we have not been able to make a solid plan of what that will look like yet.  We are hoping by March 15 we will be able to open registration with a clear plan as to what the program framework will be.</p>
          <p class="lead">In the mean time, we are seeking staff and accepting applications.  Please continue to pray for the leaders as they make these decisions, that the right staff will step forward and for the provincial authorities as they navigate through all the factors that need to be considered.</p>
          <p class="lead">We are so blessed to have the assurance and hope of Jesus Christ and are eager to continue to share the message of his peace and love this summer with our campers.</p>

        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row welcome text-center">

          <div class="col-12">
            <img class="img-fluid" src="{{asset('images\PBC 2021 - Resized large.jpg')}}" alt="camp theme graphic" />
          </div>
        </div>
      </div>











    <div class="container-fluid py-5">

        <div>
            <p id="small" class="display-4">Pleasantview Bible Camp offers summer camps for kids in grades 2-12.  Explore below for more information.</p>
            <br>
        </div>

    </div>




  <a class="top-link hide" href="" id="js-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
    <span class="screen-reader-text">Back to top</span>
  </a>


</div>







  {{-- ||  OG CODE  || --}}




<div class="camps container">

    <div class="d-flex flex-row flex-wrap justify-content-center">




        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRIMARY</h1>
            <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top" background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\primary-43.jpg')}}"  alt="PRIMARY">

                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">July 4 - 9</p>
                    <p>Grades 2, 3, 4</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="/register" class="stretched-link">Registration</a>
                    {{-- <p>$320</p> --}}
                    </div>
                </div>
            </div>
        </div>


        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRETEEN</h1>
            <div class="card mb-4 shadow-sm">
                <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\preteen1-43-resized.jpg')}}"  alt="PRETEEN ">

                <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text">July 11 - 16</p>
                        <p>Grades 4, 5, 6</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <a href="/register" class="stretched-link">Registration</a>
                        {{-- <p>$315</p> --}}
                        </div>
                </div>
            </div>
        </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">JR HIGH</h1>
            <div class="card mb-4 shadow-sm">
              <img class="img-fluid card-img-top" background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\jr high 1.jpg')}}"  alt="JR HIGH">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">July 18 - 23</p>
                    <p>Grades 7, 8, 9</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="/register" class="stretched-link">Registration</a>
                    {{-- <p>$315</p> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRE-TEEN 2</h1>
            <div class="card mb-4 shadow-sm">
                <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\preteen-43.jpg')}}" alt="Fun in the sand">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">July 26 - 31</p>
                    <p>Grades 4, 5, 6</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="/register" class="stretched-link">Registration</a>
                    <p>$315</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
            <h1 class="display-4 mx-auto text-center">PRIMARY</h1>
            <div class="card mb-4 shadow-sm">
                <img class="img-fluid card-img-top"  background="#55595c" color="#eceeef"  text="Thumbnail"src="{{ asset('Photos2019\primary-43.jpg')}}" alt="Fun in the sand">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">August 3 - 7</p>
                    <p>Grades 2, 3, 4</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="/register" class="stretched-link">Registration</a>
                    <p>$290</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-tilt data-tilt-scale="1.1" data-tilt-max="3" class="d-flex flex-column">
                <h1 class="display-4 mx-auto text-center">JUNIOR HIGH 2</h1>
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
        </div> --}}
</div>
</div>




  {{-- @include('inlineContact') --}}





  <div class="container-fluid padding py-5">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">Did you know?</h1>
        <hr>
        <div class="col-12">
        <p class="lead">Pleasantview Bible Camp is an extension of First Baptist Church in Lloydminster, Alberta.
        <br>
        <br>
        <a href="http://www.fbclloyd.ca" ><button type="button" class="btn btn-primary btn-lg">FBC Lloyd Website</button></a>
        </div>
      </div>
    </div>
  </div>



  @endsection



  {{-- || OLD CODE || --}}


{{-- <div class="album py-5 bg-light">
  <div class="container-fluid">

    <div class="row">

      <div class="col-md-4">
          <div class="flex-grow bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <h1 class="display-4 mx-auto text-center">SR HIGH</h1>
          </div>
        <div class="card mb-4 shadow-sm">
          <img src="{{ asset('images\wide-games.jpg')}}"  alt="Sr High games">
          <div class="card-body">
            <p class="card-text">Paintball, Pool Parties and pleanty of pranks will keep the campers preoccupied from their digital devices for the week or your money back.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>




      <div class="col-md-4">
          <div class="flex-grow bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">  </div>
              <h1 class="display-4 mx-auto text-center">SR HIGH</h1>
        <div class="card mb-4 shadow-sm">
            <img src="{{ asset('images\archery-portrait.jpeg')}}"  alt="Jr High Archery">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %}
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}



    {{-- <div class="justify-content-center d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class=" flex-grow bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="position-relative my-3 py-3">
            <h2 class="display-5">SR HIGH</h2>
            <p class="lead">And an even wittier subheading.</p>
            <img class="camps-photo position-absolute" src="{{ asset('images\wide-games.jpg')}}"  alt="Sr High games">
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>

        </div>
        <div class="flex-grow bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">

          </div>
        </div>
        <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
      </div> --}}


      {{-- || DIFFERENT COLOR SAMPLES || --}}

{{-- {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %} --}}

{{-- {% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" %} --}}




{{--
              <p class="display-4">STAND FIRM IN THE FAITH</p>
              <p class="text-right"> 1 Corinthians 16 : 13-14</p> --}}



{{-- <section class="main">
<div class="landing-video embed-responsive embed-responsive-16by9">
    <video id="video_background" playsinline="playsinline"  muted="muted" preload="true" loop="loop">
        <source src="{{ asset('video\Camp2020landing_x264_001.mp4')}}" alt="Having Fun at Plesantview Bible Camp" type="video/mp4">
      </video>
  </div> --}}


  {{-- <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto">
            <p class="display-4">STAND FIRM IN THE FAITH</p>
            <p class="text-right"> 1 Corinthians 16 : 13-14</p>
        </div>
      </div>
    </div>
  </section> --}}

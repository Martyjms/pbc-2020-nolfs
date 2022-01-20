@extends('layout')



@section('content')
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
        <img class="img-fluid" src="{{asset('Photos2019\pool.jpg')}}" alt="pool fence" />
          <br>
          <br>
        <h1 class="display-4">Registration</h1>
        <hr class="container">
        <br>
            <div class="col-12">
            {{-- <p class="lead">More info coming soon!</p> --}}

            </div>
        </div>
    </div>

    <div class="container-fluid padding py-5">
        <div class="row welcome text-center">
          <div class="col-12">
            <h1 class="display-4">Registration Opens January 24 at 9:00 a.m.</h1>
            <hr>
          </div>
        </div>
      </div>

{{-- Day Camps --}}

    <div class="camps container">

        <div class="d-flex flex-row  justify-content-center">


                <div   class="d-flex register-flex-column">
                    <div class="borderless card mb-4">
                        <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\2022 Camp Registration.jpg')}}"  alt="Kids Camp Information">
                        <a href="https://pleasantviewcamp.campbrainregistration.com/">
                            <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\2022 Register Kids Button.jpg')}}"  alt="Register now button">
                        </a>
                    </div>
                </div>
                <div   class="d-flex register-flex-column">
                  <div class="borderless card mb-4">
                      <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\2022 Family Day Camps.jpg')}}"  alt="Kids Camp Information">
                      <a href="https://pleasantviewcamp.campbrainregistration.com/">
                          <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\2022 Register Family Day Camps Button.jpg')}}"  alt="Register now button">
                      </a>
                  </div>
              </div>

        </div>
    </div>


    {{-- <div class="camps container">

        <div class="d-flex flex-row  justify-content-center">

                <div   class="d-flex register-flex-column">
                    <div class="borderless card mb-4">
                        <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\KidsInfo_day+overnight_resized.png')}}"  alt="Kids Camp Information">
                        <a href="https://pleasantviewcamp.campbrainregistration.com/">
                            <img class="img-fluid card-img-top"   text="Thumbnail"src="{{ asset('images\ButtonRegisterNow.png')}}"  alt="Register now button">
                        </a>
                    </div>
                </div>

        </div>
    </div> --}}



</div>

        @endsection

        {{-- <div>
          <p class="lead">We are looking forward to another awesome year of camp and we would love for you to be a part of it!</p>
          <hr class="light">
        </div>
        <div class="col-12">
            <p class="lead">REGISTRATION FORMS CAN BE PRINTED FROM THE LINK BELOW OR PICKED UP AT THE CHURCH OFFICE</p>
            <a  href="{{asset('pdf\PBC 2020 Registration Forms.pdf')}}" download>2020 Camper Registration Forms</a>
            <hr class="light">
          </div>
      </div>
    </div>
  </div> --}}

  {{-- ||  Two Column Section || --}}

  {{-- <div class="container-fluid padding">
    <div class="row padding text-center">
      <div >
        <br>
      </div>
      <div class="mx-auto">
        <h2>2020 Summer Camp Schedule</h2>
        <hr>
        <p>SR HIGH - JULY 5-11</p>
        <p> PRE-TEEN 1 - JULY 12-17</p>
        <p> JUNIOR HIGH 1 - JULY 19-24</p>
        <p> PRE-TEEN 2 - JULY 26-31</p>
        <p> PRIMARY - AUGUST 3-7</p>
        <p> JUNIOR HIGH 2 - AUGUST 9-14</p>
      </div>
    </div>
  </div>


  <div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="px-5 text-center">
        <h5>Please note that the camps are based on which grade you are entering in the fall of 2020. If you have any questions in regards to camp or registration, please contact us at (306) 825-2461.</h5>
        </div>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="row padding text-center">
      <div >
        <br>
      </div>
      <div class="mx-auto">
        <h2>2020 Camp Fees</h2>
        <hr>
        <p>SR HIGH (Grades 10, 11, 12) - $320</p>
        <p>JR HIGH (Grades 7, 8, 9) - $315</p>
        <p>PRETEEN (Grades 4, 5, 6) - $315</p>
        <p>PRIMARY (Grades 2, 3, 4) - $290</p>

      </div>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
          <br>
        <h1 class="display-4"></h1>
        <hr>
        <br>
        <div class="col-12">
          <p class="lead">For families that have three or more campers registered, there is a 50% fee reduction for the third camper and every camper thereafter</p>
          <br>
          <hr class="light">
          <br>
        <h5>If you require financial assistance please contact us for more information</h5>
        <br>
        <hr class="light">
        <br>
        <h5>Senior High campers who are participating in paintball need to complete the following waiver form as well:</h5>
        <br>
        <li class="list-group-item"><a href="{{asset('pdf/paintball_waiver.pdf')}}" download>Paintball Waiver</a></li>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-4"> --}}


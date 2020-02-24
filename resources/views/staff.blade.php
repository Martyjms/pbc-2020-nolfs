@extends('layout')

@section('content')


<div class="container">
    <div class="row welcome text-center">
      <div class="col-12">

        <h1 class="display-4">Staff</h1>
        <hr>
        <br>

          <p class="lead">Working at Pleasantview Bible Camp is an amazing way to spend your summer! If you are interested in working at camp, please click on the links below to download the staff application forms. If you have not filled out the FBC volunteer application, you will also need to complete that along with any attached reference forms.</p>
          <p id="due-dates">Staff application forms due April 1</p>
        </div>
      </div>



  <div class="container-fluid padding">
  <div class="row padding ">
        <div class="col-lg-6 p-5 ">
                <img src="{{asset('Photos2019\campfire.43.jpg')}}" class="img-fluid" alt="">
          </div>
  <ul class="list-group ml-n4 col-lg-6 p-5">
        <h3 class="text-center">PBC Staff Application Forms</h3>
        <li class="list-group-item"><a href="{{asset('pdf/FBC MINISTRY APPLICATION FORM - PLEASANTVIEW BIBLE CAMP 2020.pdf')}}" download>FBC Ministry Application Form - PBC 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - PLEASANTVIEW BIBLE CAMP 2020.pdf')}}" download>FBC Ministry Application Form - Adult 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - YOUTH 2020.pdf')}}" download>FBC Ministry Application Form - Youth 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC VOLUNTEER COVENANT 2020.pdf')}}" download>FBC Volunteer Covenant 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\PBC REFERENCE FORM 2020.pdf')}}" download>PBC Reference Form 2020</a></li>
      </ul>

    </div>
</div>
</div>


<div class="container">
        <div class="row welcome text-center">
                <div class="col-12">
                <h1 class="display-4">LIT Program</h1>
                <hr>
                <br>
                <p class="lead">The Leader in Training (LIT) program is the first step toward becoming a full time staff member at Pleasantview. It is an awesome program that is designed for teens who will be 15 or older in 2020, who are eager for christ-centered discipleship and have a desire to learn more about camp ministry!</p>
                <p class="lead">The LIT program runs during the Preteen 1 and Junior High 1 weeks of camp (July 12-17, July 19-24), after which you will serve at camp for at least one of the following three weeks. The program will not only challenge you in your personal relationship with Christ, but will also equip you to become an effective camp staff member so that you can impact the lives of others!</p>
                <p class="lead">The cost of the program is $310, which is due upon acceptance of your application. This fee covers everything including accommodations, food, and study materials. Please note that space is limited, so please apply soon!</p>
                <p class="lead">Please click on the links below to download the lit application forms. If you have not filled out the FBC volunteer application, you will also need to complete that along with the attached reference forms​.</p>
                <p id="due-dates">LIT application forms due April 1</p>
                </div>
            </div>

            <div class="container-fluid padding">
                <div class="row padding ">
                      <div class="col-lg-6 p-5 ">
                              <img src="{{asset('Photos2019\IMG_7120-light.jpg')}}" class="img-fluid" alt="">
                        </div>
  <ul class="list-group  col-sm-7 col-m-6 col-lg-5 col-xl-4">
        <h3 class="text-center">LIT Application Forms</h3>
        <li class="list-group-item"><a  href="{{asset('pdf\PBC LEADER IN TRAINING (LIT) APPLICATION 2020.docx.pdf')}}" download>PBC LIT Application Form 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - YOUTH 2020.pdf')}}" download>FBC Ministry Application Form - Youth 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC VOLUNTEER COVENANT 2020.pdf')}}" download>FBC Volunteer Covenant 2020</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\PBC REFERENCE FORM 2020.pdf')}}" download>PBC Reference Form 2020</a></li>
      </ul>

    </div>
</div>
</div>

  @endsection




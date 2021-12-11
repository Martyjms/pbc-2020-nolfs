@extends('layout')

@section('content')


<div class="container">
    <div class="row welcome text-center">
      <div class="col-12">

        <h1 class="display-4">Staff</h1>
        <hr>
        <br>

          <p class="lead">Working at Pleasantview Bible Camp is an amazing way to spend your summer! If you are interested in working at camp please click below to begin your application online.</p>
          <p id="due-dates">Staff application due April 1/22</p>
        </div>
      </div>



  <div class="container-fluid padding">
  <div class="row padding ">
        <div class="col-lg-6 p-5 ">
                <img src="{{asset('public\images\PBCStaff2021.jpg')}}" class="img-fluid" alt="">
          </div>
  <ul class="list-group ml-n4 col-lg-6 p-5">
        <h3 class="text-center">PBC Staff Application Forms</h3>
        <p>Applications open Dec 15 2021</p>
        {{-- <li class="list-group-item"><a href="{{asset('pdf/FBC MINISTRY APPLICATION FORM - PBC 2021.pdf')}}" download>FBC Ministry Application Form - PBC 2021</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - ADULT 2020.pdf')}}" download>FBC Ministry Application Form - Adult 2021</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - YOUTH 2020.pdf')}}" download>FBC Ministry Application Form - Youth 2021</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\Pleasantview Bible Camp Staff Covenant- 2021.pdf')}}" download>PBC Staff Covenant 2021</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\FBC VOLUNTEER COVENANT 2020.pdf')}}" download>FBC Volunteer Covenant 2021</a></li>
        <li class="list-group-item"><a href="{{asset('pdf\PBC REFERENCE FORM 2021.pdf')}}" download>PBC Reference Form 2021</a></li> --}}
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
                <h1>Who is LIT for?</h1>
                <p class="lead">This program is for anyone who is ready to let God use them to do amazing things at Pleasantview this summer! We are looking for passionate people who care for kids, are team orientated, are willing to stay up late, get up early, and use their gifts to share the gospel. It is at camp that future LIT’s (that’s you!) will find community, grow in your faith, and develop new skills. If a summer filled with friendship, ministry, laughter, and growth in your relationship with God, sounds good… then this is the place for you!</p>
                <div class="lead">Applicants must be at least 15 and going into grade 10 in 2022.</div>
                <br>
                <h1>What is LIT all about?</h1>
                <div class="lead">This is a discipleship program that will challenge you and help you discover what it means to follow Jesus and how to use your giftings to serve others. You will grow and develop through Bible studies, team building, training sessions, service opportunities, and awesome community. LIT is about growing closer to the Lord, and learning how to share the gospel with others, while also getting to have fun and spending your summer making a difference.</div>
                <div class="lead">During the two LIT weeks of training, you will have the opportunity to serve in the different areas of camp.</div>
                <br>
                <h1>When does LIT run?</h1>
                <div class="lead">If you would like to participate in this program, you must be willing to dedicate at least four weeks of your summer to camp. The four weeks will include June 26-30* (Staff Training), July 10-15 (LIT Week 1), July 17-22 (LIT Week 2), and at least one of the following weeks: July 24-29/Aug 1-5/Aug 7-12. The two LIT weeks are specifically dedicated to studying God’s Word and learning about Camp Ministry.
                <p>*The exact dates for staff training may change but will fall within this time period</p>
                </div>

                <br>
                <h1>How much does LIT cost?</h1>
                <div class="lead">The LIT Program costs a total of $325, which is due upon acceptance of your application. This covers everything including accommodations, food, and study materials for your LIT weeks.
                    <p>If LITs would like to have tuck during their 2 training weeks, they can contribute up to $5/day (LITs will receive $12.50 for tuck on weeks they are voulnteering)</p>
                </div>
                <br>
                <h1>How do I join LIT?</h1>
                <div class="lead">If you are interested in applying click below to begin your application. Remember, space in the program is limited, so complete your application and return it to us as soon as possible. Applications are due by April 1, 2022.</div>
                <br>
                <div class="container">
                    <div class="row welcome text-center">
                      <div class="col-12">
                <div class="lead">If you have any questions about being staff or an LIT at camp, please contact Kenton Giesbrecht, LIT Director,
                    at (780) 871-2129 (call or text) or email
                    <p>text-transform: lowercase<span>kenton@fbclloyd.ca</span></p>
                    </div>
                      <p>If you have any questions about the application process, please contact the camp office at (306) 825 2461,
                        <p>text-transform: lowercase<span>info@pleasantviewcamp.org</span></p></p>
                   </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    <br>
                    <br>


            {{-- <div class="container-fluid padding">
                        <div class="row padding ">
                            <div class="col-lg-6 p-5 ">
                                    <img src="{{asset('Photos2019\IMG_7120-light.jpg')}}" class="img-fluid" alt="">
                                </div>
            <ul class="list-group  col-sm-7 col-m-6 col-lg-5 col-xl-4">
                <h1 class="text-center">LIT Application Forms</h1>
                <li class="list-group-item"><a  href="{{asset('pdf\PBC LEADER IN TRAINING (LIT) APPLICATION 2021.pdf')}}" download>PBC LIT Application Form 2021</a></li>
                <li class="list-group-item"><a href="{{asset('pdf\FBC MINISTRY APPLICATION FORM - YOUTH 2020.pdf')}}" download>FBC Ministry Application Form - Youth 2021</a></li>
                <li class="list-group-item"><a href="{{asset('pdf\FBC VOLUNTEER COVENANT 2020.pdf')}}" download>FBC Volunteer Covenant 2021</a></li>
                <li class="list-group-item"><a href="{{asset('pdf\PBC REFERENCE FORM 2021.pdf')}}" download>PBC Reference Form 2021</a></li>
            </ul>

            </div>
            </div> --}}
</div>

  @endsection




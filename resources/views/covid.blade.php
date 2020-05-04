@extends('layout')

@section('content')
    {{-- ||  Two Column Section || --}}

  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class=" col-lg-6">


        <h2>COVID-19 UPDATE: May 4th 2020
        </h2>
        <p class="lead">Hello Parents and Campers,
            It has been a very difficult few weeks here at Pleasantview, with many changes
            happening. Due to Covid-19 and the restrictions placed on us as a camp, it is with
            much regret that I am announcing that we are cancelling all regular summer camp
            programs for this summer. This decision was made with many factors in mind,
            and especially with the health & safety of our campers and staff at the forefront.</p>
        <p class="lead">We had hoped that restrictions would have been lifted sooner, but because
            camps are in phase 4 of the reopen Saskatchewan plan, the reality is that this is
            not possible. We are considering some alternate camp activities that the campers
            can participate in from their homes. We will keep you posted.</p>
        <p class="lead">We hope you continue to stand firm in your faith. We will miss seeing your faces
            but look forward to sharing all the new things we have in store for camp in 2021.
            Our plan is to run camps as usual next summer, so I would encourage you to apply
            in early January next year to reserve your spot.</p>
        <p class="lead">Within the next weeks we will be reimbursing all registrations and tuck fees.
            Thank you for your patience as this process will take time.</p>
        <p class="lead">Thank you for your support and understanding. If you have any further questions
            please don’t hesitate to contact me. Till then we look forward to seeing you next
            summer.
            Sincerely,
            Kenton Giesbrecht,
            Camp Director</p>

        <br>

      </div>
      <div class="col-lg-6">
      <img src="{{asset('images\kenton-3.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="row mx-auto ">
  <div class="col-lg-6">
    <img src="{{asset('images\kenton-2.jpg')}}" class="img-fluid" alt="">
    </div>


  </div>

  <hr class="my-4">
@endsection

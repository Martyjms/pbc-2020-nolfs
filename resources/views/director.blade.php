@extends('layout')

@section('content')
    {{-- ||  Two Column Section || --}}

  <div class="container-fluid padding">
    <div class="row padding text-center">
      <div class=" col-lg-6">


        <h2>KENTON GIESBRECHT
        </h2>
        <p class="lead">Born in Manitoba, Kenton is a die-hard Jets fan! He moved to Lloydminster in 1983 and has been involved at First Baptist Church ever since. Kenton is happily married to Sandi, who he met at bible camp when he was younger. They have four children and 17 grandchildren.</p>
        <p class="lead">Kenton has a huge heart for camp ministry and has been the director at Pleasantview ever since 2010. His favorite camp activity is horsemanship and he also has some amazing headstand skills!</p>

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

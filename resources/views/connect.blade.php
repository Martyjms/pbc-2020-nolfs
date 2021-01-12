
@extends('layout')



@section('content')




{{-- || Welcome Section || --}}

<div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">Did you know?</h1>
        <hr>
        <div class="col-12">
          <p class="lead">Pleasantview Bible Camp is owned and operated by First Baptist Chruch in Lloydminster, Alberta.<br>  So you don't have to wait until next summer to see your friends and cabin leaders again.<br>  At FBC there's fun for the the whole family so bring your parents too!  </p>
          <a href="/connect"><button type="button" class="btn btn-primary btn-lg">Learn More</button></a>
        </div>
      </div>
    </div>
  </div>

  {{-- || Three Column Section || --}}

  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-code"></i>
          <h3>Children's Ministry</h3>
          <p>PBC 2021 | Stand Firm</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="fas fa-bold"></i>
            <h3>Youth Groups</h3>
            <p>PBC 2021 | Stand Firm</p>
        </div>
        <div class=" col-md-4">
            <i class="fas fa-paint-roller"></i>
              <h3>Young Adults</h3>
              <p>PBC 2021 | Stand Firm</p>
          </div>
          <div class=" col-md-4">
            <i class="fas fa-paint-roller"></i>
              <h3>Sunday Morning Services</h3>
              <p>PBC 2021 | Stand Firm</p>
          </div>
    </div>
    <hr class="my-4">
  </div>


  @endsection

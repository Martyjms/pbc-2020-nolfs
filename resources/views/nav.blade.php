

{{-- <div id="top-info"><strong>Registration begins January 21st 2020!</strong></div> --}}

<nav class="navbar navbar-light navbar-expand-lg bg-light justify-content-lg-center justify-content-start sticky-top nav-scrolled">
        <a class="navbar-brand  d-inline" href="/"><img img-fluid src="{{ asset('images\Camp_Logo_small.png')}}"  alt="Camp Logo"></a>
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="/parents">For Parents
                      <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                      {{-- <a href="" class="dropdown-item">Dates & Rates</a>
                      <div class="dropdown-divider"></div> --}}
                      <a href="/map" class="dropdown-item">Contact & Directions</a>
                      <div class="dropdown-divider"></div>
                      <a href="/speakers" class="dropdown-item">Camp Speakers</a>
                      <div class="dropdown-divider"></div>
                      <a href="/register" class="dropdown-item">Registration</a>
                      <div class="dropdown-divider"></div>
                      <a href="/director" class="dropdown-item">Meet the Director</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="/parents">For Campers
                      <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                      <a href="/activities" class="dropdown-item">Activities</a>
                      <div class="dropdown-divider"></div>
                      <a href="album" class="dropdown-item">Photo Album</a>
                      <div class="dropdown-divider"></div>
                      <a href="highlightVideo" class="dropdown-item">Highlight Videos</a>
                      <div class="dropdown-divider"></div>
                      <a href="register" class="dropdown-item">Registration</a>
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a href="/director" class="dropdown-item">Meet the Director</a> --}}
                    </div>
                </li>
                <li class="nav-item  my-auto">
                        <a class="nav-link navbar-brand mx-0 d-none d-md-inline" href="/"><img img-fluid src="{{ asset('images\Camp_Logo_small.png')}}"  alt="Camp Logo"></a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="staff">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                    <li class="nav-item"><a class="nav-link" target="_blank" rel="noopener" href="https://www.facebook.com/PleasantviewBibleCamp/"><i class="fab fa-facebook mr-1"></i></a> </li>
                    <li class="nav-item"><a class="nav-link" target="_blank" rel="noopener" href="https://www.instagram.com/pleasantviewbiblecamp/"><i class="fab fa-instagram mr-1"></i></a> </li>
                    <li class="nav-item"><a class="nav-link" target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCI40AiQBZ1HZNHyGjslay6g"><i class="fab fa-youtube"></i></a> </li>
                </ul>

    </div>
</nav>






{{-- Backup incase new code doesn't work --}}









{{-- OG NAV --}}

{{-- <div id="top-info"><strong>Registration begins January 21st 2020!</strong></div>

<nav class="navbar navbar-expand-lg  sticky-top p-0 m-0 navbar-light bg-light">
<div class="container-fluid  justify-content-center p-0">

  <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
</button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
            <hr class="light mobile">
          <li class="nav-item ">
              <a class="nav-link " href="/">Home</a>
          </li>
          <hr class="light mobile">
          <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="/parents">Parents
                <span class="caret"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown_target">
                <a href="" class="dropdown-item">Dates & Rates</a>
                <div class="dropdown-divider"></div>
                <a href="/map" class="dropdown-item">Location & Directions</a>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">A Typical Day at Pleasantview</a>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">Registration</a>
                <div class="dropdown-divider"></div>
                <a href="/director" class="dropdown-item">Meet the Director</a>
              </div>
          </li>
          <hr class="light mobile">
          <li class="nav-item ">
              <a class="nav-link " href="#">Campers</a>
          </li>
          <hr class="light mobile">
      </ul>
    </div>
    <div class="showUp">
      <ul class="navbar-nav  m-0 p-0" >
          <a href="/"><img id="logo-short" class='nav-link' src="{{ asset('images\Camp_Logo_Resized.png')}}"  alt="Camp Logo"></a>
      </ul>
    </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#">Rates</a>
          </li>
          <hr class="light mobile">
          <li class="nav-item">
              <a class="nav-link" href="/staff">Staff</a>
          </li>
          <hr class="light mobile">
          <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
          </li>
          <hr class="light mobile">
      </ul>
    </div>
  </div>
</nav> --}}







{{--
      <ul class="nav nav-pills py-3 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Parents</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Registration Forms</a>
            <a class="dropdown-item" href="#">Directions</a>
            <a class="dropdown-item" href="#">PBC Statement of Faith</a>
            <a class="dropdown-item" href="/about">About PBC</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/contact">Contact Us</a>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Campers</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Registration Forms</a>
              <a class="dropdown-item" href="#">Directions</a>
              <a class="dropdown-item" href="#">PBC Statement of Faith</a>
              <a class="dropdown-item" href="/about">About PBC</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/contact">Contact Us</a>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>

          <li id='logo' class="nav-item" class="navbar-inner">
            <img class='nav-link' src="{{ asset('images\Camp Logo.png')}}" class="iconos" alt="Camp Logo">
          </li>

        <li class="nav-item">
          <a class="nav-link" href="/customers">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    --}}

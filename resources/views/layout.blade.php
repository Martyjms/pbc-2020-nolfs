<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <title>@yield('title', 'PBC 2020')</title>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - -
    Website built and maintained by Marty Pennington of Pennington Images
    penningtonimages@gmail.com
    639 - 840 - 2809
- - - - - - - - - - - - - - - - - - - - - - - - - -  -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/28f78f5de2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/loading.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/navstyle.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />







    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Open+Sans:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/uih3aou.css">

    {{-- @stack('styles') --}}

</head>
<body>
    <div>

    @include('nav')



    @yield('content')



    @include('foot')
    </div>

    <!-- Optional JavaScript -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{ asset('js/main.js')}}"></script>

<script src="{{ asset('js/loading.js')}}"></script>




{{-- <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jul 5, 2020 17:30:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Summer is here!";
          }
        }, 1000);
        </script> --}}


<script>
// {{-- // Set a variable for our button element. --}}
const scrollToTopButton = document.getElementById('js-top');

// {{-- // Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window. --}}
const scrollFunc = () => {
  // Get the current scroll value
  let y = window.scrollY;

  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
  if (y > 0) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;

  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 20);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function(e) {
  e.preventDefault();
  scrollToTop();
}
</script>

<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/lightbox-plus-jquery.js') }}" ></script>

<script  type="text/javascript" src="{{ asset('js/tilt.jquery.js') }}"></script>

<script  type="text/javascript" src="{{ asset('js/intersection-observer.js') }}"></script>
{{-- @stack('scripts') --}}
</body>
</html>

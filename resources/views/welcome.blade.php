<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viho</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size: 16px;}
        img {margin-bottom: -8px;}
        .mySlides {display: none;}
        </style>
    </head>
    <body class="w3-content w3-black" style="max-width:1500px;">

      {{-- LINK LOGIN --}}
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
          <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>VIHO</b>Workshop System</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
              {{-- LINK LOGIN --}}
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                                @endif
                            @endauth
                    @endif
            </div>
          </div>
        </div>



        <!-- Header with Slideshow -->
        <header class="w3-display-container w3-center">
        <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button>
        <div class="mySlides w3-animate-opacity">
          <img class="w3-image" src="images/event1.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">


          <div class="w3-display-left w3-padding w3-hide-small" style="width:40%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
              <h1 class="w3-large">Upload Bukti Pembayaran?</h1>
              <hr class="w3-opacity">
              <form action="{{ route('Public.Trans.Cek') }}" method="post">
                <p>
                  <input class="w3-input" type="email" name="email" placeholder="email" value="">
                </p>
                <p>
                  <input class="w3-input" type="text" name="no_nota" placeholder="nomer invoice" value="">
                </p>
                <p>
                  <input class="w3-button w3-blue w3-right" type="submit" name="submit" value="Masukan">
                </p>
                <br>
                <br>
                {{ csrf_field() }}
              </form>
              @isset($error_upload)
                Periksa kembali nomor invoice dan email yang anda masukan
              @endisset
              {{-- @if ($error_upload)
                Periksa kembali nomor invoice dan email yang anda masukan
              @endif --}}
              {{-- <p>Mengorganisir Tiket Seminar dan data peserta</p> --}}
            </div>
          </div>
        </div>
        <div class="mySlides w3-animate-opacity">
          <img class="w3-image" src="images/event2.jpg" alt="Image 2" style="min-width:500px" width="1500" height="1000">
          <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
              <h1 class="w3-xlarge w3-text-red">Workshop</h1>
              <hr class="w3-opacity">
              <p>Choose from thousands of features</p>
            </div>
          </div>
        </div>
        <div class="mySlides w3-animate-opacity">
          <img class="w3-image" src="images/event3.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
          <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
              <h1 class="w3-xlarge">Seminar</h1>
              <hr class="w3-opacity">
              <p>Customize photos as you go</p>
            </div>
          </div>
        </div>
        <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Next <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Next <i class="fa fa-angle-right"></i></a>
        </header>



        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
        <div class="w3-section">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p class="w3-medium">Copyright Viho 2018 </p>
        </footer>

        <script>
        // Slideshow
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
        }
        </script>

    </body>
</html>

<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey" @yield('body')>


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

<!-- BAGIAN ATAS - Top container -->
<div class="w3-teal w3-bar w3-top w3-large" style="z-index:4">
  {{-- <span class="w3-bar-item w3-left">VIHO Workshop System</span> --}}
  <a class="w3-button w3-left" href="{{ url('/home') }}">
      {{ config('app.name', 'Laravel') }}
  </a>
{{-- <div class="w3-dropdown-hover w3-right">
  <button class="w3-button"><i class="fa fa-bars"></i>  Menu</button>
<div class="w3-dropdown-content w3-bar-block w3-border">

  <a class="w3-bar-item w3-button" href="{{ route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
</div>

</div> --}}

<a class="w3-bar-item w3-button w3-right" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
<a href="{{ route('Profile.Edit') }}" class="w3-bar-item w3-button w3-right">Profile</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
<label class="w3-bar-item w3-right">Halo,   {{ Auth::user()->name }}</label>
{{--
<div class="w3-container">
  <h2>Dropdown Button</h2>
  <p>Move the mouse over the button to open the dropdown content.</p>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-black">Hover Over Me!</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div> --}}

</div>



<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;" id="mySidebar"><br>
  {{-- <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>@yield('nama_user')</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i><label>  Profile Setting</label></a>
    </div>
  </div>
  <hr> --}}
  {{-- <div class="w3-container">
    <h5>@yield('nama_halaman')</h5>
  </div> --}}
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{ route('Home_Default') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Home</a>
    {{-- <a href="{{ route('Dashboard_Default') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a> --}}
    <a href="{{ route('Event_Default') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-paint-brush fa-fw"></i>   Event</a>
    <a href="{{ route('Ticket_Default') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-ticket fa-fw"></i>  Ticket</a>
    <a href="{{ route('Affiliate_Default') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Affiliate</a>
    @yield('side_navigation')
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">

    <h5><b><i class="fa fa-dashboard"></i> @yield('nama_halaman')</b></h5>
  </header>

@yield('content')
<br><br><br><br>
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-teal w3-bottom">
    Copyright Viho Workshop System 2018
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>

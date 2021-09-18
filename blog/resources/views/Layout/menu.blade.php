 <!-- Navbar start -->
 <nav class="navbar fixed-top nav-before navbar-expand-lg navbar-light bg-light">

    <!-- sidebar start-->

    <span class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    </span>

    <!-- sidebar end -->


    <a class="navbar-brand" href="#"><img class="nav-logo" src="image/Logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link nav-font" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="#map">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="#quiz">Learn Quran </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="#lquran">Quiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="#contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ url('/signup') }}" class="normal-btn btn">Sign Up</a>
        </form>
    </div>
</nav>
<!-- Navbar End -->

<span class="w3-sidebar w3-bar-block w3-border-right" style="display:none;margin-top: 70px;" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    <a href="prayertime.html" class="w3-bar-item w3-button">Time</a>
    <a href="converter.html" class="w3-bar-item w3-button">Converter</a>
    <a href="quran.html" class="w3-bar-item w3-button">Find Surah</a>
    <a href="hadith.html" class="w3-bar-item w3-button">Find Hadith Book</a>
    <a href="quiz.html" class="w3-bar-item w3-button">Quiz</a>
    <a href="audio.html" class="w3-bar-item w3-button">Audio Quran</a>
</span>

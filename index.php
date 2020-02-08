<?php
if(!isset($_GET['preview'])){
  include 'comingsoon.php'; die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Playfair+Display:900i,400&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

    <title>Coming soon &middot; Together for Knowledge</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">
    <img src="tfk-logo-black.png" height="60" alt="Together for Knowledge" class="logo invert">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About the competition</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rules">Rules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
    </ul>
  </div>
</nav>

    <header class="videoHeader">

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="aurora.mp4" type="video/mp4">
  </video>
  <div class="container h-100">

    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">

        <h1 class="display-3 accent">Share your passion.</h1>
        <p class="lead mb-0">Record a video and prove yourself as a science communicator.<br><br></p>
        <a href="/" class="btn btn-primary">Find out more</a>
      </div>
    </div>
  </div>
</header>

  <div class="pushdown container">
    <h1>Three steps.</h1>
    <div class="row pushdown">
      <div class="col-md-6">
        <img src="video.jpg" style="max-width: 450px;" class="pushleft border-fancy">
      </div>
      <div class="col-md-6">
        <h1 class="accent primary">1</h1>
        <h1>Record a video</h1>
        <p>Pick a topic in science and research it. Then, record a video presenting the topic and apply it to the competition online.</p>
      </div>
    </div>
    <div class="row pushdown">
      <div class="col-md-6">
        <img src="performance.jpg" style="max-width: 450px;" class="border-fancy pushleft">
      </div>
      <div class="col-md-6">
        <h1 class="accent primary">2</h1>
        <h1>Perform your presentation live</h1>
        <p>In the finale, the best applicants present their presentations live in front of other applicants, an audience and our expert jury.</p>
      </div>
    </div>    
     <div class="row pushdown">
      <div class="col-md-6">
        <img src="win.jpg" style="max-width: 450px;" class="pushleft border-fancy">
      </div>
      <div class="col-md-6">
        <h1 class="accent primary">3</h1>
        <h1>Win</h1>
        <p>At the end of the competition, we'll announce and award the best applicants.</p>
      </div>
    </div>    
  </div>

<div class="gray pushmargindown">
  <div class="container">
  <h2>Show your ability to <span class="accent">transfer your knowledge</span> and explain demanding concepts.</h2>
  <p>Znamo da razumiješ znanstvene koncepte i složene, ali zanimljive stvari iz svijeta znanosti. Želimo nadahnuti i razviti mlade komunikatore znanosti.</p>

  <h1>Still in development.</h1>
  <p>We're still preparing for the public launch of TFK, so this website is heavily under development.</p>
  <p>Information presented here may not be accurate or reliable and the website itself isn't stable and fully functional yet.</p>
  <p>You can find out more about our work in the meantime by visiting the <a href="https://initiative.togetherforknowledge.eu">Together for Knowledge Initiative</a> website or the <a href="https://znanstvenikumeni.org">Znanstvenik u meni!</a> website (Croatian only)</p>
  <p>If you need to contact us, please email us at tfk@togetherforknowledge.eu</p>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
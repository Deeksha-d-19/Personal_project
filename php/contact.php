<?php
  include("dbconnect.php");
?>
<html>
<head>
  <title>Perceived Ideas</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<!----------------Navigation bar---------------->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="Deeksha.html"><img src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Deeksha.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.html">ABOUT ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quote.html">QUOTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>
<!------contact form------->
  <link rel="stylesheet" type="text/css" href="contact.css"><br>
    <div class="contact-title">
      <h1>Contact Us</h1>
      <h2>We are happy to hear from you!</h2>
    </div>
<div class="contact-form">
  <div class="container">
  <form action="user_process.php" class="contact-form" method="post" name="user">
    <input name="name" type="text" class="form-control" placeholder="Name" required><br>
    <input name="subject" type="text" class="form-control" placeholder="Subject" required><br>
    <input name="email" type="email" class="form-control" placeholder="Email" required><br>
    <textarea name="message" class="form-control" placeholder="Message" row="5" required></textarea><br>
    <input type="submit" class="form-control submit" value="Submit"><br>
  </form>
</div>
</div>
<!--------footer------->
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
          <a href="Deeksha.html">Perceived Ideas</a>.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="container">
            <p align="right"><span style='font-size:20px''right-align:20px;'>&#9993; :</span> deekshadb99@gmail.com<br><span style='font-size:20px;'>&#9990; :</span>+91-7019631592 </p>
          </div>
        </div>
</footer>
</body>
</html>

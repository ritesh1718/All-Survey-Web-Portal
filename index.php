
<?php
/*
session_start();
session_unset();
session_destroy();
header('Location: login.html');
exit();
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Survey Portal</title>

  <!-- Bootstrap 5 CSS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header & Nav -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-poll"></i> Survey Portal</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="about us.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="term policy.php">Terms Policy</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Image Slider -->
<!-- Image Slider START -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    
      <div class="carousel-item active">
        <img src="image/1.jpg" class="d-block w-100" alt="Online Survey">
        <div class="carousel-caption d-none d-md-block">
          <h5>Create Surveys Easily</h5>
          <p>Design and share customized surveys in minutes.</p>
        </div>
      </div>
  
      <div class="carousel-item">
        <img src="image/2.avif" class="d-block w-100" alt="Survey Feedback">
        <div class="carousel-caption d-none d-md-block">
          <h5>Collect Feedback</h5>
          <p>Engage users and understand opinions instantly.</p>
        </div>
      </div>
  
      <div class="carousel-item">
        <img src="image/4.jpg" class="d-block w-100" alt="Survey Analytics">
        <div class="carousel-caption d-none d-md-block">
          <h5>Analyze Results</h5>
          <p>Get real-time insights and decision-making data.</p>
        </div>
      </div>
  
    </div>
  
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- Image Slider END -->
  
<!-- Scrolling Text -->
<div class="marquee-text">
  <marquee behavior="scroll" direction="left">📢 Participate in the latest surveys and win rewards! | 📝 New features launching soon! | 📊 Check out our new insights and analytics dashboard!</marquee>
</div>

<!-- Icon Slider -->
<div class="icon-slider">
  <i class="fas fa-chart-pie"></i>
  <i class="fas fa-users"></i>
  <i class="fas fa-cogs"></i>
  <i class="fas fa-file-alt"></i>
  <i class="fas fa-lock"></i>
  <i class="fas fa-bell"></i>
  <i class="fas fa-envelope"></i>
</div>

<!-- Container with 1 Row & 3 Columns -->
<div class="container my-4">
  <div class="row text-center">
    <div class="col-md-4">
      <h4><i class="fas fa-user-plus"></i> Easy Registration</h4>
      <p>Sign up quickly and start taking or creating surveys.</p>
    </div>
    <div class="col-md-4">
      <h4><i class="fas fa-poll-h"></i> Create Surveys</h4>
      <p>Design surveys with multiple question types.</p>
    </div>
    <div class="col-md-4">
      <h4><i class="fas fa-chart-line"></i> View Results</h4>
      <p>Analyze responses with beautiful charts and graphs.</p>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <p>
    <a href="#">Contact</a> |
    <a href="#">About Us</a> |
    <a href="#">Terms Policy</a>
  </p>
  <p>&copy; 2025 Survey Portal. All rights reserved.</p>
</div>

<!-- Bootstrap + jQuery JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

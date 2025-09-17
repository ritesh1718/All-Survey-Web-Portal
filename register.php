<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survey Portal - Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="register.css">
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">📝 Survey Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Terms Policy</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    $('form').on('submit', function (e) {
      e.preventDefault(); // prevent default form submission

      let name = $('#username').val().trim();
      let email = $('#email').val().trim();
      let password = $('#password').val().trim();

      // Frontend validation
      if (name === '' || email === '' || password === '') {
        alert('Please fill all fields.');
        return;
      }

      // Simple email regex validation
      let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return;
      }

      // Send data via AJAX to PHP
      $.ajax({
        url: 'registerdb.php', // your PHP file
        type: 'POST',
        data: {
          full_name: name,
          email: email,
          password: password
        },
        success: function (response) {
          alert(response); // show server response
          $('form')[0].reset(); // clear form
        },
        error: function () {
          alert('Something went wrong. Try again later.');
        }
      });
    });
  });
</script>

<!-- Registration Form -->
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm p-4">
        <h3 class="text-center mb-4">Create Your Account</h3>
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your full name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Create Password</label>
            <input type="password" class="form-control" id="password" placeholder="Choose a password">
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3">
  <p>© 2025 Survey Portal | <a href="#" class="text-white text-decoration-underline">Contact</a> | 
     <a href="#" class="text-white text-decoration-underline">About Us</a> | 
     <a href="#" class="text-white text-decoration-underline">Terms Policy</a></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survey Portal - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
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
        <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Terms Policy</a></li>
      </ul>
    </div>
  </div>
</nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('form').on('submit', function (e) {
      e.preventDefault();

      let email = $('#email').val().trim();
      let password = $('#password').val().trim();

      if (email === '' || password === '') {
        alert('Please enter both email and password.');
        return;
      }

      $.ajax({
        url: 'logindb.php',
        type: 'POST',
        data: {
          email: email,
          password: password
        },
        success: function (response) {
          if (response === 'success') {
            window.location.href = 'dashboard.php'; // redirect
          } else {
            alert(response); // show error
          }
        },
        error: function () {
          alert('Login failed. Please try again.');
        }
      });
    });
  });
</script>

<!-- Login Form -->
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm p-4">
        <h3 class="text-center mb-4">Login to Your Account</h3>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3">
  <p>© 2025 Survey Portal | 
    <a href="#" class="text-white text-decoration-underline">Contact</a> | 
    <a href="#" class="text-white text-decoration-underline">About Us</a> | 
    <a href="#" class="text-white text-decoration-underline">Terms Policy</a>
  </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

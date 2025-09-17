<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

// For demonstration, setting dummy name/email
$surveyor_name = $_SESSION['name'] ?? "John Doe";
$surveyor_email = $_SESSION['email'] ?? "john@example.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Survey Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f3f3f3; }
    .survey-form-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-top: 20px;
    }
    fieldset { border: none; margin-bottom: 20px; }
    legend { font-size: 1.2em; font-weight: bold; margin-bottom: 10px; }
    label { margin-top: 10px; }
    .radio-group {
      display: flex;
      gap: 20px;
      margin-top: 10px;
    }
    .radio-group label {
      display: flex;
      align-items: center;
    }
  </style>
</head>
<body>

<div class="d-flex" id="dashboard-wrapper">

  <!-- Sidebar -->
  <nav class="sidebar bg-primary text-white p-4" style="min-width: 250px;">
    <h4 class="mb-4">Survey Portal</h4>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a class="nav-link text-white" href="#" onclick="showSection('profile')">👤 My Profile</a></li>
      <li class="nav-item mb-2"><a class="nav-link text-white" href="#" onclick="showSection('newSurvey')">📝 Create New Survey</a></li>
      <li class="nav-item mb-2"><a class="nav-link text-white" href="#" onclick="showSection('mySurveys')">📋 My Survey List</a></li>
      <li class="nav-item mt-5"><a class="nav-link text-danger" href="#">🚪 Logout</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="main-content p-4 w-100">

    <section id="profile">
      <h2>My Profile</h2>
      <p><strong>Name:</strong> <?= htmlspecialchars($surveyor_name) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($surveyor_email) ?></p>
    </section>

    <section id="newSurvey" style="display:none;">
      <div class="survey-form-container">
        <h2 class="text-center">Survey Form</h2>
       
        

    <h2 class="text-center">Create New Survey</h2>
    <form id="surveyForm">
      <label>Survey Title:</label>
      <input type="text" name="title" class="form-control" required>

      <label>Survey Type:</label>
      <input type="text" name="type" class="form-control" required>

      <label>Option 1:</label>
      <input type="text" name="option1" class="form-control" required>
      <label>Option 2:</label>
      <input type="text" name="option2" class="form-control" required>
      <label>Option 3:</label>
      <input type="text" name="option3" class="form-control" required>
      <label>Option 4:</label>
      <input type="text" name="option4" class="form-control" required>

      <button type="submit" class="btn btn-success mt-3">Submit Survey</button>
    </form>
    <div id="createdSurvey" class="mt-5" style="display:none;"></div>



      </div>
    </section>

    <section id="mySurveys" style="display:none;">
      <h2>My Survey List</h2>
      <ul class="list-group">
        <li class="list-group-item">Survey 1 - <span class="text-muted">10 responses</span></li>
        <li class="list-group-item">Survey 2 - <span class="text-muted">5 responses</span></li>
        <li class="list-group-item">Survey 3 - <span class="text-muted">No responses yet</span></li>
      </ul>
    </section>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#surveyForm').on('submit', function(e) {
  e.preventDefault();
  $.ajax({
    url: 'submit_survey.php',
    type: 'POST',
    data: $(this).serialize(),
    success: function(response) {
      const res = JSON.parse(response);
      if (res.success) {
        const options = res.options.map((opt, index) => `
          <label>
            <input type="radio" name="response" value="${opt}" required> ${opt}
          </label><br>
        `).join('');
        $('#createdSurvey').html(`
          <h4>${res.title}</h4>
          <p><strong>Type:</strong> ${res.type}</p>
          <form id="responseForm">
            ${options}
            <button type="submit" class="btn btn-primary mt-2">Submit Response</button>
          </form>
        `).show();
      }
    }
  });
});

// Handle response submission
$(document).on('submit', '#responseForm', function(e) {
  e.preventDefault();
  const answer = $('input[name="response"]:checked').val();
  $.ajax({
    url: 'submit_response.php',
    type: 'POST',
    data: { answer },
    success: function(resp) {
      alert("Response recorded. Thank you!");
      $('#createdSurvey').hide();
    }
  });
});
</script>


</body>
</html>

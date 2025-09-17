<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
      font-size: 14px;
    }

    textarea {
      height: 120px;
    }

    button {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Contact Us</h2>
    <form action="#" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your email" required />

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>

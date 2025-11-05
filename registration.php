<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
    }
    form {
      max-width: 500px;
      margin: auto;
    }
    label {
      display: block;
      margin-top: 15px;
    }
    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
    }
  </style>
</head>
<body>
  <h2>User Registration</h2>
  <form action="/submit" method="POST">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm">Confirm Password:</label>
    <input type="password" id="confirm" name="confirm" required>

    
    <button type="submit">Submit</button>
  </form>
</body>
</html>
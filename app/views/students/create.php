<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create User</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      color: #000;
      margin: 0;
      padding: 2rem;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }
    .form-container {
      width: 100%;
      max-width: 400px;
      border: 1px solid #ccc;
      padding: 2rem;
      border-radius: 4px;
      background-color: #f9f9f9;
    }
    h1 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      text-align: center;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    label {
      font-weight: bold;
      margin-bottom: 0.3rem;
      display: block;
    }
    input[type="text"],
    input[type="email"] {
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 1rem;
      width: 100%;
      box-sizing: border-box;
    }
    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: 2px solid #007BFF;
      border-color: #007BFF;
    }
    button[type="submit"] {
      padding: 0.7rem;
      font-size: 1rem;
      border: 1px solid #007BFF;
      background-color: #007BFF;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
      transition: background-color 0.2s ease;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .back-link {
      display: block;
      margin-top: 1.5rem;
      text-align: center;
      color: #007BFF;
      text-decoration: none;
      font-size: 0.9rem;
    }
    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create User Record</h1>
    <form action="<?=site_url('users/create');?>" method="post">
      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name" required />

      <label for="first_name">First Name</label>
      <input type="text" id="first_name" name="first_name" required />

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required />

      <button type="submit">Submit Record</button>
    </form>

    <a href="<?=site_url('users/show');?>" class="back-link">&#8592; Back to Dashboard</a>
  </div>
</body>
</html>

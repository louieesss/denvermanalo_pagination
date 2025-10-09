<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px 25px;
      width: 320px;
      border-radius: 4px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
      color: #222;
    }

    .error {
      background-color: #fdd;
      border: 1px solid #f99;
      color: #900;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 3px;
      font-size: 14px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      font-size: 14px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 14px;
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 3px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #007bff;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    /* Optional: remove toggle password button for simplicity */
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>

    <?php if(isset($error)): ?>
      <div class="error"><?= htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('login'); ?>" method="post" autocomplete="on">
      <label for="username">Username or Email</label>
      <input type="text" id="username" name="username" required autocomplete="username" />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required autocomplete="current-password" />

      <button type="submit">Login</button>
    </form>

    <a href="<?= site_url('register'); ?>" class="back-link">Register</a>
  </div>
</body>
</html>

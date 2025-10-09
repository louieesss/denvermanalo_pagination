<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Register | System Console</title>

<style>
  body {
    background-color: #fff;
    color: #000;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
  }

  .form-container {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 2rem;
    width: 100%;
    max-width: 400px;
    border-radius: 6px;
  }

  h1 {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    text-align: center;
  }

  .error {
    color: #cc0000;
    margin-bottom: 1rem;
    font-size: 0.9rem;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  label {
    font-weight: bold;
    display: block;
    margin-bottom: 0.3rem;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus,
  select:focus {
    outline: 2px solid #007BFF;
    border-color: #007BFF;
  }

  .input-wrapper {
    position: relative;
  }

  .toggle-password {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    color: #555;
  }

  button[type="submit"] {
    padding: 0.7rem;
    font-size: 1rem;
    background-color: #007BFF;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  button[type="submit"]:hover {
    background-color: #0056b3;
  }

  .back-link {
    display: block;
    margin-top: 1.5rem;
    text-align: center;
    font-size: 0.9rem;
    color: #007BFF;
    text-decoration: none;
  }

  .back-link:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="form-container">
    <h1>Register</h1>

    <?php if(isset($error)): ?>
      <div class="error"><?= htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('register'); ?>" method="post" autocomplete="on">
      <label for="username">Username</label>
      <div class="input-wrapper">
        <input type="text" id="username" name="username" required autocomplete="username" />
      </div>

      <label for="email">Email</label>
      <div class="input-wrapper">
        <input type="email" id="email" name="email" required autocomplete="email" />
      </div>

      <label for="password">Password</label>
      <div class="input-wrapper">
        <input type="password" id="password" name="password" required autocomplete="new-password" />
        <button type="button" id="togglePassword" class="toggle-password" aria-label="Show password" aria-pressed="false">&#128065;</button>
      </div>

      <label for="role">Role</label>
      <select id="role" name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>

      <button type="submit">Register</button>
    </form>

    <a href="<?= site_url('login'); ?>" class="back-link">&#8592; Login</a>
  </div>

  <script>
    (function(){
      const toggleBtn = document.getElementById('togglePassword');
      const pwd = document.getElementById('password');

      toggleBtn.addEventListener('click', function(){
        const isHidden = pwd.type === 'password';
        pwd.type = isHidden ? 'text' : 'password';
        this.setAttribute('aria-pressed', String(isHidden));
        this.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
        this.textContent = isHidden ? '' : '👁️';
      });
    })();
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Background with gradient */
    body {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Form Card styling */
    .card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      padding: 3rem;
    }

    /* Input and button focus effect */
    input:focus, button:focus {
      outline: none;
      box-shadow: 0 0 8px rgba(56, 189, 248, 0.7);
    }

    /* Input styling */
    input {
      border-radius: 8px;
      padding: 12px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    /* Button styling */
    .button-primary {
      background-color: #2575fc;
      color: white;
      padding: 12px 24px;
      border-radius: 50px;
      font-weight: 600;
      width: 100%;
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .button-primary:hover {
      background-color: #1e61b2;
      transform: translateY(-3px);
    }

    .button-secondary {
      background-color: #8e8e8e;
      color: white;
      padding: 12px 24px;
      border-radius: 50px;
      font-weight: 600;
      width: 100%;
      text-align: center;
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .button-secondary:hover {
      background-color: #707070;
      transform: translateY(-3px);
    }

    /* Title styling */
    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: white;
      text-align: center;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">

  <!-- Form Card -->
  <div class="relative z-10 w-full max-w-md card">
    
    <!-- Title -->
    <h1>Create User</h1>

    <!-- Form -->
    <form action="<?= site_url('users/create'); ?>" method="POST" class="space-y-6">
      
      <!-- Last Name -->
      <div>
        <label for="lastname" class="block text-white font-semibold mb-2">Last Name</label>
        <input 
          type="text" 
          id="lastname" 
          name="lastname" 
          placeholder="Enter last name"
          required
        >
      </div>

      <!-- First Name -->
      <div>
        <label for="firstname" class="block text-white font-semibold mb-2">First Name</label>
        <input 
          type="text" 
          id="firstname" 
          name="firstname" 
          placeholder="Enter first name"
          required
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-white font-semibold mb-2">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Enter email"
          required
        >
      </div>

      <!-- Buttons -->
      <div class="flex gap-4 pt-4">
        <!-- Submit Button -->
        <button type="submit" class="button-primary">
          Submit
        </button>

        <!-- Cancel Button -->
        <a href="<?= site_url('/'); ?>" class="button-secondary">
          Cancel
        </a>
      </div>
    </form>
  </div>

</body>
</html>

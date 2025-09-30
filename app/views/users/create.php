<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Background animation */
    body {
      background: linear-gradient(120deg, #3498db, #8e44ad);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Card shadow and glow */
    .card {
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(15px);
    }

    /* Focus and input transition */
    input:focus, button:focus {
      outline: none;
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.6);
    }

    .button-primary {
      background-color: #3498db;
      color: white;
      border-radius: 50px;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .button-primary:hover {
      background-color: #2980b9;
    }

    .button-secondary {
      background-color: #555;
      color: white;
      border-radius: 50px;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .button-secondary:hover {
      background-color: #444;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">

  <!-- Card Container -->
  <div class="relative z-10 w-full max-w-lg p-10 rounded-xl card">
    
    <!-- Title -->
    <h1 class="text-4xl font-extrabold text-center mb-8 text-white tracking-wide drop-shadow-lg">
      Create User
    </h1>

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
          class="w-full px-6 py-4 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition"
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
          class="w-full px-6 py-4 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition"
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
          class="w-full px-6 py-4 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition"
        >
      </div>

      <!-- Buttons -->
      <div class="flex gap-4 pt-4">
        <!-- Submit Button -->
        <button type="submit" class="button-primary flex-1">
          Submit
        </button>

        <!-- Cancel Button -->
        <a href="<?= site_url('/'); ?>" class="button-secondary flex-1 text-center">
          Cancel
        </a>
      </div>
    </form>
  </div>

</body>
</html>

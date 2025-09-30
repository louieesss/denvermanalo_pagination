<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Smooth animated background */
    body {
      background: linear-gradient(-45deg, #43cea2, #185a9d, #2c3e50, #4ca1af);
      background-size: 400% 400%;
      animation: gradientShift 20s ease infinite;
    }
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Frosted glass card */
    .glass {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4">

  <!-- Card -->
  <div class="glass p-10 rounded-2xl w-full max-w-md border border-white/30">
    
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center mb-8 text-white tracking-wide drop-shadow-md">
      Update User
    </h1>

    <!-- Form -->
    <form action="<?= site_url('users/update/'.segment(4)); ?>" method="POST" class="space-y-6">

      <!-- Last Name -->
      <div>
        <label for="lastname" class="block text-white font-medium mb-2">Last Name</label>
        <input 
          type="text" 
          id="lastname" 
          name="lastname"
          value="<?= html_escape($user['lastname']); ?>"
          required
          class="w-full px-5 py-3 rounded-lg bg-white/10 text-white border border-white/20 focus:ring-2 focus:ring-cyan-400 focus:outline-none transition"
        >
      </div>

      <!-- First Name -->
      <div>
        <label for="firstname" class="block text-white font-medium mb-2">First Name</label>
        <input 
          type="text" 
          id="firstname" 
          name="firstname"
          value="<?= html_escape($user['firstname']); ?>"
          required
          class="w-full px-5 py-3 rounded-lg bg-white/10 text-white border border-white/20 focus:ring-2 focus:ring-cyan-400 focus:outline-none transition"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-white font-medium mb-2">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email"         
          value="<?= html_escape($user['email']); ?>"
          required
          class="w-full px-5 py-3 rounded-lg bg-white/10 text-white border border-white/20 focus:ring-2 focus:ring-cyan-400 focus:outline-none transition"
        >
      </div>

      <!-- Buttons -->
      <div class="flex gap-4 pt-2">
        <!-- Save -->
        <button type="submit"
          class="flex-1 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 rounded-lg transition-transform transform hover:-translate-y-1">
           Save
        </button>

        <!-- Cancel -->
        <a href="<?= site_url('/'); ?>" 
           class="flex-1 text-center bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 rounded-lg transition-transform transform hover:-translate-y-1">
           Cancel
        </a>
      </div>
    </form>
  </div>

</body>
</html>

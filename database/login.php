<?php
session_start();

// --- Hardcoded Admin Credentials (you can later move to DB) ---
$ADMIN_USER = "admin";
$ADMIN_PASS = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === $ADMIN_USER && $password === $ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: registeradm.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen text-white">

  <div class="bg-gray-800 p-8 rounded-xl shadow-lg w-96">
    <h1 class="text-2xl font-bold text-center mb-6">Admin Login</h1>

    <?php if (!empty($error)): ?>
      <p class="text-red-400 text-center mb-4"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <!-- Username -->
      <div>
        <label class="block mb-1 font-semibold">Username</label>
        <input type="text" name="username" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Password -->
      <div>
        <label class="block mb-1 font-semibold">Password</label>
        <input type="password" name="password" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit"
          class="bg-purple-600 hover:bg-purple-700 px-6 py-2 rounded-lg font-semibold shadow-lg transition">
          Login
        </button>
      </div>
    </form>
  </div>

</body>
</html>

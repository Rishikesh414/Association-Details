<?php
// Optional: show success message if redirected from save_students.php
$success = isset($_GET['success']) ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Student - NEXUS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

  <!-- Navbar -->
  <?php include("../client/includes/navbar.php"); ?>

  <!-- 3D Background -->
  <div class="fixed inset-0 z-0 pointer-events-none">
    <?php include("../client/includes/3d.php"); ?>
  </div>

  <!-- Main Content -->
  <main class="flex-1 max-w-4xl mx-auto py-16 px-6">

    <!-- <h1 class="text-4xl font-bold text-center mb-10 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
      Add New Student
    </h1> -->

    <?php if($success): ?>
      <div class="bg-green-500 text-black p-4 rounded-lg mb-6 text-center font-semibold shadow-md z-100 backdrop-blur-md py-30">
        Student added successfully!
      </div>
    <?php endif; ?>

    <form action="./achievements/save_students.php" method="POST" enctype="multipart/form-data" 
      class="bg-gray-900/95 backdrop-blur-md p-10 rounded-2xl shadow-2xl space-y-6 mt-12 border border-gray-700">

      
      <!-- Name -->
      <div>
        <label class="block mb-2 font-semibold">Full Name</label>
        <input type="text" name="name" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
      </div>

      <!-- Registration Number -->
      <div>
        <label class="block mb-2 font-semibold">Registration Number</label>
        <input type="text" name="reg_no" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
      </div>

      <!-- Email -->
      <div>
        <label class="block mb-2 font-semibold">Email</label>
        <input type="email" name="email" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
      </div>

<!-- Department -->
<div>
  <label class="block mb-2 font-semibold">Department</label>
  <select name="department" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    <option value="Information Technology" selected>Information Technology</option>
  </select>
</div>


      <!-- Year -->
      <div>
        <label class="block mb-2 font-semibold">Year</label>
        <select name="year" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Select Year</option>
          <option value="1">1st Year</option>
          <option value="2">2nd Year</option>
          <option value="3">3rd Year</option>
          <option value="4">4th Year</option>
        </select>
      </div>

      <!-- Photo Upload -->
      <div>
        <label class="block mb-2 font-semibold">Photo</label>
        <input type="file" name="photo" accept="image/*" class="w-full text-gray-300"/>
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 shadow-lg">
          Add Student
        </button>
      </div>

    </form>

  </main>

  <!-- Footer -->
  <?php include("../client/includes/footer.php"); ?>

</body>
</html>

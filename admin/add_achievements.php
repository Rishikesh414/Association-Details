<?php
$success = isset($_GET['success']) ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Achievements - NEXUS</title>
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

    <h1 class="text-4xl font-bold text-center mb-10 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
      Add Multiple Achievements
    </h1>

    <?php if($success): ?>
      <div class="bg-green-500 text-black p-4 rounded-lg mb-6 text-center font-semibold shadow-md z-100 backdrop-blur-md">
        Achievements added successfully!
      </div>
    <?php endif; ?>

    <form action="./achievements/save_achievement.php" method="POST" class="bg-gray-900/95 backdrop-blur-md p-10 rounded-2xl shadow-2xl space-y-6 mt-12 border border-gray-700" id="achievements-form">

      <!-- Roll Number -->
      <div>
        <label class="block mb-2 font-semibold">Roll Number</label>
        <input type="text" name="reg_no" required class="w-full p-3 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
      </div>

      <!-- Achievement Items Container -->
      <div id="achievements-container">
        <div class="achievement-item space-y-3 p-4 mb-4 border border-gray-600 rounded-lg bg-gray-800">
          <div>
            <label class="block mb-1 font-semibold">Achievement Name</label>
            <input type="text" name="achievement_name[]" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block mb-1 font-semibold">Description</label>
            <textarea name="description[]" rows="2" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <div>
            <label class="block mb-1 font-semibold">Date</label>
            <input type="date" name="achievement_date[]" required class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block mb-1 font-semibold">Position</label>
            <input type="text" name="position[]" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <button type="button" class="remove-btn bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded-lg mt-2">Remove</button>
        </div>
      </div>

      <div class="flex justify-between items-center">
        <button type="button" id="add-achievement" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold transition duration-300 shadow-lg">
          + Add Achievement
        </button>
        <button type="submit" class="bg-green-600 hover:bg-green-500 text-white px-6 py-2 rounded-lg font-semibold transition duration-300 shadow-lg">
          Save All Achievements
        </button>
      </div>

    </form>

  </main>

  <!-- Footer -->
  <?php include("../client/includes/footer.php"); ?>

  <script>
    const addBtn = document.getElementById('add-achievement');
    const container = document.getElementById('achievements-container');

    addBtn.addEventListener('click', () => {
      const item = document.querySelector('.achievement-item').cloneNode(true);
      item.querySelectorAll('input, textarea').forEach(input => input.value = '');
      container.appendChild(item);
      attachRemoveEvents();
    });

    function attachRemoveEvents() {
      const removeBtns = document.querySelectorAll('.remove-btn');
      removeBtns.forEach(btn => {
        btn.onclick = () => {
          if(document.querySelectorAll('.achievement-item').length > 1){
            btn.parentElement.remove();
          }
        }
      });
    }

    attachRemoveEvents();
  </script>

</body>
</html>

<?php
$student_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Achievements</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
    .animate-float { animation: float 4s ease-in-out infinite; }
  </style>
</head>
<body class="bg-gray-900 text-white relative min-h-screen flex flex-col">

  <!-- 3D Background -->
  <div class="fixed inset-0 z-0 pointer-events-none">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Main Content -->
  <div class="relative z-10 flex-1 flex flex-col">

    <!-- Navbar -->
    <?php include("includes/navbar.php"); ?>

    <!-- Header Section -->
    <header class="text-center py-16 px-6">
      <div class="inline-flex items-center justify-center w-28 h-28 mb-6 mx-auto">
        <img src="./img/ne.png" alt="NEXUS Logo" class="rounded-2xl animate-float" />
      </div>
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        Student Profile
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Viewing achievements and contributions of our students
      </p>
      <div class="mt-10">
        <a href="achievements.php" class="px-6 py-2 rounded-full bg-blue-900 text-white font-semibold hover:bg-blue-700 transition">
          ← Back to Achievements
        </a>
      </div>
    </header>

    <!-- Student Info Section -->
    <section id="student-info" class="text-center mb-12 max-w-3xl mx-auto px-6">
      <!-- Filled by JS -->
    </section>

    <!-- Achievements Section -->
    <section class="py-12 max-w-6xl mx-auto px-6 flex-1">
      <h2 class="text-3xl font-bold text-center mb-8">Achievements</h2>
      <div id="achievements-container" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
    </section>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  </div>

  <!-- JS -->
  <script>
  async function loadStudentProfile() {
    const id = <?= $student_id ?>;
    if (!id) return;

    // Fetch student details
    const studentRes = await fetch("http://localhost/Association-Details/admin/get_students.php?id=" + id);
    const student = await studentRes.json();

    document.getElementById("student-info").innerHTML = `
      <img src="${student.photo || './img/default.png'}" 
           class="w-32 h-32 rounded-full mx-auto mb-4 ring-4 ring-blue-500 shadow-lg">
      <h1 class="text-3xl font-bold text-white">${student.name}</h1>
      <p class="text-gray-400 mt-1">${student.department} - Year ${student.year}</p>
      <p class="text-gray-400 mt-1">${student.reg_no || ""} | ${student.email || ""}</p>
    `;

    // Fetch achievements
    const res = await fetch("../admin/achievements/get_student_achievements.php?id=" + id);
    const achievements = await res.json();

    const container = document.getElementById("achievements-container");
    container.innerHTML = "";

    if (achievements.length === 0) {
      container.innerHTML = "<p class='text-gray-400 col-span-3 text-center'>No achievements found.</p>";
      return;
    }

    achievements.forEach(a => {
      const div = document.createElement("div");
      div.className = "bg-white text-black p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1";
      div.innerHTML = `
        <h3 class="font-semibold text-lg text-blue-700 mb-2">${a.achievement_name}</h3>
        <p class="text-gray-700 mb-3">${a.description || ""}</p>
        <div class="flex justify-between items-center text-sm text-gray-500">
          <span><i class="fa-regular fa-calendar"></i> ${a.achievement_date || "—"}</span>
          <span><i class="fa-solid fa-trophy text-yellow-500"></i> ${a.position || "—"}</span>
        </div>
      `;
      container.appendChild(div);
    });
  }

  loadStudentProfile();
  </script>
</body>
</html>

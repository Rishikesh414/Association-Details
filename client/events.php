 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NEXUS Events</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
    .animate-float { animation: float 4s ease-in-out infinite; }
  </style>
</head>
<body class="bg-gray-900 text-white relative">

  <!-- 3D Background -->
  <div class="fixed inset-0 z-0 pointer-events-none">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Main Content -->
  <div class="relative z-10">

    <!-- Navbar -->
    <?php include("includes/navbar.php"); ?>

    <!-- Hero Section -->
    <section class="text-center py-16 px-6">
      <div class="inline-flex items-center justify-center w-28 h-28 mb-6 mx-auto">
        <img src="./img/ne.png" alt="" class="rounded-2xl animate-float" />
      </div>
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        NEXUS
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Connecting minds, fostering innovation, and building the future together
      </p>

    
        
    </section>

    <!-- Student List -->
    <section id="student-section" class="py-12 max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Upcoming Events </h2>
      <div id="member-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
    </section>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  </div>

  <!-- JS -->
  <script>
    let studentsData = [];

    // Fetch students from backend
    async function fetchStudents() {
      try {
        const response = await fetch("http://localhost/Association-Details/admin/get_students.php"); 
        studentsData = await response.json();
        showYear("4th Year"); // Default tab
      } catch (error) {
        console.error("Error fetching students:", error);
      }
    }

    function showYear(year) {
      document.getElementById("year-title").textContent = year;

      // Reset all tabs
      ["2022","2023","2024"].forEach(y => {
        const tab = document.getElementById(`tab-${y}`);
        tab.className = "px-4 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 transition duration-300";
      });
      document.getElementById(`tab-${year.split(" ")[0]}`).className =
        "px-4 py-2 rounded-full bg-blue-900 text-white font-semibold transition duration-300";

      const container = document.getElementById("member-container");
      container.innerHTML = "";

      // ✅ Filter students by year
      const filtered = studentsData.filter(s => {
        let yr = "";
        switch (s.year) {
          case "1": yr = "2022"; break;
          case "2": yr = "2023"; break;
          case "3": yr = "2024"; break;
          
          default: yr = s.year + " Year";
        }
        return yr === year;
      });

      if (filtered.length === 0) {
        container.innerHTML = `<p class="text-gray-400 text-center col-span-3">No students found for ${year}.</p>`;
      }

      filtered.forEach(student => {
        const card = document.createElement("div");
        card.className = "bg-white rounded-xl shadow-md p-6 text-center cursor-pointer hover:shadow-2xl hover:-translate-y-2 transform transition duration-500 ease-in-out";

        card.innerHTML = `
          <img src="${student.photo || './img/default.png'}" class="w-24 h-24 rounded-full mx-auto mb-3">
          <h2 class="text-lg font-semibold text-gray-900">${student.name}</h2>
          <p class="text-sm text-gray-600">${student.department} - ${student.year} Year</p>
        `;

        // ✅ On click -> go to student profile page
        card.onclick = () => {
          window.location.href = "http://localhost/Association-Details/client/student.php?id=" + student.student_id;
        };

        container.appendChild(card);
      });
    }

    // Run on page load
    fetchStudents();
  </script>

</body>
</html>

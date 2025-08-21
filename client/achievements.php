<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NEXUS Achievements</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Floating animation for nodes */
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
    .animate-float { animation: float 4s ease-in-out infinite; }
  </style>
</head>
<body class="bg-gray-900 text-white relative">

  <!-- 3D Background (fixed behind content) -->
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
        <img src="./img/ne.png" alt="NEXUS Logo" class="rounded-2xl animate-float" />
      </div>
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        NEXUS
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Connecting minds, fostering innovation, and building the future together
      </p>

      <!-- Year Tabs -->
      <div class="mt-10 flex justify-center space-x-4 mb-10">
        <button onclick="showYear('2022')" id="tab-2022" class="px-4 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 transition duration-300">
          2022
        </button>
        <button onclick="showYear('2023')" id="tab-2023" class="px-4 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 transition duration-300">
          2023
        </button>
        <button onclick="showYear('2024')" id="tab-2024" class="px-4 py-2 rounded-full bg-blue-900 text-white font-semibold transition duration-300">
          2024
        </button>
      </div>
    </section>

    <!-- Student Achievements Section -->
    <section id="student-achievements" class="py-12 max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Student Achievements <span id="year-title">2024</span></h2>
      <div id="member-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
    </section>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  </div>

  <!-- JS -->
  <script>
    const members = {
      "2022": [
        { name: "Thanush", batch: "IT - 2022", achievement: "National Level Winner", image: "15 Rishikesh K (IT).jpg" },
        { name: "Liam Patel", batch: "ME - 2022", achievement: "Best Innovator", image: "24 Thanushkumar P (IT).jpg" }
      ],
      "2023": [
        { name: "Olivia Brown", batch: "CSE - 2023", achievement: "Hackathon Winner", image: "https://via.placeholder.com/150" },
        { name: "James Taylor", batch: "EEE - 2023", achievement: "Sports Champion", image: "https://via.placeholder.com/150" }
      ],
      "2024": [
        { name: "Sarah Johnson", batch: "ECE - 2024", achievement: "Gold Medalist", image: "https://via.placeholder.com/150" },
        { name: "David Kim", batch: "IT - 2024", achievement: "Research Publication", image: "https://via.placeholder.com/150" }
      ]
    };

    const badgeColors = {
      "National Level Winner": "bg-yellow-400 text-black",
      "Best Innovator": "bg-green-500 text-white",
      "Hackathon Winner": "bg-blue-500 text-white",
      "Sports Champion": "bg-red-500 text-white",
      "Gold Medalist": "bg-purple-600 text-white",
      "Research Publication": "bg-indigo-500 text-white"
    };

    function showYear(year) {
      document.getElementById("year-title").textContent = year;

      ["2022","2023","2024"].forEach(y => {
        const tab = document.getElementById(`tab-${y}`);
        tab.className = "px-4 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 transition duration-300";
      });
      document.getElementById(`tab-${year}`).className = "px-4 py-2 rounded-full bg-blue-900 text-white font-semibold transition duration-300";

      const container = document.getElementById("member-container");
      container.innerHTML = "";

      members[year].forEach(member => {
        const card = document.createElement("div");
        card.className = "bg-white rounded-xl shadow-md w-full max-w-2xl p-4 flex items-center gap-4 hover:shadow-2xl hover:-translate-y-2 transform transition duration-500 ease-in-out group";
        card.innerHTML = `
          <img src="${member.image}" alt="${member.name}" class="w-24 h-24 object-cover rounded-lg bg-gray-200 transition duration-500 transform group-hover:scale-110 group-hover:rotate-2">
          <div class="flex-1">
            <h2 class="text-lg font-semibold group-hover:text-blue-900 transition">${member.name}</h2>
            <p class="text-sm text-gray-600">${member.batch}</p>
            <span class="inline-block ${badgeColors[member.achievement] || 'bg-gray-500 text-white'} text-xs px-3 py-1 rounded-full mt-2">
              ${member.achievement}
            </span>
          </div>
        `;
        container.appendChild(card);
      });
    }

    showYear("2024");
  </script>

</body>
</html>

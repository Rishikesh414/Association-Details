<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NEXUS Events</title>
  <!-- AOS for Scroll Animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- VanillaTilt for 3D Tilt Effect -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .animate-float {
      animation: float 4s ease-in-out infinite;
    }

    /* Flip card styles */
    .flip-card {
      perspective: 1000px;
      width: 100%;
      height: 250px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 1rem;
      overflow: hidden;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .flip-card-back {
      background: linear-gradient(135deg, rgba(10, 10, 30, 0.95), rgba(20, 0, 50, 0.95));
      transform: rotateY(180deg);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 1rem;
      border: 1px solid rgba(0, 255, 255, 0.3);
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
    }

    .flip-card-back h3 {
      font-size: 1.2rem;
      font-weight: bold;
      color: cyan;
      margin-bottom: 0.5rem;
      text-shadow: 0 0 8px purple, 0 0 15px cyan;
      padding: 0 0.5rem;
      word-break: break-word;
    }

    .flip-card-back p {
      font-size: 0.95rem;
      color: #eee;
      margin: 0.2rem 0;
    }

    /* Card container hover effect & pull-up */
    .tilt-card {
      background-color: #1f2937; /* Tailwind's gray-800 */
      transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
      border-radius: 0.75rem; /* match rounded-xl */
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }

    .tilt-card:hover {
      transform: translateY(-12px) scale(1.05);
      background-color: #404246ff; /* Tailwind blue-500 */
      box-shadow: 0 15px 25px rgba(59, 130, 246, 0.5);
      z-index: 10;
    }

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
      <h1
        class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        NEXUS
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Connecting minds, fostering innovation, and building the future together
      </p>
    </section>

    

    <!-- Upcoming Events Section -->
    <section class="max-w-6xl mx-auto px-6 py-12">
      <h2 class="text-3xl font-bold text-center mb-10 text-purple-300">Achievements</h2>
      <div >
        <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-800 bg-transparent ">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 border">S.No</th>
          <th class="px-4 py-2 border">Date / Duration</th>
          <th class="px-4 py-2 border">Year</th>
          <th class="px-4 py-2 border">Student Name</th>
          <th class="px-4 py-2 border">Activity / Course</th>
          <th class="px-4 py-2 border">Organization / Platform</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">1</td>
          <td class="px-4 py-2 border">Oct-2024</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">Ms. B.Sujitha</td>
          <td class="px-4 py-2 border">Data Visualization and with Power BI</td>
          <td class="px-4 py-2 border">Great Learning</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">2</td>
          <td class="px-4 py-2 border">25/10/2024</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Mr. A.Suryaprakash</td>
          <td class="px-4 py-2 border">Data Science Foundation, Android Application Development</td>
          <td class="px-4 py-2 border">Great Learning</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">3</td>
          <td class="px-4 py-2 border">14/10/2024</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">Ms. T.Safrin</td>
          <td class="px-4 py-2 border">Software Development Skill up</td>
          <td class="px-4 py-2 border">-</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">4</td>
          <td class="px-4 py-2 border">05/11/2024</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Mr. R.Yohith Kumar</td>
          <td class="px-4 py-2 border">Artificial Intelligence</td>
          <td class="px-4 py-2 border">NoviTech R&D Private Limited</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">5</td>
          <td class="px-4 py-2 border">26/01/2025</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">S.Logeswari</td>
          <td class="px-4 py-2 border">BootCamp</td>
          <td class="px-4 py-2 border">NoviTech</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">6</td>
          <td class="px-4 py-2 border">09/12/2025 to 23/01/2025</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">R.Vaitheeshwari</td>
          <td class="px-4 py-2 border">Master Class</td>
          <td class="px-4 py-2 border">NoviTech</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">7</td>
          <td class="px-4 py-2 border">20/02/2025 to 21/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">A. Sri Hari Prasath, B. Naveen Bharathi</td>
          <td class="px-4 py-2 border">Hack Fest 2025</td>
          <td class="px-4 py-2 border">M. Kumarasamy College, Karur</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">8</td>
          <td class="px-4 py-2 border">02/03/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">B.Naveen Bharathi</td>
          <td class="px-4 py-2 border">Tech Fest (Conference)</td>
          <td class="px-4 py-2 border">Pondicherry Technological University</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">9</td>
          <td class="px-4 py-2 border">02/01/2025 to 05/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">K. Pravin</td>
          <td class="px-4 py-2 border">Data Visualization Internship (online)</td>
          <td class="px-4 py-2 border">Forage</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">10</td>
          <td class="px-4 py-2 border">03/02/2025 to 15/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">M. Sarvaji</td>
          <td class="px-4 py-2 border">Internship (offline)</td>
          <td class="px-4 py-2 border">Blankspace Technologies LLP, Bengaluru</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">11</td>
          <td class="px-4 py-2 border">03/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Sathya Seelan</td>
          <td class="px-4 py-2 border">Bootcamp</td>
          <td class="px-4 py-2 border">Lets Upgrade</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">12</td>
          <td class="px-4 py-2 border">02/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">P. Swathi</td>
          <td class="px-4 py-2 border">Machine Learning Online Course</td>
          <td class="px-4 py-2 border">Fair Forward</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">13</td>
          <td class="px-4 py-2 border">02/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">S. Yamini</td>
          <td class="px-4 py-2 border">Online Course - AI for Beginners, Selling Online</td>
          <td class="px-4 py-2 border">HP Life</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">14</td>
          <td class="px-4 py-2 border">26/12/2024 to 02/02/2025</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">R. Vaitheeshwari</td>
          <td class="px-4 py-2 border">Master Class</td>
          <td class="px-4 py-2 border">NoviTech</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">15</td>
          <td class="px-4 py-2 border">01/01/2025 to 28/02/2025</td>
          <td class="px-4 py-2 border">II Yr</td>
          <td class="px-4 py-2 border">S. Vigneshwar</td>
          <td class="px-4 py-2 border">Internship (offline)</td>
          <td class="px-4 py-2 border">Bluestock Fintech</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">16</td>
          <td class="px-4 py-2 border">28/02/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Naveen Bharathi B</td>
          <td class="px-4 py-2 border">Product Expo 2025</td>
          <td class="px-4 py-2 border">Jerusalem College of Engineering</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">17</td>
          <td class="px-4 py-2 border">03/03/2025 to 12/03/2025</td>
          <td class="px-4 py-2 border">III Yr - All Girl Students</td>
          <td class="px-4 py-2 border">-</td>
          <td class="px-4 py-2 border">Internship</td>
          <td class="px-4 py-2 border">INTEL</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">18</td>
          <td class="px-4 py-2 border">15/03/2025 & 16/03/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Sathya Seelan M</td>
          <td class="px-4 py-2 border">Netflix clone using HTML & CSS (online)</td>
          <td class="px-4 py-2 border">Lets Upgrade</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">19</td>
          <td class="px-4 py-2 border">03/03/2025 to 05/03/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Sarvaji M</td>
          <td class="px-4 py-2 border">Git & GitHub Boot camp</td>
          <td class="px-4 py-2 border">Lets Upgrade</td>
        </tr>
        <tr class="hover:bg-black  hover:bg-opacity-10 transition-colors">
          <td class="px-4 py-2 border">20</td>
          <td class="px-4 py-2 border">07/03/2025</td>
          <td class="px-4 py-2 border">III Yr</td>
          <td class="px-4 py-2 border">Sarvaji M</td>
          <td class="px-4 py-2 border">Quantitative research job simulation</td>
          <td class="px-4 py-2 border">Forage</td>
        </tr>
      </tbody>
    </table>
  </div>
      </div>
    </section>

  </div>
  <script>
    AOS.init({
      duration: 700, // snappier animation
      easing: 'ease-in-out',
    
      mirror: false
    });

    VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
      max: 15,
      speed: 400,
      glare: true,
      "max-glare": 0.2,
    });
  </script>

</body>

</html>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NEXUS Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Floating animation for nodes */
    @keyframes float {
      0%,100%{transform: translateY(0);}
      50%{transform: translateY(-10px);}
    }
    .animate-float { animation: float 4s ease-in-out infinite; }

    /* Image hover effect */
    .gallery-card img {
      transition: transform 0.5s ease, filter 0.5s ease;
    }
    .gallery-card:hover img {
      transform: scale(1.1) rotate(1deg);
      filter: brightness(1.1);
    }
  </style>
</head>
<body class="bg-gray-900 relative text-white">

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
            </div>
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        Code Crafters Club
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
      Code, Collaborate, Conquer.
      </p>
    </section>
<div class="max-w-5xl mx-auto">
    <!-- Month Sections -->
  <section class="transparent-card p-6 shadow-lg" id="month1">
    <h2 class="text-2xl font-semibold text-white mb-4">Month 1 – Kickstart & Foundation</h2>
    <ul class="list-disc list-inside text-white space-y-2">
      <li><strong>Team Formation & Identity:</strong> Form 4–5 teams (4–6 members each). Create team name, logo, tagline, and intro presentation.</li>
      <li><strong>Debugging Challenge:</strong> Fix bugs in C, Python, Java. Scoring: Speed + Accuracy.</li>
    </ul>
  </section>

  <section class="transparent-card p-6 shadow-lg" id="month2">
    <h2 class="text-2xl font-semibold text-white mb-4">Month 2 – Learning & Mini Projects</h2>
    <ul class="list-disc list-inside text-white space-y-2">
      <li><strong>Thematic Coding Sprint:</strong> Small problem statements (calculator app, quiz app, to-do list). Duration: 1 week. Teams present mini-projects.</li>
      <li><strong>Knowledge Battle (Tech Quiz):</strong> MCQs, Rapid-fire, Code output prediction. Points added to team scoreboard.</li>
    </ul>
  </section>

  <section class="transparent-card p-6 shadow-lg" id="month3">
    <h2 class="text-2xl font-semibold text-white mb-4">Month 3 – Creative & Collaborative</h2>
    <ul class="list-disc list-inside text-white space-y-2">
      <li><strong>Hack-the-Logic:</strong> Problem-solving contest (DSA problems, logical puzzles).</li>
      <li><strong>Web/App Prototype Challenge:</strong> Design UI/UX prototype for a real-world idea. Bonus points for creativity and teamwork.</li>
    </ul>
  </section>

  <section class="transparent-card p-6 shadow-lg" id="month4">
    <h2 class="text-2xl font-semibold text-white mb-4">Month 4 – Showcase & Evaluation</h2>
    <ul class="list-disc list-inside text-white space-y-2">
      <li><strong>Main Hackathon:</strong> Larger problem statement (social impact, automation, AI/ML). Duration: 24–48 hours. Judges evaluate innovation, functionality, teamwork, and presentation.</li>
      <li><strong>Reflection & Documentation:</strong> Submit short report: learnings, challenges, team experience. Helps final evaluation.</li>
    </ul>
  </section>

  <section class="transparent-card p-6 shadow-lg" id="scoring">
    <h2 class="text-2xl font-semibold text-white mb-4">🏆 Scoring & Best Team Selection</h2>
    <ul class="list-disc list-inside text-white space-y-2">
      <li>Debugging Challenge – 10%</li>
      <li>Mini Project – 15%</li>
      <li>Tech Quiz – 10%</li>
      <li>Hack-the-Logic – 15%</li>
      <li>Prototype Challenge – 15%</li>
      <li>Hackathon – 25%</li>
      <li>Teamwork & Documentation – 10%</li>
    </ul>
    <p class="mt-2 text-white italic">The team with the highest overall score will be declared “Best Code Crafters Team of the Year.”</p>
  </section>
</div>


<!-- Footer -->
<?php include("includes/footer.php"); ?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
function openModal(index) {
  let modal = document.getElementById("modal-" + index);
  modal.classList.remove("hidden");
  modal.classList.add("flex");

  // Initialize Swiper only once per modal
  if (!modal.dataset.initiated) {
   new Swiper(".mySwiper-" + index, {
  loop: true,
  pagination: { el: ".swiper-pagination", clickable: true },
  navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
  keyboard: {
    enabled: true,       // allow keyboard navigation
    onlyInViewport: true // optional: works only if modal is visible
  }
});

    modal.dataset.initiated = true;
  }
}

function closeModal(index) {
  let modal = document.getElementById("modal-" + index);
  modal.classList.remove("flex");
  modal.classList.add("hidden");
}
</script>


</body>
</html>

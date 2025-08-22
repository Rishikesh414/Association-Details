<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About NEXUS</title>

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link />

  <style>
    /* Apply the font to everything */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right top, #1a1a2e, #1f1f41, #282855, #332f6a, #403680);
      color: #ddd6fe;
      margin: 0;
      padding: 0;
    }

    .neon-list li::marker {
      color: #c084fc;
      text-shadow: 0 0 6px #a855f7;
    }

    /* Base glassmorphism card */
    .glass-card {
      background: linear-gradient(135deg, rgba(139, 92, 246, 0.15), rgba(139, 92, 246, 0.05));
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 24px;
      box-shadow: 0 12px 30px rgba(139, 92, 246, 0.3);
      transition: transform 1s ease, box-shadow 1s ease;
      /* increased duration */
      will-change: transform;
      padding: 3rem 2.5rem;
      border: 1px solid rgba(139, 92, 246, 0.3);
      perspective: 1000px;
      max-width: 900px;
      width: 100%;
      transform-style: preserve-3d;
    }

    /* Pull-up + 3D hover animation */
    .glass-card:hover {
      transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
      box-shadow: 0 25px 50px rgba(139, 92, 246, 0.6);
      cursor: pointer;
    }

    /* Custom color cards */
    .glass-objectives {
      background: linear-gradient(135deg, rgba(123, 97, 255, 0.2), rgba(72, 47, 168, 0.1));
      border-color: rgba(123, 97, 255, 0.4);
      box-shadow: 0 12px 30px rgba(123, 97, 255, 0.4);
    }

    .glass-activities {
      background: linear-gradient(135deg, rgba(249, 115, 22, 0.2), rgba(194, 65, 12, 0.1));
      border-color: rgba(249, 115, 22, 0.4);
      box-shadow: 0 12px 30px rgba(249, 115, 22, 0.4);
    }

    .glass-community {
      background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(5, 150, 105, 0.1));
      border-color: rgba(16, 185, 129, 0.4);
      box-shadow: 0 12px 30px rgba(16, 185, 129, 0.4);
    }

    .glass-why {
      background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(29, 78, 216, 0.1));
      border-color: rgba(59, 130, 246, 0.4);
      box-shadow: 0 12px 30px rgba(59, 130, 246, 0.4);
    }

    /* Section title styling */
    .section-title {
      font-weight: 800;
      font-size: 2.5rem;
      color: #8b5cf6;
      margin-bottom: 1.5rem;
      text-shadow: 0 0 10px rgba(139, 92, 246, 0.7);
    }

    .section-text {
      color: #ddd6fe;
      font-size: 1.125rem;
      line-height: 1.7;
    }

    .section-list {
      list-style-type: disc;
      padding-left: 1.25rem;
      color: #ddd6fe;
    }

    .section-list li {
      margin-bottom: 0.75rem;
    }

    .highlighted {
      font-weight: 600;
      color: white;
    }

    .zigzag-section {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5rem 4rem;
      gap: 3rem;
      flex-wrap: wrap;
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto;
    }

    @media (max-width: 768px) {
      .zigzag-section {
        flex-direction: column !important;
        padding: 3rem 2rem;
      }

      .zigzag-left,
      .zigzag-right {
        justify-content: center !important;
      }
    }
  </style>

</head>

<body class="bg-gray-900 relative overflow-auto text-gray-200">

  <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>

  <!-- 3D Background -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Page Content -->
  <div class="relative z-10">
    <!-- Hero / Intro Section -->
    <section class="relative min-h-screen flex items-center justify-center px-6 text-center">
      <div
        class="max-w-4xl mx-auto rounded-3xl p-10 shadow-2xl border border-purple-400/40 bg-gradient-to-br from-white/10 to-purple-500/5 backdrop-blur-xl transform transition hover:scale-105 duration-500 ease-out">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-xl">
          Welcome to <span class="text-purple-400">NEXUS</span>
        </h1>
        <p class="text-lg md:text-xl text-purple-100 leading-relaxed drop-shadow-md">

          NEXUS is the official student association of the Information Technology Department at
          <span class="font-semibold text-purple-300">Nadar Saraswathi College of Engineering and Technology (NSCET)</span>.
          Established to foster innovation, collaboration, and learning among IT students,
          Through dynamic
          events, workshops, and collaborative initiatives, NEXUS empowers students to connect, create, and
          contribute beyond the classroom.
        </p>
      </div>
    </section>


    <!-- Vision & Mission -->
    <!-- Vision & Mission Split Section -->
    <section class="py-20 px-6 max-w-6xl mx-auto" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center text-purple-400 mb-12" data-aos="fade-up">
        Vision & Mission
      </h2>

      <div class="grid md:grid-cols-2 gap-10" data-aos="fade-up" data-aos-delay="100">

        <!-- Vision Card -->
        <div data-aos="fade-right"
          class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-8 transform transition duration-500 hover:scale-105 hover:shadow-purple-500/40">
          <div class="flex items-center gap-4 mb-4">
            <i class="fas fa-eye text-4xl text-cyan-400"></i>
            <h3 class="text-2xl font-semibold text-white">Our Vision</h3>
          </div>
          <p class="text-lg text-purple-100 leading-relaxed">
            To bring out streamlined technocrats for building sustenance civilization.
          </p>
        </div>

        <!-- Mission Card -->
        <div data-aos="fade-left"
          class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-8 transform transition duration-500 hover:scale-105 hover:shadow-pink-400/40">
          <div class="flex items-center gap-4 mb-4">
            <i class="fas fa-bullseye text-4xl text-pink-400"></i>
            <h3 class="text-2xl font-semibold text-white">Our Mission</h3>
          </div>
          <ul class="list-disc list-inside text-purple-100 space-y-2 text-lg neon-list">
            <li>To inculcate technologies that decodes the solution for real world exigency.</li>
            <li>To encourage and develop generous and ethical contributions to cater the industrial demands.</li>
            <li>To impart and ignite the research skills along with soft skills to shine in the era of automation.</li>
          </ul>
        </div>
      </div>
    </section>


    <!-- Our Objectives -->
    <section class="py-10 px-4 zigzag-section zigzag-left" data-aos="fade-right" data-aos-duration="800">
      <div class="glass-card transition-transform duration-300 hover:-translate-y-2">
        <h2 class="section-title">Our Objectives</h2>
        <ul class="section-list">
          <li><span class="highlighted">Skill Development:</span> Provide training in coding, AI, cybersecurity, data science, and
            emerging IT fields.</li>
          <li><span class="highlighted">Innovation & Creativity:</span> Encourage students to develop innovative projects and
            solutions.</li>
          <li><span class="highlighted">Collaboration & Networking:</span> Build a strong community of students who can
            collaborate, mentor, and inspire each other.</li>
          <li><span class="highlighted">Exposure to Industry:</span> Connect students with experts, alumni, and professionals
            through workshops and events.</li>
          <li><span class="highlighted">Community Engagement:</span> Initiate projects that have a positive impact on society,
            technology, and the student community.</li>
        </ul>
      </div>
    </section>

    <!-- Activities & Programs -->
    <section class="py-10 px-4 zigzag-section zigzag-right" data-aos="fade-left" data-aos-duration="1000">
      <div class="glass-card transition-transform duration-300 hover:-translate-y-2">
        <h2 class="section-title">Activities & Programs</h2>
        <ul class="section-list">
          <li><span class="highlighted">Workshops & Seminars:</span> Hands-on sessions led by industry professionals and alumni.</li>
          <li><span class="highlighted">Hackathons & Competitions:</span> Platforms for students to solve real-world challenges.</li>
          <li><span class="highlighted">Tech Talks & Meetups:</span> Knowledge-sharing sessions on emerging trends and technologies.</li>
          <li><span class="highlighted">Skill Development Programs:</span> Practical training sessions in coding, AI, cybersecurity, and
            project management.</li>
          <li><span class="highlighted">Community Projects:</span> Student-led initiatives to apply knowledge in real-world scenarios.</li>
        </ul>
      </div>
    </section>

    <!-- Our Community -->
    <section class="py-10 px-4 zigzag-section zigzag-left" data-aos="fade-right" data-aos-duration="1200">
      <div class="glass-card transition-transform duration-300 hover:-translate-y-2">
        <h2 class="section-title">Our Community</h2>
        <p class="section-text mb-4">
          NEXUS is entirely student-driven, ensuring that every initiative and event reflects the interests and creativity of its
          members.
          The association welcomes all IT students, from beginners to advanced learners, and provides an environment where every
          member can learn, lead, and contribute.
        </p>
        <p class="section-text">
          We believe in peer learning, mentorship, and collaboration – the core pillars that make NEXUS a thriving student
          association.
        </p>
      </div>
    </section>

    <!-- Why NEXUS -->
    <section class="py-10 px-4 zigzag-section zigzag-right" data-aos="fade-left" data-aos-duration="1400">
      <div class="glass-card transition-transform duration-300 hover:-translate-y-2">
        <h2 class="section-title">Why NEXUS?</h2>
        <ul class="section-list">
          <li>Learning beyond the classroom through real-world applications.</li>
          <li>Networking with fellow students, alumni, and industry experts.</li>
          <li>Building leadership and teamwork skills.</li>
          <li>Opportunities for innovation and recognition.</li>
          <li>A supportive student community that motivates and inspires.</li>
        </ul>
        <p class="section-text mt-4">
          At NEXUS, we don’t just create events – we create experiences that empower students for life.
        </p>
      </div>
    </section>

  </div>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      easing: 'ease-out-cubic',
      offset: 120,
    });
  </script>

  <!-- Custom smooth scroll -->
  <script>
    function smoothScroll(target, duration) {
      let targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
      let startPosition = window.pageYOffset;
      let distance = targetPosition - startPosition;
      let startTime = null;

      function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        let timeElapsed = currentTime - startTime;
        let run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animation);
      }

      function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
      }

      requestAnimationFrame(animation);
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          smoothScroll(target, 1500); // 1.5 seconds scroll duration
        }
      });
    });
  </script>
</body>

</html>

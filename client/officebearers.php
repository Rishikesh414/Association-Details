<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Office Bearers & Roles</title>
  <!-- Tailwind CDN for styling -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS CSS for animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <style>
  

    .glass-card {
      background: rgba(255 255 255 / 0.1);
      backdrop-filter: blur(15px);
      border-radius: 1rem;
      border: 1px solid rgba(255 255 255 / 0.2);
      padding: 1.5rem;
    }
    .role-badge {
      background: #8b5cf6;
      padding: 0.25rem 0.75rem;
      border-radius: 9999px;
      font-weight: 600;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: inline-block;
      color: white;
    }
  </style>
</head>
<body class="bg-gray-900 relative overflow-hidden">
  <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>

  <!-- 3D Background (interactive) -->
  <div class="absolute inset-0 z-0">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Main content -->
  <main class="relative z-10 pt-[1.5cm]">

    <!-- Roles & Responsibilities Section -->
    <section class="py-20 px-4 sm:px-8 md:px-[3cm] max-w-screen-xl mx-auto" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center text-purple-400 mb-12" data-aos="fade-up">
        Roles & Responsibilities
      </h2>

      <div class="space-y-12">

        <!-- President -->
        <div class="glass-card p-8" data-aos="fade-right">
          <h3 class="text-2xl font-semibold text-white mb-4">President</h3>
          <h4 class="text-purple-300 font-semibold mb-2">Responsibilities:</h4>
          <ul class="list-disc list-inside text-purple-200 space-y-2 text-base md:text-lg">
            <li>Lead the association and represent NEXUS at institutional forums.</li>
            <li>Plan and supervise all activities with the office bearers.</li>
            <li>Inspire peers to actively engage in technical, cultural, and social initiatives.</li>
          </ul>
        </div>

        <!-- Vice-President -->
        <div class="glass-card p-8" data-aos="fade-left">
          <h3 class="text-2xl font-semibold text-white mb-4">Vice-President</h3>
          <h4 class="text-purple-300 font-semibold mb-2">Responsibilities:</h4>
          <ul class="list-disc list-inside text-purple-200 space-y-2 text-base md:text-lg">
            <li>Assist the President in planning and execution of events.</li>
            <li>Take charge of responsibilities in the absence of the President.</li>
            <li>Coordinate with faculty and students for smooth functioning.</li>
          </ul>
        </div>

        <!-- Secretary -->
        <div class="glass-card p-8" data-aos="fade-right">
          <h3 class="text-2xl font-semibold text-white mb-4">Secretary</h3>
          <h4 class="text-purple-300 font-semibold mb-2">Responsibilities:</h4>
          <ul class="list-disc list-inside text-purple-200 space-y-2 text-base md:text-lg">
            <li>Maintain official records of meetings, events, and communications.</li>
            <li>Draft circulars, notices, and event proposals.</li>
            <li>Ensure timely updates of NEXUS activities on notice boards and digital platforms.</li>
          </ul>
        </div>

        <!-- Joint Secretary -->
        <div class="glass-card p-8" data-aos="fade-left">
          <h3 class="text-2xl font-semibold text-white mb-4">Joint Secretary</h3>
          <h4 class="text-purple-300 font-semibold mb-2">Responsibilities:</h4>
          <ul class="list-disc list-inside text-purple-200 space-y-2 text-base md:text-lg">
            <li>Assist the Secretary in documentation and communication.</li>
            <li>Help in managing logistics for workshops, seminars, and competitions.</li>
            <li>Support coordination between student members and faculty.</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- Office Bearers Section -->
    <section class="py-20 px-4 sm:px-8 md:px-[3cm] max-w-screen-xl mx-auto" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center text-purple-400 mb-8" data-aos="fade-up">
        Office Bearers
      </h2>

      <!-- Year Selection Buttons -->
      <div class="flex justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
        <button class="year-btn px-5 py-2 rounded-full text-purple-300 border border-purple-500 hover:bg-purple-700 hover:text-white transition" data-year="2024" aria-pressed="true">2024 - 2025</button>
        <button class="year-btn px-5 py-2 rounded-full text-purple-300 border border-purple-500 hover:bg-purple-700 hover:text-white transition" data-year="2023" aria-pressed="false">2023 - 2024</button>
        <button class="year-btn px-5 py-2 rounded-full text-purple-300 border border-purple-500 hover:bg-purple-700 hover:text-white transition" data-year="2022" aria-pressed="false">2022 - 2023</button>
      </div>

      <!-- Bearers container -->
      <div id="bearers-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16"></div>
    </section>

  </main>

  <!-- AOS JS (for animations) -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });

    // Office bearers data
    const data = {
      2024: [
        { name: 'Aarya Patel', role: 'President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=AP' },
        { name: 'Rahul Menon', role: 'Vice President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=RM' },
        { name: 'Neha Sinha', role: 'Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=NS' },
        { name: 'Mohammed Rafi', role: 'Joint Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=MR' },
      ],
      2023: [
        { name: 'Saurabh Singh', role: 'President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=SS' },
        { name: 'Anjali Nair', role: 'Vice President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=AN' },
        { name: 'Rishabh Jain', role: 'Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=RJ' },
        { name: 'Farheen Ali', role: 'Joint Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=FA' },
      ],
      2022: [
        { name: 'Priya Das', role: 'President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=PD' },
        { name: 'Aman Gupta', role: 'Vice President', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=AG' },
        { name: 'Meera Shah', role: 'Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=MS' },
        { name: 'Vikas Jain', role: 'Joint Secretary', img: 'https://placehold.co/128x128/8B5CF6/FFFFFF/png?text=VJ' },
      ],
    };

    const container = document.getElementById('bearers-container');
    const buttons = document.querySelectorAll('.year-btn');

    function renderYear(year) {
      container.innerHTML = '';
      data[year].forEach(bearer => {
        const card = document.createElement('div');
        card.className = 'flex flex-col items-center space-y-3 glass-card p-6 shadow-lg';

        card.innerHTML = `
          <img src="${bearer.img}" alt="${bearer.name}" class="w-28 h-28 rounded-full border-4 border-purple-500 object-cover shadow-lg" />
          <p class="font-semibold text-lg text-white">${bearer.name}</p>
          <span class="role-badge">${bearer.role}</span>
        `;

        container.appendChild(card);
      });
    }

    // Initial render
    renderYear(2024);

    // Button click handlers
    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        buttons.forEach(b => {
          b.classList.remove('bg-purple-700', 'text-white');
          b.classList.add('text-purple-300');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('bg-purple-700', 'text-white');
        btn.classList.remove('text-purple-300');
        btn.setAttribute('aria-pressed', 'true');

        renderYear(btn.getAttribute('data-year'));
      });
    });
  </script>
</body>
</html>

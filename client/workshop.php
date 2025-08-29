<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Event</title>

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome for LinkedIn Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    .hero {
      background-image: url('assets/img/Colleg photos.jpg'); /* 👈 Only Hero bg */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; /* Full screen height */
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5); /* Light black overlay */
      z-index: 1;
    }
    .hero > div {
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body class="text-white bg-black">

  <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>

<!-- Hero Section -->
<section class="hero flex flex-col items-center justify-center text-center px-4">
  <div class="z-10 space-y-4">
    <h1 class="text-purple-400 text-5xl md:text-6xl font-extrabold">
      Nadar Saraswathi College of Engineering & Technology
    </h1>

    <h2 class="text-purple-300 text-3xl md:text-5xl font-bold">
      Department of Information Technology
    </h2>

    <h2 class="text-purple-300 text-2xl md:text-4xl font-bold">
      Network of eXperts in Unified System
    </h2>
  </div>

  <!-- Deploying Sentence Center -->
  <div class="flex items-center justify-center mt-10">
    <p class="text-purple-400 text-3xl md:text-4xl font-extrabold max-w-4xl leading-tight text-center">
      Deploying the Applications on AWS Cloud
    </p>
  </div>

     <div class="mt-10 bg-purple-600  px-10 py-3 rounded text-xl border-2 border-white ">
       <a href="./register.php">
        <button class="uppercase">
        Registration Now
      </button>
    </a>
     </div>
</section>
    <!-- About Event Section -->
<section class="py-16 px-8 md:px-20 bg-gray-900">
  <div class="flex flex-col md:flex-row gap-12">
    
    <!-- Left: About Event -->
    <div class="p-8 rounded-2xl shadow-lg max-w-3xl w-full text-justify ">
      <h2 class="text-3xl md:text-4xl font-bold text-purple-300 mb-6 text-left">
        About Event
      </h2>
      <p class="text-lg md:text-xl leading-relaxed text-gray-100">
        The <span class="font-semibold">AWS Cloud Deployment Workshop</span> is designed 
        to provide participants with a complete hands-on experience in deploying 
        applications on the Amazon Web Services (AWS) platform. This workshop will 
        cover essential concepts of <span class="text-purple-300">frontend, backend, and databases</span>, 
        and explain why cloud deployment is vital for global accessibility. 
        <br><br>
        Participants will learn to build a <span class="font-semibold">Flask application</span>, 
        integrate it with a <span class="font-semibold">MySQL database</span>, and containerize it 
        using <span class="font-semibold">Docker</span>. They will also gain real-time experience 
        by deploying the application on <span class="font-semibold">AWS EC2 instances</span> and 
        connecting the services through proper configuration.
        <br><br>
        The workshop also introduces <span class="text-purple-300">UI development</span> using 
        HTML, CSS, and JavaScript with live examples, and highlights how 
        <span class="font-semibold">AI-driven prompt engineering</span> can accelerate building 
        modern user interfaces. The session concludes with a discussion on 
        <span class="font-semibold">recent AI trends</span>, open Q&A, and real-world debugging support.
      </p>

      <!-- Venue + Timing (inside About Section) -->
      <div class="mt-8 text-left text-gray-200 text-lg md:text-xl font-medium">
        📅 6th September 2025 &nbsp; | &nbsp; ⏰ 9:30 AM – 4:00 PM <br>
        📍 Linux lab , NSCET 
      </div>
    </div>

    <!-- Right: Workshop Learning Path -->
    <div class="p-8 rounded-2xl shadow-lg w-full ">
      <h2 class="text-3xl md:text-4xl font-bold text-purple-300 mb-6 text-left">
        Workshop Learning Path
      </h2>
      <ul class="list-disc list-inside text-lg md:text-xl leading-relaxed text-gray-100 space-y-3">
        <li>Introduction to Cloud Deployment – AWS basics, frontend, backend, and database.</li>
        <li>Flask Backend Development – Building and connecting Flask with MySQL.</li>
        <li>Docker & GitHub – Containerization and pushing source code to GitHub.</li>
        <li>AWS EC2 Deployment – Launching, configuring, and deploying on EC2.</li>
        <li>Frontend & AI Integration – UI development with AI-driven enhancements.</li>
      </ul>

    </div>

  </div>
</section>

  <!-- Resource Person Section -->
<section class="py-16 px-8 md:px-20 bg-gray-900">
  <!-- Title -->
  <h2 class="text-3xl md:text-4xl font-bold text-purple-300 mb-12 text-center">
    Resource Person
  </h2>

  <!-- Content: Card + Video side by side -->
  <div class="flex flex-col md:flex-row items-center justify-between gap-12">
    
    <!-- Resource Person Card -->
    <div class="bg-gradient-to-r from-black via-purple-900 to-black backdrop-blur-md  p-8 rounded-2xl shadow-md max-w-lg w-full">
      <!-- Photo -->
      <img src="assets/img/65155327.jpg" alt="S. Mukilan" 
           class="w-40 h-40 mx-auto rounded-full mb-6 border-4 border-purple-400 shadow-lg">
      
      <h3 class="text-2xl md:text-3xl font-bold text-white">
        S. Mukilan
      </h3>
      <p class="text-purple-300 text-lg md:text-xl mt-2">
        Founding Engineer @ Wiserstack
      </p>
      <p class="text-gray-200 text-base md:text-lg mt-6 leading-relaxed">
        ➤ SIH Winner 2023 (National).<br>
        ➤ IndiaSkills’23 National Winner.<br>
      </p>
      
      <!-- LinkedIn Icon Button -->
      <a href="https://www.linkedin.com/in/mukilan2003/" target="_blank" 
         class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-purple-600 hover:bg-blue-500 mt-8">
        <i class="fab fa-linkedin text-white text-3xl"></i>
      </a>
    </div>

    <!-- Video Section -->
   <!-- Video Section -->
<div class="w-full md:w-3/3">
  <video controls autoplay muted  
         class="w-full h-[500px] rounded-2xl shadow-lg border-4 border-purple-400 object-cover">
    <source src="assets/img/mukilan.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>


  </div>
</section>

    <footer class="relative z-10 bg-gray-900 text-center py-6 border-t border-gray-700">
        <p class="uppercase">&copy; 2025 Nexus Association </p>
    </footer>

</body>
</html>

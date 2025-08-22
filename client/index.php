<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEXUS – Hero Section</title>

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 relative overflow-hidden">
  <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>

  <!-- 3D Background (interactive) -->
  <div class="absolute inset-0 z-0">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Hero Section -->
<section class="relative bg-cover bg-center h-screen pointer-events-none" 
         style="background-image: url('assets/images/hero-bg.jpg');">
  <!-- Dark Overlay (doesn't block interaction) -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/80"></div>

  <!-- Hero Content -->
  <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
    <div class="max-w-4xl mx-auto rounded-3xl p-10 shadow-2xl border border-purple-400/40
                bg-gradient-to-br from-white/10 to-purple-500/5 backdrop-blur-xl 
                transform transition hover:scale-105 duration-500 ease-out">

      <!-- Title -->
      <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-xl">
      
        <span class="text-purple-400">Network of eXperts in Unified System</span>
        <br class="hidden md:block">
      </h1>

      <!-- Subtitle -->
      <p class="text-lg md:text-xl text-purple-100 leading-relaxed drop-shadow-md">
        Formed by the Department of Information Technology at 
        <span class="font-semibold text-purple-300">Nadar Saraswathi College of Engineering and Technology</span>, 
        NEXUS is a student association created by students and for students to nurture learning, 
        creativity, and growth.
      </p>

      <!-- Buttons -->
      <div class="mt-8 flex justify-center gap-4 pointer-events-auto">
        <a href="about.php" 
           class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-full 
                  shadow-lg shadow-purple-500/30 transition transform hover:scale-110">
           Explore More
        </a>
        <!-- <a href="#contact" 
           class="px-6 py-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-purple-200 font-medium 
                  rounded-full shadow-lg border border-purple-400/50 transition transform hover:scale-110">
           Join Us
        </a> -->
      </div>
    </div>
  </div>
</section>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nexus Events – Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { overflow-x: hidden; }
    .shimmer {
      background-size: 200% auto;
      background-image: linear-gradient(90deg,#a855f7 0%,#ec4899 25%,#6366f1 50%,#ec4899 75%,#a855f7 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: shimmer 3s linear infinite;
    }
    @keyframes shimmer { to { background-position: -200% center; } }
  </style>
</head>

<body class="bg-gray-900 text-white">
  <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>

  <!-- 3D Background -->
  <div class="absolute inset-0 z-0">
    <?php include("includes/3d.php"); ?>
  </div>

  <!-- Register Section -->
  <section id="register" class="relative z-10 py-12 px-6 md:px-20">
    <header class="pt-16 pb-6 text-center">
      <h1 class="shimmer text-xl md:text-4xl font-bold drop-shadow-[0_3px_12px_rgba(168,85,247,0.7)]">
        Workshop Plan: Deploying Application on AWS with Docker, MySQL, UI & Prompt Engineering
      </h1>
    </header>

   

    <!-- Registration Form -->
   
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">
      Registration Closed
    </h2>


  </section>
  
</div>


</body>
</html>

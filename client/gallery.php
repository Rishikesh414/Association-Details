 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NEXUS Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
        <img src="./img/ne.png" alt="NEXUS Logo" class="rounded-2xl animate-float" />
      </div>
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        NEXUS Gallery
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Explore moments from our workshops, hackathons, and events.
      </p>
    </section>

    <!-- Gallery Section -->
    <section class="max-w-6xl mx-auto px-6 py-12">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
        // Example gallery images (replace with your actual images)
        $images = [
          "gallery1.jpg",
          "gallery2.jpg",
          "gallery3.jpg",
          "gallery4.jpg",
          "gallery5.jpg",
          "gallery6.jpg",
          "gallery7.jpg",
          "gallery8.jpg"
        ];

        foreach($images as $img) {
          echo '<div class="gallery-card bg-white/5 rounded-2xl shadow-lg overflow-hidden cursor-pointer transition transform hover:scale-105">
                  <img src="assets/gallery/'.$img.'" alt="Gallery Image" class="w-full h-60 object-cover">
                </div>';
        }
        ?>
      </div>
    </section>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  </div>

</body>
</html>

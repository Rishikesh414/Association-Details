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
    .flip-card-front, .flip-card-back {
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
      background: linear-gradient(135deg, rgba(10,10,30,0.95), rgba(20,0,50,0.95));
      transform: rotateY(180deg);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 1rem;
      border: 1px solid rgba(0,255,255,0.3);
      box-shadow: 0 0 20px rgba(0,255,255,0.2);
    }
    .flip-card-back h3 {
      font-size: 1.2rem;
      font-weight: bold;
      color: cyan;
      margin-bottom: 0.5rem;
      text-shadow: 0 0 8px purple, 0 0 15px cyan;
    }
    .flip-card-back p {
      font-size: 0.95rem;
      color: #eee;
      margin: 0.2rem 0;
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
      <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-300">
        NEXUS
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed text-gray-200">
        Connecting minds, fostering innovation, and building the future together
      </p>
    </section>

    <!-- Gallery Section with Flip Cards -->
    <section class="max-w-6xl mx-auto px-6 py-12">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
        $gallery = [
          ["title" => "Text Web Social Media Analytics", "guest" => "Dr. R. Lokesh Kumar (VIT Chennai)", "date" => "25 Oct 2024", "image" => "../frontend/img/text_social_media/51.jpeg"],
          ["title" => "Laravel – Building Modern Web Applications", "guest" => "Mr. K. Anandraj, CEO, TM Innovations", "date" => "•	08 Feb 2025 to 14 Feb 2025 ", "image" => "../frontend/img/laravel.jpeg"],
          ["title" => "Django and its Frameworks", "guest" => "Mr. K. Anandraj, CEO, TM Innovations", "date" => "•	15 Feb 2025 to 20 Feb 2025 ", "image" => "../frontend/img/workshop_django/24.jpeg"],
          ["title" => "Mastering the job hunt – interview preparation for professional careers", "guest" => "Mr. Arasakumar S, Senior Software Engineer, Infosys Pvt. Ltd.", "date" => "•	09 Nov 2024 ", "image" => "../frontend/img/2024_inaug/16.jpeg"],
          
        ];

        foreach($gallery as $item) {
          echo '
            <div class="flip-card">
              <div class="flip-card-inner">
                <!-- Front -->
                <div class="flip-card-front">
                  <img src="'.$item["image"].'" alt="'.$item["title"].'">
                </div>
                <!-- Back -->
                <div class="flip-card-back">
                  <h3>'.$item["title"].'</h3>
                  <p><strong>Chief Guest:</strong> '.$item["guest"].'</p>
                  <p><strong>Date:</strong> '.$item["date"].'</p>
                </div>
              </div>
            </div>
          ';
        }
        ?>
      </div>
    </section>

  </div>
</body>
</html>

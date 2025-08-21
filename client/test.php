< class="relative w-full h-screen overflow-hidden bg-black">

  <!-- Animated Gradient Background -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full animate-gradient bg-[radial-gradient(circle_at_center,_#0f172a_0%,_#1e3a8a_40%,_#000_100%)]"></div>
  </div>

  <!-- Particle Effect (stars / floating dots) -->
  <canvas id="particles" class="absolute inset-0 z-10"></canvas>

  <?php include_once 'includes/3d.php'; ?>

  <!-- Overlay Content -->
  <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-4">
    <h1 class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-purple-500 drop-shadow-[0_0_20px_rgba(0,212,255,0.8)] animate-fadeInUp">
      Welcome to Our Association
    </h1>
    <p class="mt-4 text-lg md:text-xl text-gray-300 animate-fadeInUp delay-200">
      Innovating and Inspiring Together
    </p>
    <a href="about.php"
       class="mt-6 px-8 py-3 rounded-2xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold shadow-lg hover:scale-105 transition-transform duration-300 animate-fadeInUp delay-500">
      Learn More
    </a>
  </div>

</section>

<!-- Animations -->
<style>
@keyframes gradientMove {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}
.animate-gradient {
  background-size: 200% 200%;
  animation: gradientMove 12s ease infinite;
}
@keyframes fadeInUp {
  0% {opacity: 0; transform: translateY(30px);}
  100% {opacity: 1; transform: translateY(0);}
}
.animate-fadeInUp {
  animation: fadeInUp 1s ease forwards;
}
.animate-fadeInUp.delay-200 {
  animation-delay: 0.2s;
}
.animate-fadeInUp.delay-500 {
  animation-delay: 0.5s;
}
</style>

<!-- Simple Particle Effect -->
<script>
const canvas = document.getElementById('particles');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let particles = [];

for (let i = 0; i < 100; i++) {
  particles.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    r: Math.random() * 2,
    dx: (Math.random() - 0.5) * 0.5,
    dy: (Math.random() - 0.5) * 0.5
  });
}

function draw() {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  ctx.fillStyle = 'rgba(255,255,255,0.8)';
  particles.forEach(p => {
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.r, 0, Math.PI*2);
    ctx.fill();
    p.x += p.dx;
    p.y += p.dy;
    if(p.x < 0 || p.x > canvas.width) p.dx *= -1;
    if(p.y < 0 || p.y > canvas.height) p.dy *= -1;
  });
  requestAnimationFrame(draw);
}
draw();
</script>

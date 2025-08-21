<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About NEXUS</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
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
        <section class="relative py-24 px-6 text-center">
            <div class="max-w-4xl mx-auto rounded-3xl p-10 shadow-2xl border border-purple-400/40
                        bg-gradient-to-br from-white/10 to-purple-500/5 backdrop-blur-xl transform transition hover:scale-105 duration-500 ease-out">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-xl">
                    Welcome to <span class="text-purple-400">NEXUS</span>
                </h1>
                <p class="text-lg md:text-xl text-purple-100 leading-relaxed drop-shadow-md">
                    NEXUS is the official student association of the Information Technology Department at 
                    <span class="font-semibold text-purple-300">Nadar Saraswathi College of Engineering and Technology (NSCET)</span>. 
                    Established to foster innovation, collaboration, and learning among IT students, NEXUS is created by students and for students.
                </p>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="py-16 px-6 max-w-6xl mx-auto">
            <div class="rounded-3xl p-8 shadow-2xl border border-purple-400/30 bg-gradient-to-br from-white/10 to-purple-500/5 backdrop-blur-xl mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mb-6">Vision & Mission</h2>
                <h3 class="text-xl font-semibold text-white mb-2">Vision:</h3>
                <p class="text-purple-100 mb-4">
                    To create a vibrant community of IT students who are passionate about technology, innovation, and continuous learning.
                </p>
                <h3 class="text-xl font-semibold text-white mb-2">Mission:</h3>
                <ul class="list-disc list-inside text-purple-100 space-y-2">
                    <li>Unite IT students under a single association to promote learning and knowledge-sharing.</li>
                    <li>Encourage students to explore emerging technologies and industry trends.</li>
                    <li>Build leadership, teamwork, and problem-solving skills through events and projects.</li>
                    <li>Organize workshops, hackathons, seminars, and community projects that provide practical experience.</li>
                    <li>Empower students to achieve personal and professional growth while contributing to the IT community.</li>
                </ul>
            </div>
        </section>

        <!-- Objectives Section -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mb-6">Our Objectives</h2>
    <ul class="list-disc list-inside text-purple-100 space-y-2">
        <li><span class="font-semibold">Skill Development:</span> Provide training in coding, AI, cybersecurity, data science, and emerging IT fields.</li>
        <li><span class="font-semibold">Innovation & Creativity:</span> Encourage students to develop innovative projects and solutions.</li>
        <li><span class="font-semibold">Collaboration & Networking:</span> Build a strong community of students who can collaborate, mentor, and inspire each other.</li>
        <li><span class="font-semibold">Exposure to Industry:</span> Connect students with experts, alumni, and professionals through workshops and events.</li>
        <li><span class="font-semibold">Community Engagement:</span> Initiate projects that have a positive impact on society, technology, and the student community.</li>
    </ul>
</section>

<!-- Activities & Programs Section -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mb-6">Activities & Programs</h2>
    <ul class="list-disc list-inside text-purple-100 space-y-2">
        <li><span class="font-semibold">Workshops & Seminars:</span> Hands-on sessions led by industry professionals and alumni.</li>
        <li><span class="font-semibold">Hackathons & Competitions:</span> Platforms for students to solve real-world challenges.</li>
        <li><span class="font-semibold">Tech Talks & Meetups:</span> Knowledge-sharing sessions on emerging trends and technologies.</li>
        <li><span class="font-semibold">Skill Development Programs:</span> Practical training sessions in coding, AI, cybersecurity, and project management.</li>
        <li><span class="font-semibold">Community Projects:</span> Student-led initiatives to apply knowledge in real-world scenarios.</li>
    </ul>
</section>

<!-- Community Section -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mb-6">Our Community</h2>
    <p class="text-purple-100 leading-relaxed">
        NEXUS is entirely student-driven, ensuring that every initiative and event reflects the interests and creativity of its members. 
        The association welcomes all IT students, from beginners to advanced learners, and provides an environment where every member can learn, lead, and contribute.
    </p>
    <p class="text-purple-100 mt-4 leading-relaxed">
        We believe in peer learning, mentorship, and collaboration – the core pillars that make NEXUS a thriving student association.
    </p>
</section>

<!-- Why NEXUS Section -->
<section class="py-16 px-6 max-w-6xl mx-auto mb-24">
    <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mb-6">Why NEXUS?</h2>
    <ul class="list-disc list-inside text-purple-100 space-y-2">
        <li>Learning beyond the classroom through real-world applications.</li>
        <li>Networking with fellow students, alumni, and industry experts.</li>
        <li>Building leadership and teamwork skills.</li>
        <li>Opportunities for innovation and recognition.</li>
        <li>A supportive student community that motivates and inspires.</li>
    </ul>
    <p class="text-purple-100 mt-4 leading-relaxed">
        At NEXUS, we don’t just create events – we create experiences that empower students for life.
    </p>
</section>


    </div>

</body>
</html>

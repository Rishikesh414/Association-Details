<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Events – Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white relative">

    <!-- Navbar -->
    <?php include("includes/navbar.php"); ?>

    <!-- 3D Background (lowest layer) -->
    <div class="absolute inset-0 -z-10">
        <?php include("includes/3d.php"); ?>
    </div>


    <!-- College Banner Section -->
    <section class="relative">
        <!-- Background Image -->
        <img src="./assets/img/Colleg photos.jpg"
            alt="NSCET Banner"
            class="w-full h-96 md:h-[32rem] object-cover">

        <!-- Overlay Text -->
        <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-4">
            <h2 class="text-2xl md:text-4xl font-bold text-white leading-snug">
                NADAR SARASWATHI COLLEGE OF ENGINEERING & TECHNOLOGY
            </h2>
            <p class="mt-4 text-base md:text-lg text-gray-200">
                Approved by AICTE, New Delhi & Affiliated to Anna University, Chennai
            </p>
            <p class="text-base md:text-lg text-gray-200">
                Accredited by NAAC with 'A' Grade | An ISO 9001:2015 Certified Institution
            </p>
            <p class="text-base md:text-lg text-gray-200">
                Vadapudupatti, Annanji (PO), Theni - 625531
            </p>
        </div>
    </section>



    <!-- About -->
    <section id="about" class="relative z-10 py-16 px-6 md:px-20 bg-gray-800/80 rounded-xl my-6">
        <h2 class="text-3xl font-bold text-center mb-4">About the Events</h2>
        <p class="text-center text-gray-300">
            The <span class="text-purple-400 font-semibold">Nexus Association</span> organizes technical workshops,
            coding contests, and innovative competitions to boost skills in AI and IT. Join us and showcase your talent!
        </p>
    </section>

    <!-- Register -->
    <section id="register" class="relative z-10 py-16 px-6 md:px-20">
        <h2 class="text-3xl font-bold text-center mb-6">Register Now</h2>
        <form action="register.php" method="POST" enctype="multipart/form-data"
            class="max-w-2xl mx-auto bg-gray-900/90 p-8 rounded-lg shadow-lg space-y-4">

            <div>
                <label class="block mb-2">Department</label>
                <select name="department" required class="w-full p-2 rounded bg-gray-700 text-white">
                    <option disabled selected>Select Department</option>
                    <option>Information Technology</option>
                    <option>Computer Science</option>
                    <option>AI & DS</option>
                </select>
            </div>

            <div>
                <label class="block mb-2">Year</label>
                <select name="year" required class="w-full p-2 rounded bg-gray-700 text-white">
                    <option disabled selected>Select Year</option>
                    <option>I Year</option>
                    <option>II Year</option>
                    <option>III Year</option>
                    <option>IV Year</option>
                </select>
            </div>

            <div>
                <label class="block mb-2">Phone No</label>
                <input type="tel" name="phone" class="w-full p-2 rounded bg-gray-700 text-white" required>
            </div>

            <div>
                <label class="block mb-2">College Name</label>
                <input type="text" name="college" class="w-full p-2 rounded bg-gray-700 text-white" required>
            </div>

            <div>
                <label class="block mb-2">Transaction Id</label>
                <input type="text" name="transaction" class="w-full p-2 rounded bg-gray-700 text-white" required>
            </div>

            <div>
                <label class="block mb-2">Receipt Upload (Image)</label>
                <input type="file" name="receipt" accept="image/*" class="w-full text-white" required>
            </div>

            <!-- Registration Fee Section -->
            <section class="bg-white py-10 px-6 md:px-20 rounded-lg shadow-md mt-10">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Registration Fee</h2>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border border-gray-300">
                        <thead class="bg-gray-200 text-gray-800">
                            <tr>
                                <th class="px-4 py-2 border">Category</th>
                                <th class="px-4 py-2 border">Fee</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="px-4 py-2 border">UG Students</td>
                                <td class="px-4 py-2 border">Rs. 1000/-</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">PG / Research Scholars / Faculty</td>
                                <td class="px-4 py-2 border">Rs. 1500/-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Note -->
                <p class="text-sm text-gray-600 mt-2 italic">
                    * Maximum 5 participants allowed
                </p>

                <!-- QR Payment -->
                <div class="mt-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Scan QR Code to Pay</h3>
                    <img src="uploads/qr.png" alt="Payment QR Code" class="mx-auto w-64 h-auto rounded-lg shadow-md border" />
                    <p class="mt-4 text-gray-700 font-medium">
                        NADAR SARASWATHI COLLEGE OF ENGINEERING & TECHNOLOGY
                    </p>
                    <p class="text-sm text-gray-500">Use any UPI app (GPay, PhonePe, Paytm, BHIM, etc.)</p>
                </div>
            </section>


            <div class="text-center">
                <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 px-6 py-2 rounded-lg font-semibold">
                    Submit Registration
                </button>
            </div>
        </form>
    </section>

    <!-- Footer -->
    <footer class="relative z-10 bg-gray-900 text-center py-6 border-t border-gray-700">
        <p>&copy; 2025 Nexus Association – Dept. of IT, NSCET</p>
    </footer>
</body>

</html>
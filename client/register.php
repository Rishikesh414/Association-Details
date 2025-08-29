<?php
// --- Database connection ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "event_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// --- Create table if not exists ---
$table_sql = "CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    college VARCHAR(150) NOT NULL,
    transaction_id VARCHAR(100) NOT NULL,
    receipt VARCHAR(255) NOT NULL,
    checked TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($table_sql);

// --- Handle form submission ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $department = $conn->real_escape_string($_POST['department']);
    $year = $conn->real_escape_string($_POST['year']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $college = $conn->real_escape_string($_POST['college']);
    $transaction = $conn->real_escape_string($_POST['transaction']);

    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

    $receipt_name = time() . "_" . basename($_FILES["receipt"]["name"]);
    $target_file = $upload_dir . $receipt_name;

    if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO registrations 
                (name, department, year, phone, college, transaction_id, receipt) 
                VALUES 
                ('$name', '$department', '$year', '$phone', '$college', '$transaction', '$receipt_name')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration Successful!'); window.location.href='register.php';</script>";
        } else echo "Error: " . $conn->error;
    } else echo "Error uploading file.";
}
?>

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

    <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">Register Now</h2>

    <!-- Registration Form -->
    <form action="register.php" method="POST" enctype="multipart/form-data"
      class="max-w-2xl mx-auto bg-gray-800/90 p-8 rounded-2xl shadow-xl space-y-6">

      <!-- Name -->
      <div>
        <label class="block mb-2 font-semibold">Name</label>
        <input type="text" name="name" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Department -->
      <div>
        <label class="block mb-2 font-semibold">Department</label>
        <select name="department" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
          <option disabled selected>Select Department</option>
          <option>Computer Science and Engineering</option>
          <option>Information Technology</option>
          <option>Electronics and Communication Engineering</option>
          <option>Electrical and Electronics Engineering</option>
          <option>Mechanical Engineering</option>
          <option>Civil Engineering</option>
          <option>Artificial Intelligence and Data Science</option>
          <option>Other</option>
        </select>
      </div>

      <!-- Year -->
      <div>
        <label class="block mb-2 font-semibold">Year</label>
        <select name="year" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
          <option disabled selected>Select Year</option>
          <option>I Year</option>
          <option>II Year</option>
          <option>III Year</option>
          <option>IV Year</option>
        </select>
      </div>

      <!-- Phone -->
      <div>
        <label class="block mb-2 font-semibold">Phone No</label>
        <input type="tel" name="phone" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- College -->
      <div>
        <label class="block mb-2 font-semibold">College Name</label>
        <input type="text" name="college" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Transaction -->
      <div>
        <label class="block mb-2 font-semibold">Transaction Id</label>
        <input type="text" name="transaction" required
          class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Receipt -->
      <div>
        <label class="block mb-2 font-semibold">Receipt Upload (Image)</label>
        <input type="file" name="receipt" accept="image/*" required
          class="w-full p-2 rounded-lg bg-gray-700 border border-gray-600 focus:ring-2 focus:ring-purple-500 outline-none">
      </div>

      <!-- Fee Section -->
      <section class="bg-gray-700/80 py-6 px-4 rounded-xl shadow-md mt-8">
        <h2 class="text-xl font-bold text-center mb-4">Registration Fee</h2>
        <table class="table-auto w-full border border-gray-600 text-center">
          <thead class="bg-gray-800">
            <tr>
              <th class="px-4 py-2 border border-gray-600">Category</th>
              <th class="px-4 py-2 border border-gray-600">Fee</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border border-gray-600">Entry Fee <span class="text-sm text-gray-400">(includes lunch)</span></td>
              <td class="px-4 py-2 border border-gray-600 font-semibold text-purple-300">₹300/-</td>
            </tr>
          </tbody>
        </table>
        <p class="text-sm text-gray-300 mt-2 italic text-center">* Maximum 5 participants allowed</p>

        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold mb-3">Scan QR Code to Pay</h3>
          <img src="uploads/qr.png" alt="Payment QR Code"
            class="mx-auto w-56 rounded-lg shadow-md border border-gray-600" />
         
          <p class="text-sm text-gray-400">Use any UPI app (GPay, PhonePe, Paytm, etc.)</p>
        </div>
      </section>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit"
          class="bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg font-semibold shadow-lg transition">
          Submit Registration
        </button>
      </div>
    </form>
  </section>

  <footer class="bg-gray-900 text-center py-6 border-t border-gray-700 relative z-10">
    <p class="uppercase text-sm">&copy; 2025 Nexus Association</p>
  </footer>
</body>
</html>

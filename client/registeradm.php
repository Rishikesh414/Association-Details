<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "event_db";

$host = "localhost";
$user = "nscet_association";
$pass = "nscet@9210";
$dbname = "nscet_association"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Update checked status
if (isset($_GET['toggle'])) {
    $id = intval($_GET['toggle']);
    $conn->query("UPDATE registrations SET checked = 1 - checked WHERE id=$id");
    header("Location: registeradm.php");
    exit;
}

$result = $conn->query("SELECT * FROM registrations ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Registrations</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white p-8">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Admin Panel - Registrations</h1>
    <a href="logout.php" 
       class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg font-semibold shadow-lg transition">
      Logout
    </a>
  </div>
  <div class="overflow-x-auto">
    <table class="table-auto w-full border border-gray-600">
      <thead class="bg-gray-800 text-gray-200">
        <tr>
          <th class="px-4 py-2 border">ID</th>
          <th class="px-4 py-2 border">Name</th>
          <th class="px-4 py-2 border">Department</th>
          <th class="px-4 py-2 border">Year</th>
          <th class="px-4 py-2 border">Phone</th>
          <th class="px-4 py-2 border">College</th>
          <th class="px-4 py-2 border">Transaction</th>
          <th class="px-4 py-2 border">Receipt</th>
          <th class="px-4 py-2 border">Checked</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr class="text-gray-300 hover:bg-gray-800">
            <td class="px-4 py-2 border"><?php echo $row['id']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['name']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['department']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['year']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['phone']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['college']; ?></td>
            <td class="px-4 py-2 border"><?php echo $row['transaction_id']; ?></td>
            <td class="px-4 py-2 border">
              <a href="uploads/<?php echo $row['receipt']; ?>" target="_blank" class="text-purple-400 underline">View</a>
            </td>
            <td class="px-4 py-2 border text-center">
              <a href="registeradm.php?toggle=<?php echo $row['id']; ?>" 
                 class="px-3 py-1 rounded font-semibold 
                        <?php echo $row['checked'] ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700'; ?>">
                <?php echo $row['checked'] ? "✅ Checked" : "❌ Unchecked"; ?>
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
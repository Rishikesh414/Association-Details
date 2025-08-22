<?php
include("../../server/config/db.php");

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect POST data
    $name       = trim($_POST['name'] ?? '');
    $reg_no     = trim($_POST['reg_no'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $year       = trim($_POST['year'] ?? '');

    // Simple validation
    if (empty($name) || empty($reg_no) || empty($email) || empty($department) || empty($year)) {
        die("All fields are required.");
    }

    // Handle photo upload
    $photo_path = NULL;
    if (!empty($_FILES['photo']['name'])) {
        $upload_dir = "uploads/students/";
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . "." . $ext;
        $target = $upload_dir . $filename;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
            $photo_path = "uploads/students/" . $filename;
        } else {
            die("Failed to upload photo.");
        }
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO students (name, reg_no, email, department, year, photo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $reg_no, $email, $department, $year, $photo_path);

    if ($stmt->execute()) {
        // Redirect back to form with success message
        header("Location: ../add_students.php?success=1");
        exit;
    } else {
        die("Database Error: " . $stmt->error);
    }
} else {
    die("Invalid request method.");
}
?>

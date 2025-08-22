<?php
include("../../server/config/db.php");

// Check POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $reg_no = $_POST['reg_no'] ?? '';
    $email = $_POST['email'] ?? '';
    $department = $_POST['department'] ?? '';
    $year = $_POST['year'] ?? '';

    // Handle photo upload
    $photo_path = NULL;
    if (!empty($_FILES['photo']['name'])) {
        $upload_dir = "../uploads/students/";
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . "." . $ext;
        $target = $upload_dir . $filename;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
            $photo_path = "uploads/students/" . $filename;
        }
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO students (name, reg_no, email, department, year, photo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $reg_no, $email, $department, $year, $photo_path);

    if ($stmt->execute()) {
        header("Location: add_students.php?success=1");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

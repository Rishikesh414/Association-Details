<?php
include("../db.php");

// Check POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'] ?? '';
    $achievement_name = $_POST['achievement_name'] ?? '';
    $description = $_POST['description'] ?? NULL;
    $achievement_date = $_POST['achievement_date'] ?? '';
    $position = $_POST['position'] ?? NULL;

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO achievements (student_id, achievement_name, description, achievement_date, position) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $student_id, $achievement_name, $description, $achievement_date, $position);

    if ($stmt->execute()) {
        header("Location: add_achievements.php?success=1");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

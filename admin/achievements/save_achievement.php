<?php
include("../../server/config/db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reg_no = $_POST['reg_no'] ?? '';

    // Fetch student_id from roll number
    $stmt = $conn->prepare("SELECT student_id FROM students WHERE reg_no = ?");
    $stmt->bind_param("s", $reg_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    if (!$student) {
        echo "Error: Student with Roll Number '$reg_no' not found.";
        exit;
    }

    $student_id = $student['student_id'];

    // Get achievements arrays
    $achievement_names = $_POST['achievement_name'] ?? [];
    $descriptions = $_POST['description'] ?? [];
    $dates = $_POST['achievement_date'] ?? [];
    $positions = $_POST['position'] ?? [];

    // Prepare insert statement
    $stmt = $conn->prepare("INSERT INTO achievements (student_id, achievement_name, description, achievement_date, position) VALUES (?, ?, ?, ?, ?)");
    
    for ($i = 0; $i < count($achievement_names); $i++) {
        $name = $achievement_names[$i];
        $desc = $descriptions[$i] ?? NULL;
        $date = $dates[$i];
        $pos = $positions[$i] ?? NULL;

        $stmt->bind_param("issss", $student_id, $name, $desc, $date, $pos);
        $stmt->execute();
    }

    header("Location: ../add_achievements.php?success=1");
    exit;
}
?>

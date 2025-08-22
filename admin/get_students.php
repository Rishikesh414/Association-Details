<?php
include "../server/config/db.php"; // adjust path if needed

// Always return JSON
header("Content-Type: application/json; charset=utf-8");

$student_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($student_id > 0) {
    // ✅ Fetch single student
    $sql = "SELECT student_id, name, reg_no, email, photo, department, year, created_at 
            FROM students 
            WHERE student_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        echo json_encode($result->fetch_assoc(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    } else {
        echo json_encode(["error" => "Student not found"]);
    }
    $stmt->close();
} else {
    // ✅ Fetch all students
    $sql = "SELECT student_id, name, reg_no, email, photo, department, year, created_at FROM students ORDER BY year, name";
    $result = $conn->query($sql);

    $students = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }

    echo json_encode($students, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

$conn->close();

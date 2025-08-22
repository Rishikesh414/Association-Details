<?php
include "../../server/config/db.php";

// Always return JSON
header("Content-Type: application/json; charset=utf-8");

$student_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($student_id <= 0) {
    echo json_encode([]);
    exit;
}

$sql = "
    SELECT 
        achievement_id,
        achievement_name,
        description,
        achievement_date,
        position
    FROM achievements
    WHERE student_id = ?
    ORDER BY achievement_date DESC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

$achievements = [];
while ($row = $result->fetch_assoc()) {
    $achievements[] = $row;
}

echo json_encode($achievements, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$stmt->close();
$conn->close();
?>

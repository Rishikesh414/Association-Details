<?php
include "../../server/config/db.php";

// Always return JSON
header("Content-Type: application/json; charset=utf-8");

// SQL with correct column names + year formatting
$sql = "
    SELECT 
        a.achievement_id, 
        a.achievement_name, 
        a.description, 
        a.achievement_date, 
        a.position,
        s.student_id,
        s.name AS student_name, 
        s.department,
        CASE s.year
            WHEN '1' THEN '1st Year'
            WHEN '2' THEN '2nd Year'
            WHEN '3' THEN '3rd Year'
            WHEN '4' THEN '4th Year'
            ELSE CONCAT(s.year, ' Year')
        END AS year
    FROM achievements a
    JOIN students s ON a.student_id = s.student_id
    ORDER BY s.year, a.achievement_date DESC
";

$result = $conn->query($sql);

$achievements = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $achievements[] = $row;
    }
}

// Output JSON only
echo json_encode($achievements, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Close connection
$conn->close();
?>

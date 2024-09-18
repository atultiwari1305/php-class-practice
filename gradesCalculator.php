<?php
$marks = [85, 78, 92, 74, 88];

$totalMarks = 0;
foreach ($marks as $mark) {
    $totalMarks += $mark;
}

$maxMarks = count($marks) * 100;
$percentage = ($totalMarks / $maxMarks) * 100;

if ($percentage >= 90) {
    $grade = 'A+';
} elseif ($percentage >= 80) {
    $grade = 'A';
} elseif ($percentage >= 70) {
    $grade = 'B+';
} elseif ($percentage >= 60) {
    $grade = 'B';
} elseif ($percentage >= 50) {
    $grade = 'C';
} elseif ($percentage >= 40) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Percentage: " . $percentage . "%\n";
echo "Grade: " . $grade;
?>
</body>
</html>
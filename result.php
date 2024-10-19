<?php
$marks = [];
$totalMarks = 0;
$fail = false;
for ($i = 1; $i <= 5; $i++) {
    $mark = (int) readline("Enter marks for subject $i : ");
    if ($mark < 0 || $mark > 100) {
        echo "Mark range is invalid\n";
        return;
    }
    $marks[] = $mark;
    if ($mark < 33) {
        $fail = true;
    }
    $totalMarks += $mark;
}
if ($fail) {
    echo "Student has failed\n";
} else {
    $averageMarks = $totalMarks / count($marks);
    if ($averageMarks >= 80 && $averageMarks <= 100) {
        $grade = "A+";
    } elseif ($averageMarks >= 70 && $averageMarks < 80) {
        $grade = "A";
    } elseif ($averageMarks >= 60 && $averageMarks < 70) {
        $grade = "A-";
    } elseif ($averageMarks >= 50 && $averageMarks < 60) {
        $grade = "B";
    } elseif ($averageMarks >= 40 && $averageMarks < 50) {
        $grade = "C";
    } elseif ($averageMarks >= 33 && $averageMarks < 40) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}
?>

<!-- grading system -->
<?php
function gradingSystem($score) {
    if ($score >= 91 && $score <= 100) {
        return 'A';
    } elseif ($score >= 81 && $score <= 90) {
        return 'B';
    } elseif ($score >= 71 && $score <= 80) {
        return 'C';
    } elseif ($score >= 61 && $score <= 70) {
        return 'D';
    } elseif ($score >= 51 && $score <= 60) {
        return 'E';
    } else {
        return 'F';
    }
}

$score = readline('Enter the score: ');
    $grade = gradingSystem($score);
    echo "Grade: $grade\n";

?>


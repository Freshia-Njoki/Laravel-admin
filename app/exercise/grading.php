
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

$scores = [88, 76, 94, 81, 89, 72, 95, 78, 87, 91];


foreach ($scores as $score) {
    $grade = gradingSystem($score);
    echo "Score: $score, Grade: $grade\n";
}


$row['eng'] = [
    ["name"=>"Emily Johnson", "eng"=> 88],
    ["name"=>"Liam Smith", "eng"=>76],
];

foreach ($row['eng'] as $row) {
	
    if ($row['eng'] >= 91 && $row['eng'] <= 100) {
        echo "{$row['name']}: Grade: A";
    } elseif ($row['eng'] >= 81 && $row['eng'] <= 90) {
        echo "{$row['name']}: Grade: B";
    } elseif ($row['eng'] >= 71 && $row['eng'] <= 80) {
       echo "{$row['name']}: Grade: C";
    } elseif ($row['eng'] >= 61 && $row['eng'] <= 70) {
        echo "{$row['name']}: Grade: D";
    } elseif ($row['eng'] >= 51 && $row['eng'] <= 60) {
        echo "{$row['name']}: Grade: E";
    } else {
        echo "{$row['name']}: Grade: F";
    }
    
    echo "\n";
}


//ASSOCIATIVE ARRAY IMPLEMENTATION

$row['students'] = [
    [
        "name" => "Sarah Johnson",
        "eng" => 85,
        "math" => 78,
        "kiswahili" => 90
    ],
    [
        "name" => "David Smith",
        "eng" => 92,
        "math" => 88,
        "kiswahili" => 85
    ],
    [
        "name" => "Emily Davis",
        "eng" => 78,
        "math" => 45,
        "kiswahili" => 92
    ],
    [
        "name" => "Michael Brown",
        "eng" => 89,
        "math" => 60,
        "kiswahili" => 84
    ],
    [
        "name" => "Olivia Wilson",
        "eng" => 94,
        "math" => 91,
        "kiswahili" => 89
    ],
    [
        "name" => "William Lee",
        "eng" => 40,
        "math" => 82,
        "kiswahili" => 77
    ],
    [
        "name" => "Sophia Miller",
        "eng" => 88,
        "math" => 57,
        "kiswahili" => 95
    ],
    [
        "name" => "James Anderson",
        "eng" => 91,
        "math" => 86,
        "kiswahili" => 88
    ],
    [
        "name" => "Ava Martinez",
        "eng" => 83,
        "math" => 79,
        "kiswahili" => 92
    ],
    [
        "name" => "Ethan Taylor",
        "eng" => 87,
        "math" => 52,
        "kiswahili" => 87
    ],
];

foreach ($row['students'] as $student) {
    echo "{$student['name']}:\n";
    
    echo "English: Grade: " . calculateGrade($student['eng']) . "\n";
    echo "Math: Grade: " . calculateGrade($student['math']) . "\n";
    echo "Kiswahili: Grade: " . calculateGrade($student['kiswahili']) . "\n";
    
    echo "\n";
}

function calculateGrade($score) {
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

//INDEXED ARRAY IMPLEMENTATION

$students = [
    ["Sarah Johnson", 85, 78, 90],
    ["David Smith", 92, 88, 85],
    ["Emily Davis", 78, 45, 92],
    ["Michael Brown", 89, 60, 84],
    ["Olivia Wilson", 94, 91, 89],
    ["William Lee", 40, 82, 77],
    ["Sophia Miller", 88, 57, 95],
    ["James Anderson", 91, 86, 88],
    ["Ava Martinez", 83, 79, 92],
    ["Ethan Taylor", 87, 52, 87]
];

foreach ($students as $student) {
    $name = $student[0];
    $eng = $student[1];
    $math = $student[2];
    $kiswahili = $student[3];
    
    echo "$name:\n";
    
    echo "English: Grade: " . gradingScores($eng) . "\n";
    echo "Math: Grade: " . gradingScores($math) . "\n";
    echo "Kiswahili: Grade: " . gradingScores($kiswahili) . "\n";
    
    echo "\n";
}

function gradingScores($score) {
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
?>


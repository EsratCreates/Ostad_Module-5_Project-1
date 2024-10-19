<?php
// Function to calculate total marks, average marks, and grade
function calculateResult($marks) {
    $totalMarks = 0;
    $failed = false;
    
    // Validate and calculate total marks
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid<br>";
            return;
        }
        if ($mark < 33) {
            $failed = true;
        }
        $totalMarks += $mark;
    }
    
    // If student has failed
    if ($failed) {
        echo "Result: Failed<br>";
        return;
    }
    
    // Calculate average
    $averageMarks = $totalMarks / count($marks);
    
    // Determine grade using switch-case
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }
    
    // Output the results
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: " . number_format($averageMarks, 2) . "<br>";
    echo "Grade: $grade<br>";
}

// Example marks for five subjects
$marks = array(50, 40, 60, 70, 12);

// Call the function to calculate result
calculateResult($marks);

?>

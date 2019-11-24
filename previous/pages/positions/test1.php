<?php
$students = array(1201=>94,1203=>94,1200=>91, 1205=>89, 1209=>83, 1206=>65, 1202=>41, 1207=>38,1208=>37, 1204=>37,1210=>94);
arsort($students); // Sort the array so the higher scores are on top.

$newStudents = array();
$pos = 0;
$count = 0;
$holder = -1; // Assuming no negative scores.
foreach($students as $k=>$v){
    $count++; // increment real counter
    if($v < $holder || $holder == -1){
        $holder = $v;
        $pos = $count;
    }

    $newStudents[] = makeStudent($pos, $v, $k);
    // If you want the exam # as the array key.
    // $newStudents[$k] = $student;
}

$newStudents = fixLast($newStudents);

// outputs
print_r($newStudents);

foreach($newStudents as $v){
   echo "position : " . $v->position . "<br>";
   echo "score : " . $v->score . "<br>";
   echo "exam : " . $v->exam . "<br>";
}


function makeStudent($pos, $score,$examNo){
    $student = new stdClass(); // You could make a custom, but keeping it simple
    $student->position = $pos;
    $student->score = $score;
    $student->exam = $examNo;

    return $student;
}

function fixLast($students){
    $length = count($students) -1;
    $count = 0;
    $i = $length;
    while($students[$i]->position == $students[--$i]->position){
        $count++;
    }

    for($i = 0; $i <= $count; $i++){
        $students[$length - $i]->position = $students[$length - $i]->position + $count;
    }
    return $students;
}
?>
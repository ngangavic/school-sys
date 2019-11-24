<?php
$students = array(1201=>94,1203=>94,1200=>91, 1205=>89, 1209=>83, 1206=>65, 1202=>41, 1207=>38,1208=>37, 1204=>37,1210=>94);
arsort($students);// It orders high to low by value. You could avoid this with a simple ORDER BY clause in SQL.

$result = array();
$pos = $real_pos = 0;
$prev_score = -1;
foreach ($students as $exam_n => $score) {
    $real_pos += 1;// Natural position.
    $pos = ($prev_score != $score) ? $real_pos : $pos;// If I have same score, I have same position in ranking, otherwise, natural position.
    $result[$exam_n] = array(
                     "score" => $score, 
                     "position" => $pos, 
                     "exam_no" => $exam_n
                     );
    $prev_score = $score;// update last score.
}

$desired = 1207;
print_r($result);
echo "Student " . $result[$desired]["exam_no"] . ", position: " . $result[$desired]["position"] . " and score: ". $result[$desired]["score"];
?>
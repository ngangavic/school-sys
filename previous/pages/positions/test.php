<?php
//include"connection.php";
$students = array(1201=>94,1203=>94,1200=>91, 1205=>89, 1209=>83, 1206=>65, 1202=>41, 1207=>38,1208=>37, 1204=>37,1210=>94);
$exam_nos=(array_keys($students)); 
$marks=(array_values($students));
$i=0;
$occurrences = array_count_values($marks);
$marks = array_unique($marks);
echo '<table border="1">';
foreach($marks as $grade) {
  if($grade == end($marks))$i += $occurrences[$grade]-1;
  echo str_repeat('<tr><td>'.$grade.': '.($i+1).'</td></tr>',$occurrences[$grade]);
  $i += $occurrences[$grade];
}
echo '</table><br />';





?>
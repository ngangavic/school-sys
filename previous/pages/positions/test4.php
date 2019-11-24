<?php
include"connection.php";
$query = mysqli_query($link,"select * from tbl_meanf1t1 where class='form 1' order by mn1 desc");	 
$array = array();

// look through query
while($row = mysqli_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
  echo $row['name'] , $row['mn1'],'</br>'; // etc

}
foreach($array as $grade) {
  if($grade == end($array))$i += $occurrences[$grade]-1;
  echo str_repeat('<tr><td>'.$grade.': '.($i+1).'</td></tr>',$occurrences[$grade]);
  $i += $occurrences[$grade];
}
// debug:
//print_r($array); // show all array data
//echo $array[0]['username']; // print the first rows username

?>
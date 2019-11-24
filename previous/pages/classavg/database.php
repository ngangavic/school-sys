<?php
$check= mysqli_query($link, "select * from tbl_classavgf1t1 ") ;
while($row = mysqli_fetch_array($check)){
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
}
?>
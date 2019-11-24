<?php 
include"connection.php";
$year=date('Y');
//F1T1
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf1t1 WHERE year='$year' ")or die (mysqli_error());
$chart_data= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 1 TERM 1',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F1T2
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf1t2 WHERE year='$year' ")or die (mysqli_error());
$chart_data_2= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 1 TERM 2',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F1T3
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf1t3 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 1 TERM 3',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F2T1
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf2t1 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 2 TERM 1',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F2T2
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf2t2 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 2 TERM 2',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F2T3
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf2t3 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 2 TERM 3',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F3T1
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf3t1 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 3 TERM 1',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F3T2
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf3t2 WHERE year='$year' ")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 3 TERM 2',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F3T3
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf3t3 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 3 TERM 3',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F4T1
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf4t1 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 4 TERM 1',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F4T2
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf4t2 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 4 TERM 2',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}
//F4T3
$query=mysqli_query($link,"SELECT * FROM tbl_classavgf4t3 WHERE year='$year'")or die (mysqli_error());
$chart_data_3= '';
while($row = mysqli_fetch_array($query))
{
	$ex1=$row["ex1"];
	$ex2=$row["ex2"];
	$ex3=$row["ex3"];
	$ex4=$row["ex4"];
	$chart_data.="{name:'FORM 4 TERM 3',exam1:".$ex1.",exam2:".$ex2.",exam3:".$ex3.",avg:".$ex4."},";		
}

//$chart_data = substr($chart_data, 0, -2);

?>
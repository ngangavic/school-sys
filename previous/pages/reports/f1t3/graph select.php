<?php
$sqlmn1= mysqli_query($link, "select * from tbl_meanf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn1)) {
		$t1=$row["mn1"];
		$t2=$row["mn2"];
		$t3=$row["mn3"];
		$t4=$row["mn4"];
		}
$sqlmn2= mysqli_query($link, "select * from tbl_meanf1t2 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn2)) {
		$t5=$row["mn1"];
		$t6=$row["mn2"];
		$t7=$row["mn3"];
		$t8=$row["mn4"];
		}
$sqlmn3= mysqli_query($link, "select * from tbl_meanf1t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn3)) {
		$t9=$row["mn1"];
		$t10=$row["mn2"];
		$t11=$row["mn3"];
		$t12=$row["mn4"];
		}
?>		
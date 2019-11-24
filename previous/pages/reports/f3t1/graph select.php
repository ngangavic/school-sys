<?php
$sqlmn1= mysqli_query($link, "select * from tbl_meanf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn1)) {
		$t1=$row["mn1"];
		$t2=$row["mn2"];
		$t3=$row["mn3"];
		$t4=$row["mn4"];
		
		$p1=$row["p1"];
		$p2=$row["p2"];
		$p3=$row["p3"];
		$p4=$row["p4"];
		}
$sqlmn2= mysqli_query($link, "select * from tbl_meanf1t2 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn2)) {
		$t5=$row["mn1"];
		$t6=$row["mn2"];
		$t7=$row["mn3"];
		$t8=$row["mn4"];
		
		$p5=$row["p1"];
		$p6=$row["p2"];
		$p7=$row["p3"];
		$p8=$row["p4"];
		}
$sqlmn3= mysqli_query($link, "select * from tbl_meanf1t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn3)) {
		$t9=$row["mn1"];
		$t10=$row["mn2"];
		$t11=$row["mn3"];
		$t12=$row["mn4"];
		
		$p9=$row["p1"];
		$p10=$row["p2"];
		$p11=$row["p3"];
		$p12=$row["p4"];
		}
$sqlmn4= mysqli_query($link, "select * from tbl_meanf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn4)) {
		$t13=$row["mn1"];
		$t14=$row["mn2"];
		$t15=$row["mn3"];
		$t16=$row["mn4"];
		
		$p13=$row["p1"];
		$p14=$row["p2"];
		$p15=$row["p3"];
		$p16=$row["p4"];
		}
$sqlmn5= mysqli_query($link, "select * from tbl_meanf2t2 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn5)) {
		$t17=$row["mn1"];
		$t18=$row["mn2"];
		$t19=$row["mn3"];
		$t20=$row["mn4"];
		
		$p17=$row["p1"];
		$p18=$row["p2"];
		$p19=$row["p3"];
		$p20=$row["p4"];
		}
$sqlmn6= mysqli_query($link, "select * from tbl_meanf2t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn6)) {
		$t21=$row["mn1"];
		$t22=$row["mn2"];
		$t23=$row["mn3"];
		$t24=$row["mn4"];
		
		$p21=$row["p1"];
		$p22=$row["p2"];
		$p23=$row["p3"];
		$p24=$row["p4"];
		}
$sqlmn7= mysqli_query($link, "select * from tbl_meanf3t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn7)) {
		$t25=$row["mn1"];
		$t26=$row["mn2"];
		$t27=$row["mn3"];
		$t28=$row["mn4"];
		
		$p25=$row["p1"];
		$p26=$row["p2"];
		$p27=$row["p3"];
		$p28=$row["p4"];
		}
$sqlmn8= mysqli_query($link, "select * from tbl_meanf3t2 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn8)) {
		$t29=$row["mn1"];
		$t30=$row["mn2"];
		$t31=$row["mn3"];
		$t32=$row["mn4"];
		
		$p29=$row["p1"];
		$p30=$row["p2"];
		$p31=$row["p3"];
		$p32=$row["p4"];
		}
$sqlmn9= mysqli_query($link, "select * from tbl_meanf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn9)) {
		$t33=$row["mn1"];
		$t34=$row["mn2"];
		$t35=$row["mn3"];
		$t36=$row["mn4"];
		
		$p33=$row["p1"];
		$p34=$row["p2"];
		$p35=$row["p3"];
		$p36=$row["p4"];
		}
$sqlmn10= mysqli_query($link, "select * from tbl_meanf4t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn10)) {
		$t37=$row["mn1"];
		$t38=$row["mn2"];
		$t39=$row["mn3"];
		$t40=$row["mn4"];
		
		$p37=$row["p1"];
		$p38=$row["p2"];
		$p39=$row["p3"];
		$p40=$row["p4"];
		}
$sqlmn11= mysqli_query($link, "select * from tbl_meanf4t2 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn11)) {
		$t41=$row["mn1"];
		$t42=$row["mn2"];
		$t43=$row["mn3"];
		$t44=$row["mn4"];
		
		$p41=$row["p1"];
		$p42=$row["p2"];
		$p43=$row["p3"];
		$p44=$row["p4"];
		}
$sqlmn12= mysqli_query($link, "select * from tbl_meanf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn12)) {
		$t45=$row["mn1"];
		$t46=$row["mn2"];
		$t47=$row["mn3"];
		$t48=$row["mn4"];
		
		$p45=$row["p1"];
		$p46=$row["p2"];
		$p47=$row["p3"];
		$p48=$row["p4"];
		}
?>
		
<?php
include"connection.php";

$sqleng = mysqli_query($link, "select * from tbl_englishf1t1 where adm='$stdadm'");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex1=$row["ex1"];
		$engex2=$row["ex2"];
		$engex3=$row["ex3"];
		$engex4=$row["ex4"];
		$engg1=$row["g1"];
		$engg2=$row["g2"];
		$engg3=$row["g3"];
		$engg4=$row["g4"];
		$engremarks=$row["remarks1"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex1=$row["ex1"];
		$kisex2=$row["ex2"];
		$kisex3=$row["ex3"];
		$kisex4=$row["ex4"];
		$kisg1=$row["g1"];
		$kisg2=$row["g2"];
		$kisg3=$row["g3"];
		$kisg4=$row["g4"];
		$kisremarks=$row["remarks1"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex1=$row["ex1"];
		$matex2=$row["ex2"];
		$matex3=$row["ex3"];
		$matex4=$row["ex4"];
		$matg1=$row["g1"];
		$matg2=$row["g2"];
		$matg3=$row["g3"];
		$matg4=$row["g4"];
		$matremarks=$row["remarks1"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex1=$row["ex1"];
		$bioex2=$row["ex2"];
		$bioex3=$row["ex3"];
		$bioex4=$row["ex4"];
		$biog1=$row["g1"];
		$biog2=$row["g2"];
		$biog3=$row["g3"];
		$biog4=$row["g4"];
		$bioremarks=$row["remarks1"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex1=$row["ex1"];
		$phyex2=$row["ex2"];
		$phyex3=$row["ex3"];
		$phyex4=$row["ex4"];
		$phyg1=$row["g1"];
		$phyg2=$row["g2"];
		$phyg3=$row["g3"];
		$phyg4=$row["g4"];
		$phyremarks=$row["remarks1"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex1=$row["ex1"];
		$chemex2=$row["ex2"];
		$chemex3=$row["ex3"];
		$chemex4=$row["ex4"];
		$chemg1=$row["g1"];
		$chemg2=$row["g2"];
		$chemg3=$row["g3"];
		$chemg4=$row["g4"];
		$chemremarks=$row["remarks1"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex1=$row["ex1"];
		$geoex2=$row["ex2"];
		$geoex3=$row["ex3"];
		$geoex4=$row["ex4"];
		$geog1=$row["g1"];
		$geog2=$row["g2"];
		$geog3=$row["g3"];
		$geog4=$row["g4"];
		$georemarks=$row["remarks1"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex1=$row["ex1"];
		$compex2=$row["ex2"];
		$compex3=$row["ex3"];
		$compex4=$row["ex4"];
		$compg1=$row["g1"];
		$compg2=$row["g2"];
		$compg3=$row["g3"];
		$compg4=$row["g4"];
		$compremarks=$row["remarks1"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex1=$row["ex1"];
		$creex2=$row["ex2"];
		$creex3=$row["ex3"];
		$creex4=$row["ex4"];
		$creg1=$row["g1"];
		$creg2=$row["g2"];
		$creg3=$row["g3"];
		$creg4=$row["g4"];
		$creremarks=$row["remarks1"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex1=$row["ex1"];
		$hisex2=$row["ex2"];
		$hisex3=$row["ex3"];
		$hisex4=$row["ex4"];
		$hisg1=$row["g1"];
		$hisg2=$row["g2"];
		$hisg3=$row["g3"];
		$hisg4=$row["g4"];
		$hisremarks=$row["remarks1"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf1t1  where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex1=$row["ex1"];
		$busex2=$row["ex2"];
		$busex3=$row["ex3"];
		$busex4=$row["ex4"];
		$busg1=$row["g1"];
		$busg2=$row["g2"];
		$busg3=$row["g3"];
		$busg4=$row["g4"];
		$busremarks=$row["remarks1"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex1=$row["ex1"];
		$musex2=$row["ex2"];
		$musex3=$row["ex3"];
		$musex4=$row["ex4"];
		$musg1=$row["g1"];
		$musg2=$row["g2"];
		$musg3=$row["g3"];
		$musg4=$row["g4"];
		$musremarks=$row["remarks1"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_agriculturef1t1 where adm='$stdadm'") or die(mysql_error());
	while ($row = mysqli_fetch_array($sqlmus)) {
		$agriex1=$row["ex1"];
		$agriex2=$row["ex2"];
		$agriex3=$row["ex3"];
		$agriex4=$row["ex4"];
		$agrig1=$row["g1"];
		$agrig2=$row["g2"];
		$agrig3=$row["g3"];
		$agrig4=$row["g4"];
		$agriremarks=$row["remarks1"];
		}
?>
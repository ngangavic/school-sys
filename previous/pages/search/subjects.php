<?php
$sqleng = mysqli_query($link, "select * from tbl_englishf1t1 where adm='$stdadm' ");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex4f1t1=$row["ex4"];
		$engg4f1t1=$row["g4"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex4f1t1=$row["ex4"];
		$kisg4f1t1=$row["g4"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex4f1t1=$row["ex4"];
		$matg4f1t1=$row["g4"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex4f1t1=$row["ex4"];
		$biog4f1t1=$row["g4"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex4f1t1=$row["ex4"];
		$phyg4f1t1=$row["g4"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex4f1t1=$row["ex4"];
		$chemg4f1t1=$row["g4"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex4f1t1=$row["ex4"];
		$geog4f1t1=$row["g4"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex4f1t1=$row["ex4"];
		$compg4f1t1=$row["g4"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex4f1t1=$row["ex4"];
		$creg4f1t1=$row["g4"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex4f1t1=$row["ex4"];
		$hisg4f1t1=$row["g4"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex4f1t1=$row["ex4"];
		$busg4f1t1=$row["g4"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex4f1t1=$row["ex4"];
		$musg4f1t1=$row["g4"];
		}
$sqlagri= mysqli_query($link, "select * from tbl_agriculturef1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlagri)) {
		$agriex4f1t1=$row["ex4"];
		$agrig4f1t1=$row["g4"];
		}			
$sqlmean= mysqli_query($link, "select * from tbl_meanf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmean)) {
		$total4f1t1=$row["t4"];
		$mean4f1t1=$row["mn4"];
		$gr4f1t1=$row["gr4"];
		
		}
$sqlpos= mysqli_query($link, "select * from tbl_positonsf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlpos)) {
		$p4f1t1=$row["p4"];
		}
$stddetails = mysqli_query($link,"select * from tbl_students where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}	
$sqlmn= mysqli_query($link, "select * from tbl_lastmeanf1t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn)) {
		$tmn=$row["tmn"];
		$tgr=$row["tgr"];
		$tt=$row["tt"];
		$mnremarks=$row["remarks"];
		}
?>
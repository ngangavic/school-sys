<?php
$sqleng = mysqli_query($link, "select * from tbl_englishf3t3 where adm='$stdadm' ");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex4f3t3=$row["ex4"];
		$engg4f3t3=$row["g4"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex4f3t3=$row["ex4"];
		$kisg4f3t3=$row["g4"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex4f3t3=$row["ex4"];
		$matg4f3t3=$row["g4"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex4f3t3=$row["ex4"];
		$biog4f3t3=$row["g4"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex4f3t3=$row["ex4"];
		$phyg4f3t3=$row["g4"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex4f3t3=$row["ex4"];
		$chemg4f3t3=$row["g4"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex4f3t3=$row["ex4"];
		$geog4f3t3=$row["g4"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex4f3t3=$row["ex4"];
		$compg4f3t3=$row["g4"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex4f3t3=$row["ex4"];
		$creg4f3t3=$row["g4"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex4f3t3=$row["ex4"];
		$hisg4f3t3=$row["g4"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex4f3t3=$row["ex4"];
		$busg4f3t3=$row["g4"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex4f3t3=$row["ex4"];
		$musg4f3t3=$row["g4"];
		}
$sqlagri= mysqli_query($link, "select * from tbl_agriculturef3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlagri)) {
		$agriex4f3t3=$row["ex4"];
		$agrig4f3t3=$row["g4"];
		}			
$sqlmean= mysqli_query($link, "select * from tbl_meanf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmean)) {
		$total4f3t3=$row["t4"];
		$mean4f3t3=$row["mn4"];
		$gr4f3t3=$row["gr4"];
		
		}
$sqlpos= mysqli_query($link, "select * from tbl_positonsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlpos)) {
		$p4f3t3=$row["p4"];
		}
$stddetails = mysqli_query($link,"select * from tbl_students where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}	
$sqlmn= mysqli_query($link, "select * from tbl_lastmeanf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn)) {
		$tmn=$row["tmn"];
		$tgr=$row["tgr"];
		$tt=$row["tt"];
		$mnremarks=$row["remarks"];
		}
?>
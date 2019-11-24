<?php
$sqleng = mysqli_query($link, "select * from tbl_englishf4t3 where adm='$stdadm' ");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex4f4t3=$row["ex4"];
		$engg4f4t3=$row["g4"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex4f4t3=$row["ex4"];
		$kisg4f4t3=$row["g4"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex4f4t3=$row["ex4"];
		$matg4f4t3=$row["g4"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex4f4t3=$row["ex4"];
		$biog4f4t3=$row["g4"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex4f4t3=$row["ex4"];
		$phyg4f4t3=$row["g4"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex4f4t3=$row["ex4"];
		$chemg4f4t3=$row["g4"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex4f4t3=$row["ex4"];
		$geog4f4t3=$row["g4"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex4f4t3=$row["ex4"];
		$compg4f4t3=$row["g4"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex4f4t3=$row["ex4"];
		$creg4f4t3=$row["g4"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex4f4t3=$row["ex4"];
		$hisg4f4t3=$row["g4"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex4f4t3=$row["ex4"];
		$busg4f4t3=$row["g4"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex4f4t3=$row["ex4"];
		$musg4f4t3=$row["g4"];
		}
$sqlagri= mysqli_query($link, "select * from tbl_agriculturef4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlagri)) {
		$agriex4f4t3=$row["ex4"];
		$agrig4f4t3=$row["g4"];
		}			
$sqlmean= mysqli_query($link, "select * from tbl_meanf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmean)) {
		$total4f4t3=$row["t4"];
		$mean4f4t3=$row["mn4"];
		$gr4f4t3=$row["gr4"];
		
		}
$sqlpos= mysqli_query($link, "select * from tbl_positonsf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlpos)) {
		$p4f4t3=$row["p4"];
		}
$stddetails = mysqli_query($link,"select * from tbl_students where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}	
$sqlmn= mysqli_query($link, "select * from tbl_lastmeanf4t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn)) {
		$tmn=$row["tmn"];
		$tgr=$row["tgr"];
		$tt=$row["tt"];
		$mnremarks=$row["remarks"];
		}
?>
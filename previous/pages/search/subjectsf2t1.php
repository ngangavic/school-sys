<?php
$sqleng = mysqli_query($link, "select * from tbl_englishf2t1 where adm='$stdadm' ");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex4f2t1=$row["ex4"];
		$engg4f2t1=$row["g4"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex4f2t1=$row["ex4"];
		$kisg4f2t1=$row["g4"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex4f2t1=$row["ex4"];
		$matg4f2t1=$row["g4"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex4f2t1=$row["ex4"];
		$biog4f2t1=$row["g4"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex4f2t1=$row["ex4"];
		$phyg4f2t1=$row["g4"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex4f2t1=$row["ex4"];
		$chemg4f2t1=$row["g4"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex4f2t1=$row["ex4"];
		$geog4f2t1=$row["g4"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex4f2t1=$row["ex4"];
		$compg4f2t1=$row["g4"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex4f2t1=$row["ex4"];
		$creg4f2t1=$row["g4"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex4f2t1=$row["ex4"];
		$hisg4f2t1=$row["g4"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex4f2t1=$row["ex4"];
		$busg4f2t1=$row["g4"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex4f2t1=$row["ex4"];
		$musg4f2t1=$row["g4"];
		}
$sqlagri= mysqli_query($link, "select * from tbl_agriculturef2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlagri)) {
		$agriex4f2t1=$row["ex4"];
		$agrig4f2t1=$row["g4"];
		}			
$sqlmean= mysqli_query($link, "select * from tbl_meanf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmean)) {
		$total4f2t1=$row["t4"];
		$mean4f2t1=$row["mn4"];
		$gr4f2t1=$row["gr4"];
		
		}
$sqlpos= mysqli_query($link, "select * from tbl_positonsf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlpos)) {
		$p4f2t1=$row["p4"];
		}
$stddetails = mysqli_query($link,"select * from tbl_students where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}	
$sqlmn= mysqli_query($link, "select * from tbl_lastmeanf2t1 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn)) {
		$tmn=$row["tmn"];
		$tgr=$row["tgr"];
		$tt=$row["tt"];
		$mnremarks=$row["remarks"];
		}
?>
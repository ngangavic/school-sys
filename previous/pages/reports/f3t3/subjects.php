<?php
$sqleng = mysqli_query($link, "select * from tbl_englishf3t3 where adm='$stdadm' ");
	while ($row = mysqli_fetch_array($sqleng)) {
		$engex1=$row["ex1"];
		$engex2=$row["ex2"];
		$engex3=$row["ex3"];
		$engex4=$row["ex4"];
		$engg1=$row["g1"];
		$engg2=$row["g2"];
		$engg3=$row["g3"];
		$engg4=$row["g4"];
		$engremarks1=$row["remarks1"];
		$engremarks2=$row["remarks2"];
		$engremarks3=$row["remarks3"];
		$engremarks4=$row["remarks4"];
		}
$sqlkis= mysqli_query($link, "select * from tbl_kiswahilif3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlkis)) {
		$kisex1=$row["ex1"];
		$kisex2=$row["ex2"];
		$kisex3=$row["ex3"];
		$kisex4=$row["ex4"];
		$kisg1=$row["g1"];
		$kisg2=$row["g2"];
		$kisg3=$row["g3"];
		$kisg4=$row["g4"];
		$kisremarks1=$row["remarks1"];
		$kisremarks2=$row["remarks2"];
		$kisremarks3=$row["remarks3"];
		$kisremarks4=$row["remarks4"];
		}	
$sqlmat= mysqli_query($link, "select * from tbl_mathsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmat)) {
		$matex1=$row["ex1"];
		$matex2=$row["ex2"];
		$matex3=$row["ex3"];
		$matex4=$row["ex4"];
		$matg1=$row["g1"];
		$matg2=$row["g2"];
		$matg3=$row["g3"];
		$matg4=$row["g4"];
		$matremarks1=$row["remarks1"];
		$matremarks2=$row["remarks2"];
		$matremarks3=$row["remarks3"];
		$matremarks4=$row["remarks4"];
		} 
$sqlbio= mysqli_query($link, "select * from tbl_biologyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbio)) {
		$bioex1=$row["ex1"];
		$bioex2=$row["ex2"];
		$bioex3=$row["ex3"];
		$bioex4=$row["ex4"];
		$biog1=$row["g1"];
		$biog2=$row["g2"];
		$biog3=$row["g3"];
		$biog4=$row["g4"];
		$bioremarks1=$row["remarks1"];
		$bioremarks2=$row["remarks2"];
		$bioremarks3=$row["remarks3"];
		$bioremarks4=$row["remarks4"];
		}
$sqlphy= mysqli_query($link, "select * from tbl_physicsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlphy)) {
		$phyex1=$row["ex1"];
		$phyex2=$row["ex2"];
		$phyex3=$row["ex3"];
		$phyex4=$row["ex4"];
		$phyg1=$row["g1"];
		$phyg2=$row["g2"];
		$phyg3=$row["g3"];
		$phyg4=$row["g4"];
		$phyremarks1=$row["remarks1"];
		$phyremarks2=$row["remarks2"];
		$phyremarks3=$row["remarks3"];
		$phyremarks4=$row["remarks4"];
		}
$sqlchem= mysqli_query($link, "select * from tbl_chemistryf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlchem)) {
		$chemex1=$row["ex1"];
		$chemex2=$row["ex2"];
		$chemex3=$row["ex3"];
		$chemex4=$row["ex4"];
		$chemg1=$row["g1"];
		$chemg2=$row["g2"];
		$chemg3=$row["g3"];
		$chemg4=$row["g4"];
		$chemremarks1=$row["remarks1"];
		$chemremarks2=$row["remarks2"];
		$chemremarks3=$row["remarks3"];
		$chemremarks4=$row["remarks4"];
		}
$sqlgeo= mysqli_query($link, "select * from tbl_geographyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlgeo)) {
		$geoex1=$row["ex1"];
		$geoex2=$row["ex2"];
		$geoex3=$row["ex3"];
		$geoex4=$row["ex4"];
		$geog1=$row["g1"];
		$geog2=$row["g2"];
		$geog3=$row["g3"];
		$geog4=$row["g4"];
		$georemarks1=$row["remarks1"];
		$georemarks2=$row["remarks2"];
		$georemarks3=$row["remarks3"];
		$georemarks4=$row["remarks4"];
		}
$sqlcomp= mysqli_query($link, "select * from tbl_computerf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcomp)) {
		$compex1=$row["ex1"];
		$compex2=$row["ex2"];
		$compex3=$row["ex3"];
		$compex4=$row["ex4"];
		$compg1=$row["g1"];
		$compg2=$row["g2"];
		$compg3=$row["g3"];
		$compg4=$row["g4"];
		$compremarks1=$row["remarks1"];
		$compremarks2=$row["remarks2"];
		$compremarks3=$row["remarks3"];
		$compremarks4=$row["remarks4"];
		}
$sqlcre= mysqli_query($link, "select * from tbl_cref3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlcre)) {
		$creex1=$row["ex1"];
		$creex2=$row["ex2"];
		$creex3=$row["ex3"];
		$creex4=$row["ex4"];
		$creg1=$row["g1"];
		$creg2=$row["g2"];
		$creg3=$row["g3"];
		$creg4=$row["g4"];
		$creremarks1=$row["remarks1"];
		$creremarks2=$row["remarks2"];
		$creremarks3=$row["remarks3"];
		$creremarks4=$row["remarks4"];
		}
$sqlhis= mysqli_query($link, "select * from tbl_historyf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlhis)) {
		$hisex1=$row["ex1"];
		$hisex2=$row["ex2"];
		$hisex3=$row["ex3"];
		$hisex4=$row["ex4"];
		$hisg1=$row["g1"];
		$hisg2=$row["g2"];
		$hisg3=$row["g3"];
		$hisg4=$row["g4"];
		$hisremarks1=$row["remarks1"];
		$hisremarks2=$row["remarks2"];
		$hisremarks3=$row["remarks3"];
		$hisremarks4=$row["remarks4"];
		}
$sqlbus= mysqli_query($link, "select * from tbl_businessf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlbus)) {
		$busex1=$row["ex1"];
		$busex2=$row["ex2"];
		$busex3=$row["ex3"];
		$busex4=$row["ex4"];
		$busg1=$row["g1"];
		$busg2=$row["g2"];
		$busg3=$row["g3"];
		$busg4=$row["g4"];
		$busremarks1=$row["remarks1"];
		$busremarks2=$row["remarks2"];
		$busremarks3=$row["remarks3"];
		$busremarks4=$row["remarks4"];
		}
$sqlmus= mysqli_query($link, "select * from tbl_musicf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmus)) {
		$musex1=$row["ex1"];
		$musex2=$row["ex2"];
		$musex3=$row["ex3"];
		$musex4=$row["ex4"];
		$musg1=$row["g1"];
		$musg2=$row["g2"];
		$musg3=$row["g3"];
		$musg4=$row["g4"];
		$musremarks1=$row["remarks1"];
		$musremarks2=$row["remarks2"];
		$musremarks3=$row["remarks3"];
		$musremarks4=$row["remarks4"];
		}
$sqlagri= mysqli_query($link, "select * from tbl_agriculturef3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlagri)) {
		$agriex1=$row["ex1"];
		$agriex2=$row["ex2"];
		$agriex3=$row["ex3"];
		$agriex4=$row["ex4"];
		$agrig1=$row["g1"];
		$agrig2=$row["g2"];
		$agrig3=$row["g3"];
		$agrig4=$row["g4"];
		$agriremarks1=$row["remarks1"];
		$agriremarks2=$row["remarks2"];
		$agriremarks3=$row["remarks3"];
		$agriremarks4=$row["remarks4"];
		}			
$sqlmean= mysqli_query($link, "select * from tbl_meanf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmean)) {
		$total1=$row["t1"];
		$mean1=$row["mn1"];
		$points1=$row["p1"];
		$gr1=$row["gr1"];
		$total2=$row["t2"];
		$mean2=$row["mn2"];
		$points2=$row["p2"];
		$gr2=$row["gr2"];
		$total3=$row["t3"];
		$mean3=$row["mn3"];
		$points3=$row["p3"];
		$gr3=$row["gr3"];
		$total4=$row["t4"];
		$mean4=$row["mn4"];
		$points4=$row["p4"];
		$gr4=$row["gr4"];
		
		}
$sqlpos= mysqli_query($link, "select * from tbl_positonsf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlpos)) {
		$p1=$row["p1"];
		$p2=$row["p2"];
		$p3=$row["p3"];
		$p4=$row["p4"];
		}
/*$stddetails = mysqli_query($link,"select * from tbl_students where class='form 3' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}*/					
$sqlmn= mysqli_query($link, "select * from tbl_lastmeanf3t3 where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($sqlmn)) {
		$tmn=$row["tmn"];
		$tgr=$row["tgr"];
		$tt=$row["tt"];
		$mnremarks=$row["remarks"];
		}
		
$yearNow=date('Y');	
$selectSubjAvg1=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='english' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg1)){
	$engAVG1=$row['ex1'];
	$engAVG2=$row['ex2'];
	$engAVG3=$row['ex3'];
	$engAVG4=$row['ex4'];
}
$selectSubjAvg2=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='kiswahili' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg2)){
	$kisAVG1=$row['ex1'];
	$kisAVG2=$row['ex2'];
	$kisAVG3=$row['ex3'];
	$kisAVG4=$row['ex4'];
}
$selectSubjAvg3=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='maths' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg3)){
	$matAVG1=$row['ex1'];
	$matAVG2=$row['ex2'];
	$matAVG3=$row['ex3'];
	$matAVG4=$row['ex4'];
}
$selectSubjAvg4=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='biology' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg4)){
	$bioAVG1=$row['ex1'];
	$bioAVG2=$row['ex2'];
	$bioAVG3=$row['ex3'];
	$bioAVG4=$row['ex4'];
}
$selectSubjAvg5=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='chemistry' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg5)){
	$chemAVG1=$row['ex1'];
	$chemAVG2=$row['ex2'];
	$chemAVG3=$row['ex3'];
	$chemAVG4=$row['ex4'];
}
$selectSubjAvg6=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='physics' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg6)){
	$phyAVG1=$row['ex1'];
	$phyAVG2=$row['ex2'];
	$phyAVG3=$row['ex3'];
	$phyAVG4=$row['ex4'];
}
$selectSubjAvg7=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='geography' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg7)){
	$geoAVG1=$row['ex1'];
	$geoAVG2=$row['ex2'];
	$geoAVG3=$row['ex3'];
	$geoAVG4=$row['ex4'];
}
$selectSubjAvg8=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='history' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg8)){
	$hisAVG1=$row['ex1'];
	$hisAVG2=$row['ex2'];
	$hisAVG3=$row['ex3'];
	$hisAVG4=$row['ex4'];
}
$selectSubjAvg9=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='cre' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg9)){
	$creAVG1=$row['ex1'];
	$creAVG2=$row['ex2'];
	$creAVG3=$row['ex3'];
	$creAVG4=$row['ex4'];
}
$selectSubjAvg10=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='agriculture' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg10)){
	$agriAVG1=$row['ex1'];
	$agriAVG2=$row['ex2'];
	$agriAVG3=$row['ex3'];
	$agriAVG4=$row['ex4'];
}
$selectSubjAvg11=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE year='$yearNow' AND subject='business' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg11)){
	$busAVG1=$row['ex1'];
	$busAVG2=$row['ex2'];
	$busAVG3=$row['ex3'];
	$busAVG4=$row['ex4'];
}
	
$selectClassAvg=mysqli_query($link,"SELECT * FROM tbl_classavgf3t3 WHERE year='$yearNow' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectClassAvg)){
	$classAVG1=$row['ex1'];
	$classAVG2=$row['ex2'];
	$classAVG3=$row['ex3'];
	$classAVG4=$row['ex4'];
}	
		
		
		
		
		
?>	
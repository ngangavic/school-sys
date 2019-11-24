<?php
include'connection.php';
include"header_scripts.php";
echo '<div class="alert alert-warning">
              <strong>Data is being updated.</strong>It might take sometime.</br> Please wait... 
           </div>';


$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$class=$_POST['class'];
$kcpe=$_POST['kcpe'];
$house=$_POST['house'];

$N = count($id);
for($i=0; $i < $N; $i++)
{ 
    //UPDATE students table
	$result = mysqli_query($link,"UPDATE tbl_students SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]',kcpe='$kcpe[$i]',house='$house[$i]',class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE agriculture table
	$result2 = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result3 = mysqli_query($link,"UPDATE tbl_agriculturef1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result4 = mysqli_query($link,"UPDATE tbl_agriculturef1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result5 = mysqli_query($link,"UPDATE tbl_agriculturef2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result6 = mysqli_query($link,"UPDATE tbl_agriculturef2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result7 = mysqli_query($link,"UPDATE tbl_agriculturef2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result8 = mysqli_query($link,"UPDATE tbl_agriculturef3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result9 = mysqli_query($link,"UPDATE tbl_agriculturef3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result10 = mysqli_query($link,"UPDATE tbl_agriculturef3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result11 = mysqli_query($link,"UPDATE tbl_agriculturef4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result12 = mysqli_query($link,"UPDATE tbl_agriculturef4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result13 = mysqli_query($link,"UPDATE tbl_agriculturef4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table biology
	$result14 = mysqli_query($link,"UPDATE tbl_biologyf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result15 = mysqli_query($link,"UPDATE tbl_biologyf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result16 = mysqli_query($link,"UPDATE tbl_biologyf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result17 = mysqli_query($link,"UPDATE tbl_biologyf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result18 = mysqli_query($link,"UPDATE tbl_biologyf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result19 = mysqli_query($link,"UPDATE tbl_biologyf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result20 = mysqli_query($link,"UPDATE tbl_biologyf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result21 = mysqli_query($link,"UPDATE tbl_biologyf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result22 = mysqli_query($link,"UPDATE tbl_biologyf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result23 = mysqli_query($link,"UPDATE tbl_biologyf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result24 = mysqli_query($link,"UPDATE tbl_biologyf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result25 = mysqli_query($link,"UPDATE tbl_biologyf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table business
	$result26 = mysqli_query($link,"UPDATE tbl_businessf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result27 = mysqli_query($link,"UPDATE tbl_businessf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result28 = mysqli_query($link,"UPDATE tbl_businessf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result29 = mysqli_query($link,"UPDATE tbl_businessf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result30 = mysqli_query($link,"UPDATE tbl_businessf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result31 = mysqli_query($link,"UPDATE tbl_businessf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result32 = mysqli_query($link,"UPDATE tbl_businessf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result33 = mysqli_query($link,"UPDATE tbl_businessf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result34 = mysqli_query($link,"UPDATE tbl_businessf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result35 = mysqli_query($link,"UPDATE tbl_businessf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result36 = mysqli_query($link,"UPDATE tbl_businessf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result37 = mysqli_query($link,"UPDATE tbl_businessf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table chemistry
	$result38 = mysqli_query($link,"UPDATE tbl_chemistryf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result39 = mysqli_query($link,"UPDATE tbl_chemistryf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result40 = mysqli_query($link,"UPDATE tbl_chemistryf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result41 = mysqli_query($link,"UPDATE tbl_chemistryf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result42 = mysqli_query($link,"UPDATE tbl_chemistryf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result43 = mysqli_query($link,"UPDATE tbl_chemistryf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result44 = mysqli_query($link,"UPDATE tbl_chemistryf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result45 = mysqli_query($link,"UPDATE tbl_chemistryf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result46 = mysqli_query($link,"UPDATE tbl_chemistryf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result47 = mysqli_query($link,"UPDATE tbl_chemistryf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result48 = mysqli_query($link,"UPDATE tbl_chemistryf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result49 = mysqli_query($link,"UPDATE tbl_chemistryf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table computer
	$result50 = mysqli_query($link,"UPDATE tbl_computerf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result51 = mysqli_query($link,"UPDATE tbl_computerf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result52 = mysqli_query($link,"UPDATE tbl_computerf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result53 = mysqli_query($link,"UPDATE tbl_computerf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result54 = mysqli_query($link,"UPDATE tbl_computerf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result55 = mysqli_query($link,"UPDATE tbl_computerf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result56 = mysqli_query($link,"UPDATE tbl_computerf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result57 = mysqli_query($link,"UPDATE tbl_computerf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result58 = mysqli_query($link,"UPDATE tbl_computerf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result59 = mysqli_query($link,"UPDATE tbl_computerf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result60 = mysqli_query($link,"UPDATE tbl_computerf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result61 = mysqli_query($link,"UPDATE tbl_computerf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table cre
	$result62 = mysqli_query($link,"UPDATE tbl_cref1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result63 = mysqli_query($link,"UPDATE tbl_cref1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result64 = mysqli_query($link,"UPDATE tbl_cref1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result65 = mysqli_query($link,"UPDATE tbl_cref2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result66 = mysqli_query($link,"UPDATE tbl_cref2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result67 = mysqli_query($link,"UPDATE tbl_cref2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result68 = mysqli_query($link,"UPDATE tbl_cref3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result69 = mysqli_query($link,"UPDATE tbl_cref3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result70 = mysqli_query($link,"UPDATE tbl_cref3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result71 = mysqli_query($link,"UPDATE tbl_cref4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result72 = mysqli_query($link,"UPDATE tbl_cref4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result73 = mysqli_query($link,"UPDATE tbl_cref4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table english
	$result74 = mysqli_query($link,"UPDATE tbl_englishf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result75 = mysqli_query($link,"UPDATE tbl_englishf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result76 = mysqli_query($link,"UPDATE tbl_englishf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result77 = mysqli_query($link,"UPDATE tbl_englishf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result78 = mysqli_query($link,"UPDATE tbl_englishf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result79 = mysqli_query($link,"UPDATE tbl_englishf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result80 = mysqli_query($link,"UPDATE tbl_englishf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result81 = mysqli_query($link,"UPDATE tbl_englishf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result82 = mysqli_query($link,"UPDATE tbl_englishf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result83 = mysqli_query($link,"UPDATE tbl_englishf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result84 = mysqli_query($link,"UPDATE tbl_englishf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result85 = mysqli_query($link,"UPDATE tbl_englishf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table geography
	$result86 = mysqli_query($link,"UPDATE tbl_geographyf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result87 = mysqli_query($link,"UPDATE tbl_geographyf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result88 = mysqli_query($link,"UPDATE tbl_geographyf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result89 = mysqli_query($link,"UPDATE tbl_geographyf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result90 = mysqli_query($link,"UPDATE tbl_geographyf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result91 = mysqli_query($link,"UPDATE tbl_geographyf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result92 = mysqli_query($link,"UPDATE tbl_geographyf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result93 = mysqli_query($link,"UPDATE tbl_geographyf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result94 = mysqli_query($link,"UPDATE tbl_geographyf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result95 = mysqli_query($link,"UPDATE tbl_geographyf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result96 = mysqli_query($link,"UPDATE tbl_geographyf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result97 = mysqli_query($link,"UPDATE tbl_geographyf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table history
	$result98 = mysqli_query($link,"UPDATE tbl_historyf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result99 = mysqli_query($link,"UPDATE tbl_historyf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result100 = mysqli_query($link,"UPDATE tbl_historyf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result101 = mysqli_query($link,"UPDATE tbl_historyf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result102 = mysqli_query($link,"UPDATE tbl_historyf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result103 = mysqli_query($link,"UPDATE tbl_historyf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result104 = mysqli_query($link,"UPDATE tbl_historyf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result105 = mysqli_query($link,"UPDATE tbl_historyf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result106 = mysqli_query($link,"UPDATE tbl_historyf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result107 = mysqli_query($link,"UPDATE tbl_historyf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result108 = mysqli_query($link,"UPDATE tbl_historyf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result109 = mysqli_query($link,"UPDATE tbl_historyf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table kiswahili
	$result110 = mysqli_query($link,"UPDATE tbl_kiswahilif1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result111 = mysqli_query($link,"UPDATE tbl_kiswahilif1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result112 = mysqli_query($link,"UPDATE tbl_kiswahilif1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result113 = mysqli_query($link,"UPDATE tbl_kiswahilif2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result114 = mysqli_query($link,"UPDATE tbl_kiswahilif2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result115 = mysqli_query($link,"UPDATE tbl_kiswahilif2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result116 = mysqli_query($link,"UPDATE tbl_kiswahilif3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result117 = mysqli_query($link,"UPDATE tbl_kiswahilif3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result118 = mysqli_query($link,"UPDATE tbl_kiswahilif3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result119 = mysqli_query($link,"UPDATE tbl_kiswahilif4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result120 = mysqli_query($link,"UPDATE tbl_kiswahilif4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result121 = mysqli_query($link,"UPDATE tbl_kiswahilif4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table maths
	$result122 = mysqli_query($link,"UPDATE tbl_mathsf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result123 = mysqli_query($link,"UPDATE tbl_mathsf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result124 = mysqli_query($link,"UPDATE tbl_mathsf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result125 = mysqli_query($link,"UPDATE tbl_mathsf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result126 = mysqli_query($link,"UPDATE tbl_mathsf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result127 = mysqli_query($link,"UPDATE tbl_mathsf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result128 = mysqli_query($link,"UPDATE tbl_mathsf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result129 = mysqli_query($link,"UPDATE tbl_mathsf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result130 = mysqli_query($link,"UPDATE tbl_mathsf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result131 = mysqli_query($link,"UPDATE tbl_mathsf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result132 = mysqli_query($link,"UPDATE tbl_mathsf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result133 = mysqli_query($link,"UPDATE tbl_mathsf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table physics
	$result134 = mysqli_query($link,"UPDATE tbl_physicsf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result135 = mysqli_query($link,"UPDATE tbl_physicsf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result136 = mysqli_query($link,"UPDATE tbl_physicsf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result137 = mysqli_query($link,"UPDATE tbl_physicsf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result138 = mysqli_query($link,"UPDATE tbl_physicsf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result139 = mysqli_query($link,"UPDATE tbl_physicsf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result140 = mysqli_query($link,"UPDATE tbl_physicsf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result141 = mysqli_query($link,"UPDATE tbl_physicsf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result142 = mysqli_query($link,"UPDATE tbl_physicsf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result143 = mysqli_query($link,"UPDATE tbl_physicsf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result145 = mysqli_query($link,"UPDATE tbl_physicsf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result146 = mysqli_query($link,"UPDATE tbl_physicsf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table mean
	$result147 = mysqli_query($link,"UPDATE tbl_meanf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result148 = mysqli_query($link,"UPDATE tbl_meanf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result149 = mysqli_query($link,"UPDATE tbl_meanf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result150 = mysqli_query($link,"UPDATE tbl_meanf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result151 = mysqli_query($link,"UPDATE tbl_meanf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result152 = mysqli_query($link,"UPDATE tbl_meanf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result153 = mysqli_query($link,"UPDATE tbl_meanf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result154 = mysqli_query($link,"UPDATE tbl_meanf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result155 = mysqli_query($link,"UPDATE tbl_meanf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result156 = mysqli_query($link,"UPDATE tbl_meanf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result157 = mysqli_query($link,"UPDATE tbl_meanf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result158 = mysqli_query($link,"UPDATE tbl_meanf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table tbl_lastmean
	$result159 = mysqli_query($link,"UPDATE tbl_lastmeanf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result160 = mysqli_query($link,"UPDATE tbl_lastmeanf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result161 = mysqli_query($link,"UPDATE tbl_lastmeanf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result162 = mysqli_query($link,"UPDATE tbl_lastmeanf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result163 = mysqli_query($link,"UPDATE tbl_lastmeanf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result164 = mysqli_query($link,"UPDATE tbl_lastmeanf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result165 = mysqli_query($link,"UPDATE tbl_lastmeanf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result166 = mysqli_query($link,"UPDATE tbl_lastmeanf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result167 = mysqli_query($link,"UPDATE tbl_lastmeanf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result168 = mysqli_query($link,"UPDATE tbl_lastmeanf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result169 = mysqli_query($link,"UPDATE tbl_lastmeanf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result170 = mysqli_query($link,"UPDATE tbl_lastmeanf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table tbl_positons
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf1t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf1t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf1t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf2t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf2t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf2t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf3t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf3t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf3t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf4t1 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf4t2 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	$result171 = mysqli_query($link,"UPDATE tbl_positonsf4t3 SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	//UPDATE table subjects
	$result172 = mysqli_query($link,"UPDATE tbl_subjects SET adm='$adm[$i]',name='$name[$i]', class='$class[$i]' where id='$id[$i]'")or die(mysqli_error());
	
	
	
	
}

 echo $N;
	echo '<div class="alert alert-success">
              <strong>Data added successfully</strong> 
           </div>';
?>
<script>
window.location="edit student.php?id=1";
</script>
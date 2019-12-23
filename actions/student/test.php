<?php
$host = "localhost";
$database = "offline school";
$password = "";
$user = "root";

$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    echo 'connection failed';
}

//$id=$_POST['selector'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$class=$_POST['classs'];
$kcpe=$_POST['kcpe'];
//check if there is a duplicate
//$check = mysqli_query($link,"INSERT INTO tbl_students (adm,name,kcpe,house,class) VALUES ('".$adm."','".$name."','".$kcpe[$i]."','".$house[$i]."','".$class."')")or die(mysqli_error("error"));

    //insert into students table
	$result = mysqli_query($link,"INSERT INTO tbl_students (adm,name,kcpe,class) VALUES ('".$adm."','".$name."','".$kcpe."','".$class."')")or die(mysqli_error("error"));
	//insert into agriculture table
	$result2 = mysqli_query($link,"INSERT INTO tbl_agriculturef1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result3 = mysqli_query($link,"INSERT INTO tbl_agriculturef1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result4 = mysqli_query($link,"INSERT INTO tbl_agriculturef1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result5 = mysqli_query($link,"INSERT INTO tbl_agriculturef2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result6 = mysqli_query($link,"INSERT INTO tbl_agriculturef2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result7 = mysqli_query($link,"INSERT INTO tbl_agriculturef2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result8 = mysqli_query($link,"INSERT INTO tbl_agriculturef3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result9 = mysqli_query($link,"INSERT INTO tbl_agriculturef3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result10 = mysqli_query($link,"INSERT INTO tbl_agriculturef3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result11 = mysqli_query($link,"INSERT INTO tbl_agriculturef4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result12 = mysqli_query($link,"INSERT INTO tbl_agriculturef4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result13 = mysqli_query($link,"INSERT INTO tbl_agriculturef4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table biology
	$result14 = mysqli_query($link,"INSERT INTO tbl_biologyf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result15 = mysqli_query($link,"INSERT INTO tbl_biologyf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result16 = mysqli_query($link,"INSERT INTO tbl_biologyf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result17 = mysqli_query($link,"INSERT INTO tbl_biologyf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result18 = mysqli_query($link,"INSERT INTO tbl_biologyf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result19 = mysqli_query($link,"INSERT INTO tbl_biologyf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result20 = mysqli_query($link,"INSERT INTO tbl_biologyf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result21 = mysqli_query($link,"INSERT INTO tbl_biologyf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result22 = mysqli_query($link,"INSERT INTO tbl_biologyf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result23 = mysqli_query($link,"INSERT INTO tbl_biologyf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result24 = mysqli_query($link,"INSERT INTO tbl_biologyf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result25 = mysqli_query($link,"INSERT INTO tbl_biologyf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table business
	$result26 = mysqli_query($link,"INSERT INTO tbl_businessf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result27 = mysqli_query($link,"INSERT INTO tbl_businessf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result28 = mysqli_query($link,"INSERT INTO tbl_businessf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result29 = mysqli_query($link,"INSERT INTO tbl_businessf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result30 = mysqli_query($link,"INSERT INTO tbl_businessf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result31 = mysqli_query($link,"INSERT INTO tbl_businessf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result32 = mysqli_query($link,"INSERT INTO tbl_businessf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result33 = mysqli_query($link,"INSERT INTO tbl_businessf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result34 = mysqli_query($link,"INSERT INTO tbl_businessf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result35 = mysqli_query($link,"INSERT INTO tbl_businessf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result36 = mysqli_query($link,"INSERT INTO tbl_businessf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result37 = mysqli_query($link,"INSERT INTO tbl_businessf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table chemistry
	$result38 = mysqli_query($link,"INSERT INTO tbl_chemistryf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result39 = mysqli_query($link,"INSERT INTO tbl_chemistryf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result40 = mysqli_query($link,"INSERT INTO tbl_chemistryf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result41 = mysqli_query($link,"INSERT INTO tbl_chemistryf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result42 = mysqli_query($link,"INSERT INTO tbl_chemistryf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result43 = mysqli_query($link,"INSERT INTO tbl_chemistryf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result44 = mysqli_query($link,"INSERT INTO tbl_chemistryf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result45 = mysqli_query($link,"INSERT INTO tbl_chemistryf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result46 = mysqli_query($link,"INSERT INTO tbl_chemistryf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result47 = mysqli_query($link,"INSERT INTO tbl_chemistryf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result48 = mysqli_query($link,"INSERT INTO tbl_chemistryf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result49 = mysqli_query($link,"INSERT INTO tbl_chemistryf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table computer
	$result50 = mysqli_query($link,"INSERT INTO tbl_computerf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result51 = mysqli_query($link,"INSERT INTO tbl_computerf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result52 = mysqli_query($link,"INSERT INTO tbl_computerf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result53 = mysqli_query($link,"INSERT INTO tbl_computerf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result54 = mysqli_query($link,"INSERT INTO tbl_computerf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result55 = mysqli_query($link,"INSERT INTO tbl_computerf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result56 = mysqli_query($link,"INSERT INTO tbl_computerf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result57 = mysqli_query($link,"INSERT INTO tbl_computerf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result58 = mysqli_query($link,"INSERT INTO tbl_computerf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result59 = mysqli_query($link,"INSERT INTO tbl_computerf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result60 = mysqli_query($link,"INSERT INTO tbl_computerf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result61 = mysqli_query($link,"INSERT INTO tbl_computerf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table cre
	$result62 = mysqli_query($link,"INSERT INTO tbl_cref1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result63 = mysqli_query($link,"INSERT INTO tbl_cref1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result64 = mysqli_query($link,"INSERT INTO tbl_cref1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result65 = mysqli_query($link,"INSERT INTO tbl_cref2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result66 = mysqli_query($link,"INSERT INTO tbl_cref2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result67 = mysqli_query($link,"INSERT INTO tbl_cref2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result68 = mysqli_query($link,"INSERT INTO tbl_cref3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result69 = mysqli_query($link,"INSERT INTO tbl_cref3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result70 = mysqli_query($link,"INSERT INTO tbl_cref3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result71 = mysqli_query($link,"INSERT INTO tbl_cref4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result72 = mysqli_query($link,"INSERT INTO tbl_cref4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result73 = mysqli_query($link,"INSERT INTO tbl_cref4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table english
	$result74 = mysqli_query($link,"INSERT INTO tbl_englishf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result75 = mysqli_query($link,"INSERT INTO tbl_englishf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result76 = mysqli_query($link,"INSERT INTO tbl_englishf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result77 = mysqli_query($link,"INSERT INTO tbl_englishf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result78 = mysqli_query($link,"INSERT INTO tbl_englishf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result79 = mysqli_query($link,"INSERT INTO tbl_englishf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result80 = mysqli_query($link,"INSERT INTO tbl_englishf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result81 = mysqli_query($link,"INSERT INTO tbl_englishf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result82 = mysqli_query($link,"INSERT INTO tbl_englishf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result83 = mysqli_query($link,"INSERT INTO tbl_englishf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result84 = mysqli_query($link,"INSERT INTO tbl_englishf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result85 = mysqli_query($link,"INSERT INTO tbl_englishf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table geography
	$result86 = mysqli_query($link,"INSERT INTO tbl_geographyf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result87 = mysqli_query($link,"INSERT INTO tbl_geographyf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result88 = mysqli_query($link,"INSERT INTO tbl_geographyf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result89 = mysqli_query($link,"INSERT INTO tbl_geographyf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result90 = mysqli_query($link,"INSERT INTO tbl_geographyf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result91 = mysqli_query($link,"INSERT INTO tbl_geographyf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result92 = mysqli_query($link,"INSERT INTO tbl_geographyf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result93 = mysqli_query($link,"INSERT INTO tbl_geographyf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result94 = mysqli_query($link,"INSERT INTO tbl_geographyf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result95 = mysqli_query($link,"INSERT INTO tbl_geographyf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result96 = mysqli_query($link,"INSERT INTO tbl_geographyf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result97 = mysqli_query($link,"INSERT INTO tbl_geographyf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table history
	$result98 = mysqli_query($link,"INSERT INTO tbl_historyf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result99 = mysqli_query($link,"INSERT INTO tbl_historyf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result100 = mysqli_query($link,"INSERT INTO tbl_historyf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result101 = mysqli_query($link,"INSERT INTO tbl_historyf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result102 = mysqli_query($link,"INSERT INTO tbl_historyf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result103 = mysqli_query($link,"INSERT INTO tbl_historyf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result104 = mysqli_query($link,"INSERT INTO tbl_historyf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result105 = mysqli_query($link,"INSERT INTO tbl_historyf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result106 = mysqli_query($link,"INSERT INTO tbl_historyf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result107 = mysqli_query($link,"INSERT INTO tbl_historyf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result108 = mysqli_query($link,"INSERT INTO tbl_historyf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result109 = mysqli_query($link,"INSERT INTO tbl_historyf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table kiswahili
	$result110 = mysqli_query($link,"INSERT INTO tbl_kiswahilif1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result111 = mysqli_query($link,"INSERT INTO tbl_kiswahilif1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result112 = mysqli_query($link,"INSERT INTO tbl_kiswahilif1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result113 = mysqli_query($link,"INSERT INTO tbl_kiswahilif2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result114 = mysqli_query($link,"INSERT INTO tbl_kiswahilif2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result115 = mysqli_query($link,"INSERT INTO tbl_kiswahilif2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result116 = mysqli_query($link,"INSERT INTO tbl_kiswahilif3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result117 = mysqli_query($link,"INSERT INTO tbl_kiswahilif3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result118 = mysqli_query($link,"INSERT INTO tbl_kiswahilif3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result119 = mysqli_query($link,"INSERT INTO tbl_kiswahilif4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result120 = mysqli_query($link,"INSERT INTO tbl_kiswahilif4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result121 = mysqli_query($link,"INSERT INTO tbl_kiswahilif4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table maths
	$result122 = mysqli_query($link,"INSERT INTO tbl_mathsf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result123 = mysqli_query($link,"INSERT INTO tbl_mathsf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result124 = mysqli_query($link,"INSERT INTO tbl_mathsf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result125 = mysqli_query($link,"INSERT INTO tbl_mathsf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result126 = mysqli_query($link,"INSERT INTO tbl_mathsf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result127 = mysqli_query($link,"INSERT INTO tbl_mathsf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result128 = mysqli_query($link,"INSERT INTO tbl_mathsf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result129 = mysqli_query($link,"INSERT INTO tbl_mathsf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result130 = mysqli_query($link,"INSERT INTO tbl_mathsf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result131 = mysqli_query($link,"INSERT INTO tbl_mathsf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result132 = mysqli_query($link,"INSERT INTO tbl_mathsf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result133 = mysqli_query($link,"INSERT INTO tbl_mathsf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table physics
	$result134 = mysqli_query($link,"INSERT INTO tbl_physicsf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result135 = mysqli_query($link,"INSERT INTO tbl_physicsf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result136 = mysqli_query($link,"INSERT INTO tbl_physicsf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result137 = mysqli_query($link,"INSERT INTO tbl_physicsf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result138 = mysqli_query($link,"INSERT INTO tbl_physicsf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result139 = mysqli_query($link,"INSERT INTO tbl_physicsf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result140 = mysqli_query($link,"INSERT INTO tbl_physicsf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result141 = mysqli_query($link,"INSERT INTO tbl_physicsf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result142 = mysqli_query($link,"INSERT INTO tbl_physicsf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result143 = mysqli_query($link,"INSERT INTO tbl_physicsf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result145 = mysqli_query($link,"INSERT INTO tbl_physicsf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result146 = mysqli_query($link,"INSERT INTO tbl_physicsf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table mean
	$result147 = mysqli_query($link,"INSERT INTO tbl_musicf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result148 = mysqli_query($link,"INSERT INTO tbl_musicf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result149 = mysqli_query($link,"INSERT INTO tbl_musicf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result150 = mysqli_query($link,"INSERT INTO tbl_musicf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result151 = mysqli_query($link,"INSERT INTO tbl_musicf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result152 = mysqli_query($link,"INSERT INTO tbl_musicf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result153 = mysqli_query($link,"INSERT INTO tbl_musicf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result154 = mysqli_query($link,"INSERT INTO tbl_musicf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result155 = mysqli_query($link,"INSERT INTO tbl_musicf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result156 = mysqli_query($link,"INSERT INTO tbl_musicf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result157 = mysqli_query($link,"INSERT INTO tbl_musicf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	$result158 = mysqli_query($link,"INSERT INTO tbl_musicf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table tbl_lastmean
//	$result159 = mysqli_query($link,"INSERT INTO tbl_lastmeanf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result160 = mysqli_query($link,"INSERT INTO tbl_lastmeanf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result161 = mysqli_query($link,"INSERT INTO tbl_lastmeanf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result162 = mysqli_query($link,"INSERT INTO tbl_lastmeanf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result163 = mysqli_query($link,"INSERT INTO tbl_lastmeanf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result164 = mysqli_query($link,"INSERT INTO tbl_lastmeanf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result165 = mysqli_query($link,"INSERT INTO tbl_lastmeanf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result166 = mysqli_query($link,"INSERT INTO tbl_lastmeanf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result167 = mysqli_query($link,"INSERT INTO tbl_lastmeanf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result168 = mysqli_query($link,"INSERT INTO tbl_lastmeanf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result169 = mysqli_query($link,"INSERT INTO tbl_lastmeanf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result170 = mysqli_query($link,"INSERT INTO tbl_lastmeanf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table tbl_positons
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf1t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf1t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf1t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf2t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf2t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf2t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf3t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf3t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf3t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf4t1 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf4t2 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
//	$result171 = mysqli_query($link,"INSERT INTO tbl_positonsf4t3 (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));
	//insert into table subjects
//	$result172 = mysqli_query($link,"INSERT INTO tbl_subjects (adm,name,class) VALUES ('".$adm."','".$name."','".$class."')")or die(mysqli_error("error"));

//header("location: grade.php");

	echo '0';

















?>

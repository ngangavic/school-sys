<?php
include('connection.php');
include"header_scripts.php";

$id=$_POST['id'];
$englishA=$_POST['englishA'];$englishAMINUS=$_POST['englishA-'];$englishBPLUS=$_POST['englishB+'];$englishB=$_POST['englishB'];
$englishBMINUS=$_POST['englishB-'];$englishCPLUS=$_POST['englishC+'];$englishC=$_POST['englishC'];$englishCMINUS=$_POST['englishC-'];
$englishDPLUS=$_POST['englishD+'];$englishD=$_POST['englishD'];$englishDMINUS=$_POST['englishD-'];$englishE=$_POST['englishE'];

$kiswahiliA=$_POST['kiswahiliA'];$kiswahiliAMINUS=$_POST['kiswahiliA-'];$kiswahiliBPLUS=$_POST['kiswahiliB+'];$kiswahiliB=$_POST['kiswahiliB'];
$kiswahiliBMINUS=$_POST['kiswahiliB-'];$kiswahiliCPLUS=$_POST['kiswahiliC+'];$kiswahiliC=$_POST['kiswahiliC'];$kiswahiliCMINUS=$_POST['kiswahiliC-'];
$kiswahiliDPLUS=$_POST['kiswahiliD+'];$kiswahiliD=$_POST['kiswahiliD'];$kiswahiliDMINUS=$_POST['kiswahiliD-'];$kiswahiliE=$_POST['kiswahiliE'];

$mathsA=$_POST['mathsA'];$mathsAMINUS=$_POST['mathsA-'];$mathsBPLUS=$_POST['mathsB+'];$mathsB=$_POST['mathsB'];
$mathsBMINUS=$_POST['mathsB-'];$mathsCPLUS=$_POST['mathsC+'];$mathsC=$_POST['mathsC'];$mathsCMINUS=$_POST['mathsC-'];
$mathsDPLUS=$_POST['mathsD+'];$mathsD=$_POST['mathsD'];$mathsDMINUS=$_POST['mathsD-'];$mathsE=$_POST['mathsE'];

$biologyA=$_POST['biologyA'];$biologyAMINUS=$_POST['biologyA-'];$biologyBPLUS=$_POST['biologyB+'];$biologyB=$_POST['biologyB'];
$biologyBMINUS=$_POST['biologyB-'];$biologyCPLUS=$_POST['biologyC+'];$biologyC=$_POST['biologyC'];$biologyCMINUS=$_POST['biologyC-'];
$biologyDPLUS=$_POST['biologyD+'];$biologyD=$_POST['biologyD'];$biologyDMINUS=$_POST['biologyD-'];$biologyE=$_POST['biologyE'];

$chemistryA=$_POST['chemistryA'];$chemistryAMINUS=$_POST['chemistryA-'];$chemistryBPLUS=$_POST['chemistryB+'];$chemistryB=$_POST['chemistryB'];
$chemistryBMINUS=$_POST['chemistryB-'];$chemistryCPLUS=$_POST['chemistryC+'];$chemistryC=$_POST['chemistryC'];$chemistryCMINUS=$_POST['chemistryC-'];
$chemistryDPLUS=$_POST['chemistryD+'];$chemistryD=$_POST['chemistryD'];$chemistryDMINUS=$_POST['chemistryD-'];$chemistryE=$_POST['chemistryE'];

$physicsA=$_POST['physicsA'];$physicsAMINUS=$_POST['physicsA-'];$physicsBPLUS=$_POST['physicsB+'];$physicsB=$_POST['physicsB'];
$physicsBMINUS=$_POST['physicsB-'];$physicsCPLUS=$_POST['physicsC+'];$physicsC=$_POST['physicsC'];$physicsCMINUS=$_POST['physicsC-'];
$physicsDPLUS=$_POST['physicsD+'];$physicsD=$_POST['physicsD'];$physicsDMINUS=$_POST['physicsD-'];$physicsE=$_POST['physicsE'];

$geographyA=$_POST['geographyA'];$geographyAMINUS=$_POST['geographyA-'];$geographyBPLUS=$_POST['geographyB+'];$geographyB=$_POST['geographyB'];
$geographyBMINUS=$_POST['geographyB-'];$geographyCPLUS=$_POST['geographyC+'];$geographyC=$_POST['geographyC'];$geographyCMINUS=$_POST['geographyC-'];
$geographyDPLUS=$_POST['geographyD+'];$geographyD=$_POST['geographyD'];$geographyDMINUS=$_POST['geographyD-'];$geographyE=$_POST['geographyE'];

$historyA=$_POST['historyA'];$historyAMINUS=$_POST['historyA-'];$historyBPLUS=$_POST['historyB+'];$historyB=$_POST['historyB'];
$historyBMINUS=$_POST['historyB-'];$historyCPLUS=$_POST['historyC+'];$historyC=$_POST['historyC'];$historyCMINUS=$_POST['historyC-'];
$historyDPLUS=$_POST['historyD+'];$historyD=$_POST['historyD'];$historyDMINUS=$_POST['historyD-'];$historyE=$_POST['historyE'];

$creA=$_POST['creA'];$creAMINUS=$_POST['creA-'];$creBPLUS=$_POST['creB+'];$creB=$_POST['creB'];
$creBMINUS=$_POST['creB-'];$creCPLUS=$_POST['creC+'];$creC=$_POST['creC'];$creCMINUS=$_POST['creC-'];
$creDPLUS=$_POST['creD+'];$creD=$_POST['creD'];$creDMINUS=$_POST['creD-'];$creE=$_POST['creE'];

$businessA=$_POST['businessA'];$businessAMINUS=$_POST['businessA-'];$businessBPLUS=$_POST['businessB+'];$businessB=$_POST['businessB'];
$businessBMINUS=$_POST['businessB-'];$businessCPLUS=$_POST['businessC+'];$businessC=$_POST['businessC'];$businessCMINUS=$_POST['businessC-'];
$businessDPLUS=$_POST['businessD+'];$businessD=$_POST['businessD'];$businessDMINUS=$_POST['businessD-'];$businessE=$_POST['businessE'];

$agricultureA=$_POST['agricultureA'];$agricultureAMINUS=$_POST['agricultureA-'];$agricultureBPLUS=$_POST['agricultureB+'];$agricultureB=$_POST['agricultureB'];
$agricultureBMINUS=$_POST['agricultureB-'];$agricultureCPLUS=$_POST['agricultureC+'];$agricultureC=$_POST['agricultureC'];$agricultureCMINUS=$_POST['agricultureC-'];
$agricultureDPLUS=$_POST['agricultureD+'];$agricultureD=$_POST['agricultureD'];$agricultureDMINUS=$_POST['agricultureD-'];$agricultureE=$_POST['agricultureE'];



$update=mysqli_query($link,"UPDATE tbl_english_grade SET A='$englishA',Aminus='$englishAMINUS',Bplus='$englishBPLUS',B='$englishB',Bminus='$englishBMINUS',Cplus='$englishCPLUS',C='$englishC',Cminus='$englishCMINUS',Dplus='$englishDPLUS',D='$englishD',Dminus='$englishDMINUS',E='$englishE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_kiswahili_grade SET A='$kiswahiliA',Aminus='$kiswahiliAMINUS',Bplus='$kiswahiliBPLUS',B='$kiswahiliB',Bminus='$kiswahiliBMINUS',Cplus='$kiswahiliCPLUS',C='$kiswahiliC',Cminus='$kiswahiliCMINUS',Dplus='$kiswahiliDPLUS',D='$kiswahiliD',Dminus='$kiswahiliDMINUS',E='$kiswahiliE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_maths_grade SET A='$mathsA',Aminus='$mathsAMINUS',Bplus='$mathsBPLUS',B='$mathsB',Bminus='$mathsBMINUS',Cplus='$mathsCPLUS',C='$mathsC',Cminus='$mathsCMINUS',Dplus='$mathsDPLUS',D='$mathsD',Dminus='$mathsDMINUS',E='$mathsE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_biology_grade SET A='$biologyA',Aminus='$biologyAMINUS',Bplus='$biologyBPLUS',B='$biologyB',Bminus='$biologyBMINUS',Cplus='$biologyCPLUS',C='$biologyC',Cminus='$biologyCMINUS',Dplus='$biologyDPLUS',D='$biologyD',Dminus='$biologyDMINUS',E='$biologyE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_chemistry_grade SET A='$chemistryA',Aminus='$chemistryAMINUS',Bplus='$chemistryBPLUS',B='$chemistryB',Bminus='$chemistryBMINUS',Cplus='$chemistryCPLUS',C='$chemistryC',Cminus='$chemistryCMINUS',Dplus='$chemistryDPLUS',D='$chemistryD',Dminus='$chemistryDMINUS',E='$chemistryE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_physics_grade SET A='$physicsA',Aminus='$physicsAMINUS',Bplus='$physicsBPLUS',B='$physicsB',Bminus='$physicsBMINUS',Cplus='$physicsCPLUS',C='$physicsC',Cminus='$physicsCMINUS',Dplus='$physicsDPLUS',D='$physicsD',Dminus='$physicsDMINUS',E='$physicsE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_geography_grade SET A='$geographyA',Aminus='$geographyAMINUS',Bplus='$geographyBPLUS',B='$geographyB',Bminus='$geographyBMINUS',Cplus='$geographyCPLUS',C='$geographyC',Cminus='$geographyCMINUS',Dplus='$geographyDPLUS',D='$geographyD',Dminus='$geographyDMINUS',E='$geographyE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_history_grade SET A='$historyA',Aminus='$historyAMINUS',Bplus='$historyBPLUS',B='$historyB',Bminus='$historyBMINUS',Cplus='$historyCPLUS',C='$historyC',Cminus='$historyCMINUS',Dplus='$historyDPLUS',D='$historyD',Dminus='$historyDMINUS',E='$historyE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_cre_grade SET A='$creA',Aminus='$creAMINUS',Bplus='$creBPLUS',B='$creB',Bminus='$creBMINUS',Cplus='$creCPLUS',C='$creC',Cminus='$creCMINUS',Dplus='$creDPLUS',D='$creD',Dminus='$creDMINUS',E='$creE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_business_grade SET A='$businessA',Aminus='$businessAMINUS',Bplus='$businessBPLUS',B='$businessB',Bminus='$businessBMINUS',Cplus='$businessCPLUS',C='$businessC',Cminus='$businessCMINUS',Dplus='$businessDPLUS',D='$businessD',Dminus='$businessDMINUS',E='$businessE' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_agriculture_grade SET A='$agricultureA',Aminus='$agricultureAMINUS',Bplus='$agricultureBPLUS',B='$agricultureB',Bminus='$agricultureBMINUS',Cplus='$agricultureCPLUS',C='$agricultureC',Cminus='$agricultureCMINUS',Dplus='$agricultureDPLUS',D='$agricultureD',Dminus='$agricultureDMINUS',E='$agricultureE' WHERE class='form 2' ")or die(mysqli_error());

//$update=mysqli_query($link,"UPDATE tbl_english_grade SET A='$englishA',Aminus='$englishAMINUS' WHERE class='form 2' ")or die(mysqli_error());

?>
<script>
//window.location="index.php?id=1";
//alert("Data is up to date.\n Please ... ");
window.alert("Grades updated successfully");
window.location="index.php?id=2";
</script>
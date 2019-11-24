<?php
include"../../connection.php";
$query = mysqli_query($link, "select tbl_students.name, tbl_students.adm, tbl_students.kcpe, tbl_students.house, tbl_students.class, 
tbl_agriculturef1t1.agrif1t1ex1, tbl_agriculturef1t1.agrif1t1ex2, tbl_agriculturef1t1.agrif1t1ex3, tbl_agriculturef1t1.agrif1t1ex4,tbl_agriculturef1t1.agrif1t1g1, tbl_agriculturef1t1.agrif1t1g2, tbl_agriculturef1t1.agrif1t1g3, tbl_agriculturef1t1.agrif1t1g4, tbl_agriculturef1t1.agrif1t1p1, tbl_agriculturef1t1.agrif1t1p2, tbl_agriculturef1t1.agrif1t1p3, tbl_agriculturef1t1.agrif1t1p4, tbl_agriculturef1t1.agrif1t1remarks1, tbl_agriculturef1t1.agrif1t1remarks2, tbl_agriculturef1t1.agrif1t1remarks3, tbl_agriculturef1t1.agrif1t1remarks4, 
tbl_agriculturef1t2.agrif1t2ex1, tbl_agriculturef1t2.agrif1t2ex2, tbl_agriculturef1t2.agrif1t2ex3, tbl_agriculturef1t2.agrif1t2ex4,tbl_agriculturef1t2.agrif1t2g1, tbl_agriculturef1t2.agrif1t2g2, tbl_agriculturef1t2.agrif1t2g3, tbl_agriculturef1t2.agrif1t2g4, tbl_agriculturef1t2.agrif1t2p1, tbl_agriculturef1t2.agrif1t2p2, tbl_agriculturef1t2.agrif1t2p3, tbl_agriculturef1t2.agrif1t2p4, tbl_agriculturef1t2.agrif1t2remarks1, tbl_agriculturef1t2.agrif1t2remarks2, tbl_agriculturef1t2.agrif1t2remarks3, tbl_agriculturef1t2.agrif1t2remarks4,
tbl_agriculturef1t3.agrif1t3ex1, tbl_agriculturef1t3.agrif1t3ex2, tbl_agriculturef1t3.agrif1t3ex3, tbl_agriculturef1t3.agrif1t3ex4,tbl_agriculturef1t3.agrif1t3g1, tbl_agriculturef1t3.agrif1t3g2, tbl_agriculturef1t3.agrif1t3g3, tbl_agriculturef1t3.agrif1t3g4, tbl_agriculturef1t3.agrif1t3p1, tbl_agriculturef1t3.agrif1t3p2, tbl_agriculturef1t3.agrif1t3p3, tbl_agriculturef1t3.agrif1t3p4, tbl_agriculturef1t3.agrif1t3remarks1, tbl_agriculturef1t3.agrif1t3remarks2, tbl_agriculturef1t3.agrif1t3remarks3, tbl_agriculturef1t3.agrif1t3remarks4,
tbl_agriculturef2t1.agrif2t1ex1, tbl_agriculturef2t1.agrif2t1ex2, tbl_agriculturef2t1.agrif2t1ex3, tbl_agriculturef2t1.agrif2t1ex4,tbl_agriculturef2t1.agrif2t1g1, tbl_agriculturef2t1.agrif2t1g2, tbl_agriculturef2t1.agrif2t1g3, tbl_agriculturef2t1.agrif2t1g4, tbl_agriculturef2t1.agrif2t1p1, tbl_agriculturef2t1.agrif2t1p2, tbl_agriculturef2t1.agrif2t1p3, tbl_agriculturef2t1.agrif2t1p4, tbl_agriculturef2t1.agrif2t1remarks1, tbl_agriculturef2t1.agrif2t1remarks2, tbl_agriculturef2t1.agrif2t1remarks3, tbl_agriculturef2t1.agrif2t1remarks4,
tbl_agriculturef2t2.agrif2t2ex1, tbl_agriculturef2t2.agrif2t2ex2, tbl_agriculturef2t2.agrif2t2ex3, tbl_agriculturef2t2.agrif2t2ex4,tbl_agriculturef2t2.agrif2t2g1, tbl_agriculturef2t2.agrif2t2g2, tbl_agriculturef2t2.agrif2t2g3, tbl_agriculturef2t2.agrif2t2g4, tbl_agriculturef2t2.agrif2t2p1, tbl_agriculturef2t2.agrif2t2p2, tbl_agriculturef2t2.agrif2t2p3, tbl_agriculturef2t2.agrif2t2p4, tbl_agriculturef2t2.agrif2t2remarks1, tbl_agriculturef2t2.agrif2t2remarks2, tbl_agriculturef2t2.agrif2t2remarks3, tbl_agriculturef2t2.agrif2t2remarks4,
tbl_agriculturef2t3.agrif2t3ex1, tbl_agriculturef2t3.agrif2t3ex2, tbl_agriculturef2t3.agrif2t3ex3, tbl_agriculturef2t3.agrif2t3ex4,tbl_agriculturef2t3.agrif2t3g1, tbl_agriculturef2t3.agrif2t3g2, tbl_agriculturef2t3.agrif2t3g3, tbl_agriculturef2t3.agrif2t3g4, tbl_agriculturef2t3.agrif2t3p1, tbl_agriculturef2t3.agrif2t3p2, tbl_agriculturef2t3.agrif2t3p3, tbl_agriculturef2t3.agrif2t3p4, tbl_agriculturef2t3.agrif2t3remarks1, tbl_agriculturef2t3.agrif2t3remarks2, tbl_agriculturef2t3.agrif2t3remarks3, tbl_agriculturef2t3.agrif2t3remarks4

  from tbl_agriculturef1t1 
  inner join tbl_students on tbl_students.adm=tbl_agriculturef1t1.adm 
  inner join tbl_agriculturef1t2 on tbl_students.adm=tbl_agriculturef1t2.adm 
  inner join tbl_agriculturef1t3 on tbl_students.adm=tbl_agriculturef1t3.adm 
  inner join tbl_agriculturef2t1 on tbl_students.adm=tbl_agriculturef2t1.adm
  inner join tbl_agriculturef2t2 on tbl_students.adm=tbl_agriculturef2t2.adm 
  inner join tbl_agriculturef2t3 on tbl_students.adm=tbl_agriculturef2t3.adm  ")or die(mysqli_error());
	       while($row = mysqli_fetch_array($query)){
		   echo $adm=$row['adm'],'</br>';
		   echo $name = $row['name'],'</br>';
		   echo $kcpe=$row['kcpe'],'</br>';
		   echo "AGRI F1 T1 ",'</br>'; 
		   echo $agrif1t1ex1=$row['agrif1t1ex1'],'</br>';
		   echo $agrif1t1ex2=$row['agrif1t1ex2'],'</br>';
		   echo $agrif1t1ex3=$row['agrif1t1ex3'],'</br>';
		   echo $agrif1t1ex4=$row['agrif1t1ex4'],'</br>';
		   echo $agrif1t1g1=$row['agrif1t1g1'],'</br>';
		   echo $agrif1t1g2=$row['agrif1t1g2'],'</br>';
		   echo $agrif1t1g3=$row['agrif1t1g3'],'</br>';
		   echo $agrif1t1g4=$row['agrif1t1g4'],'</br>';
		   echo $agrif1t1p1=$row['agrif1t1p1'],'</br>';
		   echo $agrif1t1p2=$row['agrif1t1p2'],'</br>';
		   echo $agrif1t1p3=$row['agrif1t1p3'],'</br>';
		   echo $agrif1t1p4=$row['agrif1t1p4'],'</br>';
		   echo $agrif1t1remarks1=$row['agrif1t1remarks1'],'</br>';
		   echo $agrif1t1remarks2=$row['agrif1t1remarks2'],'</br>';
		   echo $agrif1t1remarks3=$row['agrif1t1remarks3'],'</br>';
		   echo $agrif1t1remarks4=$row['agrif1t1remarks4'],'</br>';
		   
		   echo "AGRI F1 T2 ",'</br>'; 
		   echo $agrif1t2ex1=$row['agrif1t2ex1'],'</br>';
		   echo $agrif1t2ex2=$row['agrif1t2ex2'],'</br>';
		   echo $agrif1t2ex3=$row['agrif1t2ex3'],'</br>';
		   echo $agrif1t2ex4=$row['agrif1t2ex4'],'</br>';
		   echo $agrif1t2g1=$row['agrif1t2g1'],'</br>';
		   echo $agrif1t2g2=$row['agrif1t2g2'],'</br>';
		   echo $agrif1t2g3=$row['agrif1t2g3'],'</br>';
		   echo $agrif1t2g4=$row['agrif1t2g4'],'</br>';
		   echo $agrif1t2p1=$row['agrif1t2p1'],'</br>';
		   echo $agrif1t2p2=$row['agrif1t2p2'],'</br>';
		   echo $agrif1t2p3=$row['agrif1t2p3'],'</br>';
		   echo $agrif1t2p4=$row['agrif1t2p4'],'</br>';
		   echo $agrif1t2remarks1=$row['agrif1t2remarks1'],'</br>';
		   echo $agrif1t2remarks2=$row['agrif1t2remarks2'],'</br>';
		   echo $agrif1t2remarks3=$row['agrif1t2remarks3'],'</br>';
		   echo $agrif1t2remarks4=$row['agrif1t2remarks4'],'</br>';
		   
		   echo "AGRI F1 T3 ",'</br>'; 
		   echo $agrif1t3ex1=$row['agrif1t3ex1'],'</br>';
		   echo $agrif1t3ex2=$row['agrif1t3ex2'],'</br>';
		   echo $agrif1t3ex3=$row['agrif1t3ex3'],'</br>';
		   echo $agrif1t3ex4=$row['agrif1t3ex4'],'</br>';
		   echo $agrif1t3g1=$row['agrif1t3g1'],'</br>';
		   echo $agrif1t3g2=$row['agrif1t3g2'],'</br>';
		   echo $agrif1t3g3=$row['agrif1t3g3'],'</br>';
		   echo $agrif1t3g4=$row['agrif1t3g4'],'</br>';
		   echo $agrif1t3p1=$row['agrif1t3p1'],'</br>';
		   echo $agrif1t3p2=$row['agrif1t3p2'],'</br>';
		   echo $agrif1t3p3=$row['agrif1t3p3'],'</br>';
		   echo $agrif1t3p4=$row['agrif1t3p4'],'</br>';
		   echo $agrif1t3remarks1=$row['agrif1t3remarks1'],'</br>';
		   echo $agrif1t3remarks2=$row['agrif1t3remarks2'],'</br>';
		   echo $agrif1t3remarks3=$row['agrif1t3remarks3'],'</br>';
		   echo $agrif1t3remarks4=$row['agrif1t3remarks4'],'</br>';
		   
		   echo "AGRI F2 T1 ",'</br>'; 
		   echo $agrif2t1ex1=$row['agrif2t1ex1'],'</br>';
		   echo $agrif2t1ex2=$row['agrif2t1ex2'],'</br>';
		   echo $agrif2t1ex3=$row['agrif2t1ex3'],'</br>';
		   echo $agrif2t1ex4=$row['agrif2t1ex4'],'</br>';
		   echo $agrif2t1g1=$row['agrif2t1g1'],'</br>';
		   echo $agrif2t1g2=$row['agrif2t1g2'],'</br>';
		   echo $agrif2t1g3=$row['agrif2t1g3'],'</br>';
		   echo $agrif2t1g4=$row['agrif2t1g4'],'</br>';
		   echo $agrif2t1p1=$row['agrif2t1p1'],'</br>';
		   echo $agrif2t1p2=$row['agrif2t1p2'],'</br>';
		   echo $agrif2t1p3=$row['agrif2t1p3'],'</br>';
		   echo $agrif2t1p4=$row['agrif2t1p4'],'</br>';
		   echo $agrif2t1remarks1=$row['agrif2t1remarks1'],'</br>';
		   echo $agrif2t1remarks2=$row['agrif2t1remarks2'],'</br>';
		   echo $agrif2t1remarks3=$row['agrif2t1remarks3'],'</br>';
		   echo $agrif2t1remarks4=$row['agrif2t1remarks4'],'</br>';
		   
		   echo "AGRI F2 T2 ",'</br>'; 
		   echo $agrif2t2ex1=$row['agrif2t2ex1'],'</br>';
		   echo $agrif2t2ex2=$row['agrif2t2ex2'],'</br>';
		   echo $agrif2t2ex3=$row['agrif2t2ex3'],'</br>';
		   echo $agrif2t2ex4=$row['agrif2t2ex4'],'</br>';
		   echo $agrif2t2g1=$row['agrif2t2g1'],'</br>';
		   echo $agrif2t2g2=$row['agrif2t2g2'],'</br>';
		   echo $agrif2t2g3=$row['agrif2t2g3'],'</br>';
		   echo $agrif2t2g4=$row['agrif2t2g4'],'</br>';
		   echo $agrif2t2p1=$row['agrif2t2p1'],'</br>';
		   echo $agrif2t2p2=$row['agrif2t2p2'],'</br>';
		   echo $agrif2t2p3=$row['agrif2t2p3'],'</br>';
		   echo $agrif2t2p4=$row['agrif2t1p4'],'</br>';
		   echo $agrif2t2remarks1=$row['agrif2t2remarks1'],'</br>';
		   echo $agrif2t2remarks2=$row['agrif2t2remarks2'],'</br>';
		   echo $agrif2t2remarks3=$row['agrif2t2remarks3'],'</br>';
		   echo $agrif2t2remarks4=$row['agrif2t2remarks4'],'</br>';
		   
		   echo "AGRI F2 T3 ",'</br>'; 
		   echo $agrif2t3ex1=$row['agrif2t3ex1'],'</br>';
		   echo $agrif2t3ex2=$row['agrif2t3ex2'],'</br>';
		   echo $agrif2t3ex3=$row['agrif2t3ex3'],'</br>';
		   echo $agrif2t3ex4=$row['agrif2t3ex4'],'</br>';
		   echo $agrif2t3g1=$row['agrif2t3g1'],'</br>';
		   echo $agrif2t3g2=$row['agrif2t3g2'],'</br>';
		   echo $agrif2t3g3=$row['agrif2t3g3'],'</br>';
		   echo $agrif2t3g4=$row['agrif2t3g4'],'</br>';
		   echo $agrif2t3p1=$row['agrif2t3p1'],'</br>';
		   echo $agrif2t3p2=$row['agrif2t3p2'],'</br>';
		   echo $agrif2t3p3=$row['agrif2t3p3'],'</br>';
		   echo $agrif2t3p4=$row['agrif2t3p4'],'</br>';
		   echo $agrif2t3remarks1=$row['agrif2t3remarks1'],'</br>';
		   echo $agrif2t3remarks2=$row['agrif2t3remarks2'],'</br>';
		   echo $agrif2t3remarks3=$row['agrif2t3remarks3'],'</br>';
		   echo $agrif2t3remarks4=$row['agrif2t3remarks4'],'</br>';
		   
		   }		   
		  
?>
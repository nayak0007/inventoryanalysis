<?php
include ("connection.php");
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
  
$dataArray=array();
  
$res=mysqli_query($conn,"select * from sales_by_month");
$mon_1=0;$mon_2=0;$mon_3=0;$mon_4=0;$mon_5=0;$mon_6=0;$mon_7=0;$mon_8=0;$mon_9=0;$mon_10=0;$mon_11=0;$mon_12=0;
 while($r=mysqli_fetch_row($res))
 {
	 $mon_1=$mon_1+$r[2];
	  $mon_2=$mon_2+$r[3];
	   $mon_3=$mon_3+$r[4];
	    $mon_4=$mon_4+$r[5];
		 $mon_5=$mon_5+$r[6];
		  $mon_6=$mon_6+$r[7];
		   $mon_7=$mon_7+$r[8];
		    $mon_8=$mon_8+$r[9];
			 $mon_9=$mon_9+$r[10];
			  $mon_10=$mon_10+$r[11];
			   $mon_11=$mon_11+$r[12];
			    $mon_12=$mon_12+$r[13];
 }

$dataArray = array("Jan" => round($mon_1/12), "Feb" => round($mon_2/12), "Mar" => round($mon_3/12), "Apr" => round($mon_4/12), 
"May" => round($mon_5/12), "Jun" => round($mon_6/12), "Jul" => round($mon_7/12), "Aug" => round($mon_8/12), "Sep" => round($mon_9/12),
 "Oct" => round($mon_10/12), "Nov" => round($mon_11/12), "Dec" => round($mon_12/12));
 
$graph->addData($dataArray);
$graph->setupXAxis(20, 'blue');
$graph->setTitle('Sales By Month');
$graph->setTitleColor('blue');
$graph->setDataValues(true);
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();

?>
<?php
include ("connection.php");
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
  
$dataArray=array();
  
if(isset($_REQUEST['e_id']))
{
$state = $_REQUEST['e_id'];
$res=mysqli_query($conn,"select * from sales_by_month where id='$state'");
$r=mysqli_fetch_row($res);

$dataArray = array("Jan" => $r[2], "Feb" => $r[3], "Mar" => $r[4], "Apr" => $r[5], 
"May" => $r[6], "Jun" => $r[7], "Jul" => $r[8], "Aug" => $r[9], "Sep" => $r[10],
 "Oct" => $r[11], "Nov" => $r[12], "Dec" => $r[13]);
 
$graph->addData($dataArray);
$graph->setupXAxis(20, 'blue');
$graph->setTitle('Sales By Month');
$graph->setTitleColor('blue');
$graph->setDataValues(true);
$graph->setGradient("red", "red");
$graph->setDataPoints(true);
$graph->setDataPointColor('blue');
$graph->setLine(true);
$graph->setLineColor('blue');
$graph->setBarOutlineColor("blue");
$graph->createGraph();

}

?>
<?php
include ("connection.php");
if(isset($_POST['submit'])){
$e_id=$_POST['employee_id'];
$l_name=$_POST['last_name'];
$f_name=$_POST['first_name'];
$title=$_POST['title'];
$t_o_c=$_POST['title_of_courtesy'];
$b_date=$_POST['birth_date'];
$h_date=$_POST['hire_date'];
$address=$_POST['address'];
$city=$_POST['city'];
$region=$_POST['region'];
$postal_code=$_POST['postal_code'];
$country=$_POST['country'];

$ins="insert into employee(employee_id,last_name,first_name,title,title_of_courtesy,birth_date,hire_date,address,city,region,postal_code,country)values('$e_id','$l_name','$f_name','$title','$t_o_c','$b_date','$h_date','$address','$city','$region','$postal_code','$country')";
mysql_query($ins);
}
?>		
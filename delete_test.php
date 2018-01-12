<?php
include ("connection.php");

?>
<?php

if(isset($_POST['delete']))
{
//echo 'updating';
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
$del="delete from employee where employee_id='$e_id',last_name='$l_name',first_name='$f_name',title='$title',title_of_courtesy='$t_o_c',birth_date='$b_date',hire_date='$h_date',address='$address',city='$city',region='$region',postal_code='$postal_code',country='$country'";
$u_status=mysqli_query($conn1,$del);
header("location:delete_employee.php");
}
?>
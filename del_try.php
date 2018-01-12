<?php  include('connection.php'); 

$del="DELETE FROM employee WHERE employee_id=".$_GET['did'];
$run=mysqli_query($conn,$del);
header('location:delete_employee.php');

?>
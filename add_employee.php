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
echo "data inserted successfully";
}
?>		
<html lang="en">
	<head>
		<title>Sales Automation</title>
		<meta charset="utf-8">
		<!-- Bootstrap Include -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<!-- mdb include -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/mdb.css">
		<!-- custom stylesheet for index page -->
		<link rel="stylesheet" type="text/css" href="css/index-style.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Karla|Libre+Barcode+39+Text|Rokkitt" rel="stylesheet"> 
		<!-- icons -->
		<link rel="stylesheet" type="text/css" href="css/font-a/css/font-awesome.min.css">
		<!-- defaults -->
		<link rel="stylesheet" type="text/css" href="css/defaults.css">
	</head>
	<body id="main-background">
		<!-- Inner Wrap -->
		<div class="container" id="inner-wrapper">
			<!-- row info -->
			<div class="row row-fluid" id="info-row">
				<!-- welcome message -->
				<div class="col-md-8">
					<h1 id="heading">Sales Automation System</h2>
				</div>
				<!-- info card -->
							</div>

<div class="container">
  <h2>Enter salesman details</h2>
  <form class="form-horizontal" method="post" action="add_employee.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="employee_id">Employee Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="employee_id" placeholder="Enter id" name="employee_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title_of_courtesy">Title of Courtesy:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title_of_courtesy" placeholder="Enter Tiltle of Courtesy" name="title_of_courtesy">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="birth_date">Birth Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="birth_date" placeholder="Enter Birth Date" name="birth_date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hire_date">Hire Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="hire_date" placeholder="Enter Hire Date" name="hire_date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="region">Region:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="region" placeholder="Enter Region" name="region">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="postal_code" placeholder="Enter Postal Code" name="postal_code">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="submit" class="btn btn-default" value="submit">
      </div>
    </div>
  </form>
</div>

			<!-- footer row -->
				<footer>
				<div class="row row-fluid">
					<div class="container-fluid" id="footer">
						<h3 class="text-center" style="margin-top: 20px; padding: 10px;">footer content goes here</h3>
					</div>
				</div>
				</footer>
			
		<!--End of inner-wrapper  -->
		</div>
		<!-- js plugins -->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/mdb.js"></script>
		<script type="text/javascript" src="js/popper.js"></script>
		<!-- chart bundle -->
		<script type="text/javascript" src="js/chart.bundle.js"></script>
		<!-- custom-index js -->
		<script type="text/javascript" src="js/index-custom.js"></script>
	</body>
</html>
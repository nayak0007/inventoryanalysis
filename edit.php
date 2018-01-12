
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
  <h2>Edit Employee Data</h2>
  <form class="form-horizontal" method="post" action="edit_test.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="employee_id">Employee Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="employee_id" placeholder="Enter id" name="employee_id" value="<?php echo $_REQUEST["uno"] ?>" readonly="true">
      </div>
    </div>


	<?php
	include ("connection.php");
	$res=mysqli_query($conn,"select * from employee where employee_id='".$_REQUEST['uno']."'");
	$r=mysqli_fetch_row($res);
	?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Enter Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $r[1] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value="<?php echo $r[2] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="<?php echo $r[3] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title_of_courtesy">Title of Courtesy:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title_of_courtesy" placeholder="Enter Tiltle of Courtesy" name="title_of_courtesy" value="<?php echo $r[4] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="birth_date">Birth Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="birth_date" placeholder="Enter Birth Date" name="birth_date" value="<?php echo $r[5] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hire_date">Hire Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="hire_date" placeholder="Enter Hire Date" name="hire_date" value="<?php echo $r[6] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?php echo $r[7] ?>">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="<?php echo $r[8] ?>">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="region">Region:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="region" placeholder="Enter Region" name="region" value="<?php echo $r[9] ?>">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="postal_code" placeholder="Enter Postal Code" name="postal_code" value="<?php echo $r[10] ?>">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" value="<?php echo $r[11] ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="update" class="btn btn-default" value="update">
      </div>
    </div>
  </form>
</div>
</body>
</html>
	






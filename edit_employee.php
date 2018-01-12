
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

<div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Employee Id</th>
                    <th class="hidden-xs">Last Name</th>
                    <th class="hidden-xs">First Name</th>
            <th class="hidden-xs">Title</th>
                    <th class="hidden-md hidden-sm hidden-xs">Title of courtesy</th>
                    <th class="hidden-xs">Birth date</th>
                    <th class="hidden-xs">Hire Date</th>
                    <th class="hidden-xs">Address</th>
                    <th class="hidden-xs">City</th>
                    <th class="hidden-xs">Region</th>
                    <th class="hidden-xs">Postal Code</th>
                    <th class="hidden-xs">Country</th>
                </tr>
            </thead>
	



<?php
$conn = mysql_connect("localhost", "root", "");
$res = mysql_select_db("product", $conn);
$res=mysql_query("select * from employee");
echo "<tr><td colspan='13'></td></tr>";
while($r=mysql_fetch_row($res))
{  
	echo "<tr>";
	echo "<td>$r[0]</td>";
	echo "<td>$r[1]</td>";
	echo "<td>$r[2]</td>";
	echo "<td>$r[3]</td>";
	echo "<td>$r[4]</td>";
	echo "<td>$r[5]</td>";
	echo "<td>$r[6]</td>";
	echo "<td>$r[7]</td>";
	echo "<td>$r[8]</td>";
	echo "<td>$r[9]</td>";
	echo "<td>$r[10]</td>";
	echo "<td>$r[11]</td>";
	echo "<td><a href=edit.php?uno=$r[0]>update</a>";
	echo "</tr>";
}
?>

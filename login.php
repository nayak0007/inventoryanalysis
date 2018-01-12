<?php
session_start();
include("connection.php");

/*if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
	exit;
}*/

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	$username = $conn->real_escape_string($username);
	$password = $conn->real_escape_string($password);
	
	$query = $conn->query("SELECT username,password FROM login WHERE username='$username'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	if ($count==1) {
		$_SESSION['userSession'] = $row['username'];
		header("Location: index.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$conn->close();
}
?>
<html lang="en">
	<head>
		<title>Login Page</title>
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

	  <style type = "text/css">
         html, body {
         	height: 100%;
            font-family:Arial, Helvetica, sans-serif;
            font-size:20px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }

         footer{
         	position: relative;
         	margin-top: 100px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
         input[type="submit"]{
			background:rgba(51,153,153,0.4);
			width:100px;
			height:50px;
			border-radius:4px;
			text-align:center;
			vertical-align:baseline;
			alignment-adjust:central;
			border:2px solid rgba(51,153,153,1);
			color:#fff;
			-webkit-transition:all 0.3s ease-in-out;
			-moz-transition:all 0.3s ease-in-out;
			-ms-transition:all 0.3s ease-in-out;
			-o-transition:all 0.3s ease-in-out;
			transition:all 0.3s ease-in-out;
		}

	input[type="submit"]:hover{
		background:rgba(51,153,153,1);
		-webkit-transform:scale(1.2);
		-moz-transform:scale(1.2);
		-o-transform:scale(1.2);
		-ms-transform:scale(1.2);
		transform:scale(1.2);
	}

      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px; text-align: center;"><b>Login</b></div>
            <div style = "margin:30px">
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " name="btn-login"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($msg)){echo $msg;} ?></div>
          
            </div>
        
         </div>
      
      </div>

			<!-- footer row -->
				<footer>
				<div class="row row-fluid">
					<div class="container-fluid" id="footer">
					<h5 class="text-center" style="margin-top: 20px; padding: 10px;">Copyright(c) 2017 Sales Automation System All Rights Reserved</h5>
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
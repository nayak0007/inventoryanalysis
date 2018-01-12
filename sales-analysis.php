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
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<!--<script type="text/javascript" src="js/mdb.js"></script>-->
		<script type="text/javascript">
		
		
function fetch_select(val)
{

 $.ajax({
 type: 'GET',
 url: 'sales_graph.php',
 mimeType: "text/plain; charset=x-user-defined",
 data: {
  e_id:val
 },
 success: function (response) {
  $("#graph_container").html('<h3>Individual Salesman Performance</h3><img src="data:image/png;base64,' + base64encode(response)+ '" />');
 }
 });
}

function base64encode(str) {
    var CHARS = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    var out = "", i = 0, len = str.length, c1, c2, c3;
    while (i < len) {
        c1 = str.charCodeAt(i++) & 0xff;
        if (i == len) {
            out += CHARS.charAt(c1 >> 2);
            out += CHARS.charAt((c1 & 0x3) << 4);
            out += "==";
            break;
        }
        c2 = str.charCodeAt(i++);
        if (i == len) {
            out += CHARS.charAt(c1 >> 2);
            out += CHARS.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
            out += CHARS.charAt((c2 & 0xF) << 2);
            out += "=";
            break;
        }
        c3 = str.charCodeAt(i++);
        out += CHARS.charAt(c1 >> 2);
        out += CHARS.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
        out += CHARS.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));
        out += CHARS.charAt(c3 & 0x3F);
    }
    return out;
}
$( document ).ready(function() {
    fetch_select(2);
});
</script>
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
  <h2>Salesman Performance Analysis</h2>
    <div class="form-group">
      <label class="control-label col-sm-2" for="employee_id">Select Salesman:</label>
      <select id="drop_1" onchange="fetch_select(this.value);">
		<option>Select Salesman</option>
		<?php
		  include ("connection.php");
		  $res=mysqli_query($conn,"select * from employee");
		  $counter=1;
			  while($r=mysqli_fetch_row($res))
			  {
				  if($counter==1){
			   echo "<option value=".$r[0]." selected>".$r[1]." ".$r[2]."</option>";
				  }
				  else{
					  echo "<option value=".$r[0]." >".$r[1]." ".$r[2]."</option>";
				  }
			   $counter++;
			  }
			 ?>
		</select>
    </div>
	<div id="graph_container" style="float:left">
	
	</div>
	<div id="graph_container2" style="float:right">
	<h3>Average Team Performance</h3>
	<img src="team_graph.php">
	</div>
	
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
		
		<!-- chart bundle -->
		<!-- <script type="text/javascript" src="js/chart.bundle.js"></script>
		<!-- custom-index js -->
		<!-- <script type="text/javascript" src="js/index-custom.js"></script>-->
	</body>
</html>
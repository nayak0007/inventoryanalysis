<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
	<title>Sales Automation</title>
		<meta charset="utf-8">
		<!-- Bootstrap Include -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<!-- mdb include -->
		<link rel="stylesheet" type="text/css" href="css/mdb.css">
		<!-- custom stylesheet for index page -->
		<link rel="stylesheet" type="text/css" href="css/index-style.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Karla|Libre+Barcode+39+Text|Rokkitt" rel="stylesheet"> 
		<!-- icons -->
		<link rel="stylesheet" type="text/css" href="css/font-a/css/font-awesome.min.css">
		<!-- defaults -->
		<link rel="stylesheet" type="text/css" href="css/defaults.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Munna Khan">
        <title>Inventory</title>

        <!--Header-->
        <!-- Normalize CSS -->
<link href="css1/normalize1.css" rel="stylesheet" media="screen">

<!-- Bootstrap core CSS -->
<link href="css1/bootstrap.css" rel="stylesheet" media="screen">

<!-- Font Awesome -->
<link href="css1/font-awesome.min.css" rel="stylesheet" media="screen">

<!-- DATA TABLES -->
<link href="css1/datatables.bootstrap.css" rel="stylesheet" media="screen">

<!-- Custom CSS  -->
<link href="css1/navigation.css" rel="stylesheet" media="screen">
<link href="css1/style1.css" rel="stylesheet" media="screen">
<!-- jQuery 2.0.3 -->
<script src="js1/jquery-2.0.3.min.js"></script>
<script src="js1/script.js"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->        
        <!--Page Specific Header-->
            </head>
    <body>
        <div class="container">
            <!--Top Navigation-->
            <div class="row">
                <nav class="nav">
    <ul>
        <li><a href="http://demo.incevio.com/basic-inventory/inventory"><i class="fa fa-home fa-2x"></i><br/>Home</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/items"><i class="fa fa-smile-o fa-2x"></i><br/>Item List</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/invoice"><i class="fa fa-file-text fa-2x"></i><br/>Invoices</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/inventory/damage_items"><i class="fa fa-unlink fa-2x"></i><br/>Damages</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/suppliers"><i class="fa fa-truck fa-2x"></i><br/>Suppliers</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/users"><i class="fa fa-user fa-2x"></i><br/>Users</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/settings"><i class="fa fa-cogs fa-2x"></i><br/>Settings</a></li>
        <li><a href="http://demo.incevio.com/basic-inventory/login/logout"><i class="fa fa-sign-out fa-2x"></i><br/>Logout</a></li>
    </ul>
</nav>            </div>
            <div id="note">
                   
            </div>
            <section class="content">
                <div class="box">
    <div class="box-header">
        <span class="box-title">Inventory</span>
                <div class="content-nav">
            <div class="btn-group col-sm-6 col-xs-10 col-sm-offset-3 col-xs-offset-1">
                <a href="http://demo.incevio.com/basic-inventory/inventory/item_in" class="btn btn-default btn-flat "><i class="glyphicon glyphicon-plus-sign"></i> Inventory In</a>
                <a href="http://demo.incevio.com/basic-inventory/inventory/item_out" class="btn btn-default btn-flat "><i class="glyphicon glyphicon-minus-sign"></i> Inventory Out</a>
                <a href="http://demo.incevio.com/basic-inventory/csv/download_csv/inventory" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-save"></i><span class="hidden-xs"> Download</span></a>
            </div>                              
        </div>
            </div><!-- /.box-header -->
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th class="hidden-xs">Product Name</th>
                    <th class="hidden-xs">Supplier Id</th>
		    <th class="hidden-xs">Category Id</th>
                    <th class="hidden-md hidden-sm hidden-xs">Quantity Per Unit</th>
                    <th class="hidden-xs">Unit Price</th>
                    <th class="hidden-xs">Units in Stock</th>
                    <th class="hidden-xs">Units in Order</th>
                    <th class="hidden-xs">Re-Order Level</th>
                </tr>
            </thead>
            <tbody>
                                                            <tr class="">
                            <?php $query = "SELECT * FROM product";
				 	   $run	  = mysqli_query($conn,$query);
					  
					   while($p = mysqli_fetch_array($run))
					   {
				 ?>
                    <tbody>
                        <tr>
                            <td><?php echo $p['productId']; ?></td>
                            <td><?php echo $p['productname']; ?></td>
                            <td><?php echo $p['supplierId']; ?></td>
                            <td><?php echo $p['categoryId']; ?></td>
                            <td><?php echo $p['quantityper unit']; ?></td>
                            <td><?php echo $p['unitprice']; ?></td>
                            <td><?php echo $p['unitsInStock']; ?></td>
                            <td><?php echo $p['unitsonorder']; ?></td>
                            <td><?php echo $p['re-orderlevel']; ?></td>

                        </tr>
			 </tbody>
                            <?php } ?>


              <tfoot>
                <tr>
                    <th>Product Id</th>
                    <th class="hidden-xs">Product Name</th>
                    <th class="hidden-xs">Supplier Id</th>
		    <th class="hidden-xs">Category Id</th>
                    <th class="hidden-md hidden-sm hidden-xs">Quantity Per Unit</th>
                    <th class="hidden-xs">Unit Price</th>
                    <th class="hidden-xs">Units in Stock</th>
                    <th class="hidden-xs">Units in Order</th>
                    <th class="hidden-xs">Re-Order Level</th>
                </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->            </section> <!--content-->

            <!--Footer-->
            <!-- bootstrap Scripts-->
<script src="js1/bootstrap.min.js"></script>

<!-- Data table Scripts-->
<script src="js1/jquery.dataTables.js"></script>
<script src="js1/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
    });
</script>            <!--Page Specific Footer-->
                    </div> <!--Container-->
    </body>
</html>
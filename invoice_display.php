<?php
include("connection.php");
?>

<html lang="en">
    <head>
        <title>Sales Automation</title>
        <meta charset="utf-8">
        <!-- Bootstrap Include -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/asd.css">  
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Munna Khan">
        <title>Inventory</title>
    <link href="http://demo.incevio.com/basic-inventory//assets/css/normalize.css" rel="stylesheet" media="screen">
    <link href="http://demo.incevio.com/basic-inventory//assets/bootstrap-3.2.0/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="http://demo.incevio.com/basic-inventory//assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="http://demo.incevio.com/basic-inventory//assets/datatable/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link href="http://demo.incevio.com/basic-inventory//assets/css/navigation.css" rel="stylesheet" media="screen">
    <link href="http://demo.incevio.com/basic-inventory//assets/css/style.css" rel="stylesheet" media="screen">
      
        <!--Page Specific Header-->
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
            <!--Top Navigation-->
            <div class="row">
                <nav class="nav">
    <ul>
        <li><a href="index.php"><i class="fa fa-home fa-2x"></i><br/>Home</a></li>
        <li><a href="inventory_display.php"><i class="fa fa-smile-o fa-2x"></i><br/>Inventory</a></li>
        <li><a href="invoice_display.php"><i class="fa fa-file-text fa-2x"></i><br/>Invoices</a></li>
	<li><a href="sales_display.php"><i class="fa fa-user fa-2x"></i><br/>Salesman</a></li>
        <li><a href="supplier_display.php"><i class="fa fa-truck fa-2x"></i><br/>Suppliers</a></li>
        <li><a href=""><i class="fa fa-user fa-2x"></i><br/>Customer</a></li>
        </ul>
</nav>            </div>
            <div id="note">
                   
            </div>
            <section class="content">
                <div class="box">
    <div class="box-header">
        <span class="box-title">Invoice Details</span>
            </div><!-- /.box-header -->
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th class="hidden-xs">Product Id</th>
                    <th class="hidden-xs">Quantity</th>
            	    <th class="hidden-xs">Discount</th>
                    <th class="hidden-xs">Unit_Price</th>
                </tr>
            </thead>
            <?php $query = "SELECT * FROM order_detail";
                       $run   = mysqli_query($conn,$query);
                      
                       while($p = mysqli_fetch_array($run))
                       {
                 ?>
                    <tbody>
                        <tr>
                            <td><?php echo $p['order_id']; ?></td>
                            <td><?php echo $p['product_id']; ?></td>
                            <td><?php echo $p['quantity']; ?></td>
                            <td><?php echo $p['discount']; ?></td>
                            <td><?php echo $p['unit_price']; ?></td>
                            </tr>
                            </tbody>
                            <?php } ?>
            <tfoot>
                <tr>
                     <th>Order Id</th>
                    <th class="hidden-xs">Product Id</th>
                    <th class="hidden-xs">Quantity</th>
            	    <th class="hidden-xs">Discount</th>
                    <th class="hidden-xs">Unit_Price</th>
                </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->            </section> <!--content-->

            <!--Footer-->
            <!-- bootstrap Scripts-->
<script src="http://demo.incevio.com/basic-inventory//assets/bootstrap-3.2.0/js/bootstrap.min.js"></script>

<!-- Data table Scripts-->
<script src="http://demo.incevio.com/basic-inventory//assets/datatable/js/jquery.dataTables.js"></script>
<script src="http://demo.incevio.com/basic-inventory//assets/datatable/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
    });
</script>            <!--Page Specific Footer-->
                    </div> <!--Container-->
</body>

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
        <li><a href="customer_display.php"><i class="fa fa-user fa-2x"></i><br/>Customer</a></li>
	<li><i class="fa fa-unlink fa-2x"></i><br/><a href="add_employee.php">Add Salesman</a></li>
	<li><i class="fa fa-unlink fa-2x"></i><br/><a href="edit_employee.php">Edit Salesman</a></li>
        </ul>
</nav>            </div>
            <div id="note">
                   
            </div>
            <section class="content">
                <div class="box">
    <div class="box-header">
        <span class="box-title">Salesman Details</span>
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
            <?php $query = "SELECT * FROM employee";
                       $run   = mysqli_query($conn,$query);
                      
                       while($p = mysqli_fetch_array($run))
                       {
                 ?>
                    <tbody>
                        <tr>
                            <td><?php echo $p['employee_id']; ?></td>
                            <td><?php echo $p['last_name']; ?></td>
                            <td><?php echo $p['first_name']; ?></td>
                            <td><?php echo $p['title']; ?></td>
                            <td><?php echo $p['title_of_courtesy']; ?></td>
                            <td><?php echo $p['birth_date']; ?></td>
                            <td><?php echo $p['hire_date']; ?></td>
                            <td><?php echo $p['address']; ?></td>
                            <td><?php echo $p['city']; ?></td>
                            <td><?php echo $p['region']; ?></td>
                            <td><?php echo $p['postal_code']; ?></td>
                            <td><?php echo $p['country']; ?></td>
                            
                            </tr>
                            </tbody>
                            <?php } ?>
            <tfoot>
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

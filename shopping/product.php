<?php
session_start();

if ($_SESSION['privilege'] != 'admin') {
    include('dashboard.php');
    exit;
}
include('connect.php');
include('fns.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - table</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- ul -->
        <?php
        include('link.php');
        ?>
        <!-- End of ul -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- nav-bar -->
                <?php
                include('nav.php');
                ?>
                <!-- End of nav-bar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Product</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ADD PRODUCTS</h6>
                        </div>

                        <div class="card-body">
                            <!-- <form action="proc-cat.php" method="post">
                                Product Name:<br>
                                <input type="text" name="product_name">

                                <input type="submit" value="Add category">

                            </form> -->
                            
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                         <h2>Add Products</h2>
          <?php if($error) { ?>

            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>

            <?php if($success) { ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
        <?php } ?>

          
 

<div class="container mt-5">
  <form method="post" action="proc-product.php">
    <div class="form-group">
      <label for="gender">Product Name:</label>
      <!-- <select class="form-control" id=" " > -->
        <!-- <option value="" disabled selected></option> -->
        <input type="text" class="form-control" id="name" placeholder="product" name="product_name">
        <?php
                    //$query_cat = "select * from product order by product_name";
                    //$result_cat = mysqli_query($conn, $query_cat);
                    //$num_cat = mysqli_num_rows($result_cat);
                    //for ($c=0; $c<$num_cat; $c++)
                    //{
                      //$row_cat = mysqli_fetch_array($result_cat);
                ?>
          <!-- <option></option>
<?php //} ?> -->
         
        <!-- </select> -->
    <div class="form-group">
      <label for=" ">Quantity:</label>
      <input type="text" class="form-control" id="name" placeholder="quantity" name="quantity">
    </div>
    <div class="form-group">
      <label for=" "> Size:</label>
      <input type="text" class="form-control" id="email" placeholder="size" name="size">
    </div>
    <div class="form-group">
      <label for="text">Color:</label>
      <input type="text" class="form-control" id="email" placeholder="color" 
      name=" color">
    </div>
    <div class="form-group">
      <label for="text">Specification:</label>
      <input type="text" class="form-control" id="email" placeholder="specification" 
      name="specification">
    </div>
    
      
    </div class="form-aciton">
    <button type="submit" class="btn btn-primary">Add Product</button>
  </form>
</div>



                                            
                                    </thead>

                                    <tbody>
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
             <?php 
            include('footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>   
</body>

</html>
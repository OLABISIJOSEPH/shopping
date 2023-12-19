<?php
session_start();

if ($_SESSION['privilege'] != 'admin') {
    include('dashboard.php');
    exit;
}
include('connect.php');
//sxzzzzxcx  include('fns.php');
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
 <style>
    .new {
        width: 100%;
        display: flex;
        justify-content: end;
         
        margin-bottom: 15px;
    }
 </style>
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
                    <h1 class="h3 mb-2 text-gray-800">Products</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                        </div>

                        <div class="card-body">
                            <!-- <form action="proc-cat.php" method="post">
                                Product Name:<br>
                                <input type="text" name="product_name">

                                <input type="submit" value="Add category">

                            </form>  -->

                            

                            <div class="new">
                              <a href="product.php">ADD NEW PRODUCTS</a><br>
                            </div>
                         
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                             
                                            <th>product_name</th>
                                            <th>quantity</th>
                                             <th>size</th>
                                            <th>color</th>
                                            <th>specification</th>
                                            <th>date_created</th>

                                            <?php if ($_SESSION['privilege'] == 'admin') {
                                            ?>
                                                <th>Action</th> 
                                            <?php } ?>
                                             
                                        </tr>
                                    </thead>

                                    <tbody>





                                    
                                        <?php
                                        $query = "select * from product";
                                        $result = mysqli_query($conn, $query);
                                        $num_record = mysqli_num_rows($result);
                                        for ($i = 0; $i < $num_record; $i++) {
                                            $row = mysqli_fetch_array($result);

                                        ?>  
                                            <tr>

                                                <td><?php echo $i + 1;
                                                    ?>
                                                </td>

                                                
                                                <!-- <td><?php
                                                    echo$row['token']; ?>
                                                </td> -->
                                                <td><?php
                                                    echo $row['product_name']; ?>
                                                </td>
                                                <td><?php
                                                    echo $row['quantity']; ?>
                                                </td>
                                                <td><?php
                                                    echo $row['size']; ?>
                                                </td>
                                                <td><?php
                                                    echo $row['color']; ?>
                                                </td>
                                                <td><?php
                                                    echo $row['specification']; ?>
                                                </td>
                                                <td><?php
                                                    echo $row['date_created']; ?>
                                                </td>

                                                <?php if ($_SESSION['privilege'] == 'admin') {
                                                ?>
                                                    <td>
                                                        

                                                         <a href="edit-pro.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you ready to edit- <?php echo $row['product_name']; ?>?')"> <button class="btn btn-primary">Edit </button>  </a>
                            

                                                         <a href="delete-product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete the product - <?php echo $row['product_name']; ?>?')"> <button class="btn btn-danger">Delete </button>  </a>

                                                        <!-- <a href="edit.php?id=<?php echo $row['id']; ?>"><button>Edit</button> </a> -->
                                                    </td>
                                                <?php } ?>
                                            </tr>

                                        <?php } ?>
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Footer -->
            <?php 
            include('footer.php');
            ?>
            <!-- End of Footer -->

        </div>
    </div>
</body>
</html>
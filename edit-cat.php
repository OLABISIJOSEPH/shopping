<?php
session_start();

if ($_SESSION['privilege'] != 'admin') {
    include('dashboard.php');
    exit;
}
include('connect.php');
require_once('fns.php');

$id = $_GET['id'];
$query_cat = "select * from category where id = '$id'";
$result_cat = mysqli_query($conn, $query_cat);
$num_cat = mysqli_num_rows($result_cat);

$row_cat = mysqli_fetch_array($result_cat);
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
                    <h1 class="h3 mb-2 text-gray-800"> Edit Category</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Edit Category</h6>
                        </div>

                        <div class="card-body  ">
                            <form action="proc-cat.php" method="post" class="cate mr mr-10%">
                            
                                
                                <?php if($error) { ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php } ?>
                                <?php if($success) { ?>
                                <div class="alert alert-success"><?php echo $success; ?></div>
                                <?php } ?>
                                <!-- <input type="text" name="cat_name"> -->

                                <!-- <input type="submit" value="Add category"> -->

                            </form>
                            <div class="table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <!-- <th>id</th> -->
                                            <th>cat_name</th>

                                            <?php if ($_SESSION['privilege'] == 'admin') {
                                            ?>
                                                <th>Action</th>
                                            <?php } ?>
                                            <!-- <th>id</th>
                                            <th>cat_name</th> -->
                                            <!-- <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                       
                                            <tr>

                                                <!-- <td>
                                                    ?>
                                                </td> -->
                                                <td>
                                                <form method="post" action="proc-edit-cat.php">
                                                     <div class="form-group">
                                                         
                                                        <input type="text" class="form-control" id=" "  name="cat_name" value="<?php echo $row_cat['cat_name'] ?>">
                                                         
                                                        <input type="hidden" class="form-control" id=" "  name="id" value="<?php echo $row_cat['id'] ?>">
                                                    
                                                          
                                               
                                                </td>

                                                <?php if ($_SESSION['privilege'] == 'admin') {
                                                ?>
                                                    <td>

                                                   <button type="submit" class="btn btn-primary">Save Changes</button>

                                                     

                                                      <a href="category.php?id=<?php //echo $row['id']; ?>" onclick="return confirm('Are you sure you want go back?<?php //echo $row['cat_name']; ?>?')"> <button class="btn btn-primary">back </button>  </a>

                                                         <!-- <a href="delete-cat.php?id=<?php //echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete the product - <?php //echo $row['cat_name']; ?>?')"> <button class="btn btn-danger">Delete </button>  </a> -->
                                                        
                                                    </td>

                                                     </form>
                                                <?php } ?>
                                            </tr>

                                        <?php //} ?>
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
        </div>
        <!-- End of Content Wrapper -->
    </div>
</body>
</html>
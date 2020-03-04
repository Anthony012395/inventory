<?php
    // session_start();
    // require_once __DIR__.'/apps/classes/DbController.php';
    // $uid = $_SESSION['uid'];

    // if(!$uid){

    //     $_SESSION['error'] = "Access Denied!";
    //     header('Location: index.php');
    //     exit();

    // }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="/inventory/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="/inventory/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="/inventory/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="/inventory/assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->        

        <!-- App css -->
        <link href="/inventory/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/inventory/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/inventory/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Footer Start -->
        <?php
            include __DIR__.'/../includes/topnav.php';
        ?>
        <!-- end Footer -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Inventory</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

            <?php
                
            ?>                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    

        <!-- Vendor js -->
        <script src="/inventory/assets/js/vendor.min.js"></script>

        <!-- third party js -->
        <script src="/inventory/assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="/inventory/assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="/inventory/assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="/inventory/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="/inventory/assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="/inventory/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/inventory/assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="/inventory/assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="/inventory/assets/libs/datatables/buttons.print.min.js"></script>
        <script src="/inventory/assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="/inventory/assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="/inventory/assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="/inventory/assets/libs/pdfmake/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="/inventory/assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="/inventory/assets/js/app.min.js"></script>
    

    </body>
</html>
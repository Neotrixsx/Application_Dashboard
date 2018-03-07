<?php
    include '../session.php';
    include "includephp/fetchusers.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../dist/common/sb-admin-2.css" rel="stylesheet">
    <link href="../../dist/common/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Brand Name</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown fr">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../includephp/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../launch"><i class="fa fa-arrow-left  fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../application_1"><i class="fa fa-home fa-fw"></i> App Home</a>
                        </li>
                        <li>
                            <a href="usersinfo"><i class="fa fa-users  fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="blog"><i class="fa fa-wordpress  fa-fw"></i> Blog</a>
                        </li>
                        <li>
                            <a href="newblog"><i class="fa fa-book  fa-fw"></i> New Blog</a>
                        </li>
                        <li>
                            <a href="editblog"><i class="fa fa-edit  fa-fw"></i> Edit Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Applications 1</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <!-- // Data page -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  
                                // while ($row = mysql_fetch_assoc($userinfo)){
                                while ( $row = mysqli_fetch_array($userinfo, MYSQLI_ASSOC)){
                                ?>
                                    <tr class="gradeX">
                                        <td class="center"><?php echo $row['userid']; ?></td>
                                        <td class="center"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                                        <td class="center"><?php echo $row['gender']; ?></td>
                                        <td class="center"><?php echo $row['email']; ?></td>
                                        <td class="center"><?php echo $row['address']; ?></td>
                                    </tr>
                                    <?php  
                               }
                                ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                </div>
                <div>
            </div>
        </div>
    </div>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../dist/common/sb-admin-2.js"></script>

    <!-- toast message  -->
    <link href="../../dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="../../dist/toast/jquery.toast.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>
     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>

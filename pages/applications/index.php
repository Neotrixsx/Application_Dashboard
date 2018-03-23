<?php
include '../includex/session.php';
include '../includex/phpmessages.php';
include "includephp/fetchappinfo.php";
include "includephp/appinfo.php";
include "includephp/fetchcounts.php";
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
                    <a class="navbar-brand" href="../">Brand Name</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown fr">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="../includephp/logout">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="../">
                                    <i class="fa fa-arrow-left  fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="user_list">
                                    <i class="fa fa-users fa-fw"></i> User lists</a>
                            </li>
                            <li>
                                <a href="blog_list">
                                    <i class="fa fa-wordpress  fa-fw"></i> Blog lists</a>
                            </li>
                            <li>
                                <a href="blog_new">
                                    <i class="fa fa-th-list  fa-fw"></i> New Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <?php echo $app_name ?> Application
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $countuserresult ?></div>
                                            <div>Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="user_list">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right">
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-wordpress fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $countblogresult ?></div>
                                            <div>Blogs</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="blog_list">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right">
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                             Details
                                <span class="fr">
                                    <a href="app_edit" type="button" class="btn btn-outline btn-success">
                                        <i class="fa fa-edit  fa-fw"></i> Edit</a>
                                </span>
                            </h1>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> basic information:-
                                        </div>
                                        <!-- /.panel-heading -->
                                        <!-- data grid -->
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Name: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $name ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Short Description: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $shortdes ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Full Description: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $fulldes ?>
                                            </div>
                                        </div>
                                        <!-- data grid  end-->
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> Phone ScreenShots:-
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">

                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> Tab ScreenShots:-
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">

                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> basic images:-
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">

                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> basic type and Category:-
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Application Type: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $apptype ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Application Category: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $category ?>
                                            </div>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <!-- block -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- // Data page -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo $appname ?> support and privacy:-
                                        </div>
                                        <!-- data grid -->
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Website: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $website ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Support Email: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $supportemail ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Support Phone: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $supportphone ?>
                                            </div>
                                        </div>
                                        <div class="panel-body row data-row-pad">
                                            <div class="col-lg-6">
                                                <strong>Privacy Policy: </strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo $privacypolicy ?>
                                            </div>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- end block -->

                </div>
                <script src="../../vendor/jquery/jquery.min.js"></script>
                <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="../../vendor/metisMenu/metisMenu.min.js"></script>
                <script src="../../dist/common/sb-admin-2.js"></script>

                <!-- toast message  -->
                <link href="../../dist/toast/jquery.toast.min.css" rel="stylesheet">
                <script src="../../dist/toast/jquery.toast.min.js"></script>
                <script src="../../dist/toast/jquery.toast.messages.js"></script>

                <!-- DataTables JavaScript -->
                <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
                <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
                <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>
                <!-- Page-Level Demo Scripts - Tables - Use for reference -->

                <!-- Custome js -->
                <script src="../../dist/common/script.js"></script>
                <script src="../../dist/common/datatable.js"></script>

    </body>

    </html>
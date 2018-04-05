<?php
include '../includex/session.php';
include '../includex/phpmessages.php';
include "includephp/appinfo.php";
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
                                <a href="../applications/">
                                    <i class="fa  fa-home  fa-fw"></i> Home</a>
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
                            <h1 class="page-header">New Blog</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Post Image information:-
                                        </div>
                                        <form id="postimageForm" action="upload" method="post">
                                            <div class="form-group">
                                               <label>Post Image name</label>
                                               <input class="form-control" name="imagename" value="postimage" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Post Image</label>
                                                <div class="row pt-fifteen">
                                                    <div class="col-lg-2">
                                                        <div id="targetLayer">No Image</div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="mainimage" type="file" class="inputFile form-control" />
                                                        <br/>
                                                        <input type="submit" value="Submit" class="btn btn-default" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Publisher logo:-
                                        </div>
                                        <form id="publogoForm" action="upload" method="post">
                                            <div class="form-group">
                                                <label>Publisher logo id</label>
                                                <input class="form-control" name="imagename" value="publogo" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Publisher logo</label>
                                                <div class="row pt-fifteen">
                                                    <div class="col-lg-2">
                                                        <div id="targetlogoLayer">No Image</div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="mainimage" type="file" class="inputFile form-control" />
                                                        <br/>
                                                        <input type="submit" value="Submit" class="btn btn-default" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <form role="form" method="post">
                        <!-- block -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- // Data page -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Post basic information:-
                                            </div>
                                            <!-- /.panel-heading -->
                                            <!-- data grid -->
                                            <div class="form-group">
                                                <label>Application ID</label>
                                                <input class="form-control" name="appid" value="<?php echo $app_id; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Application Name</label>
                                                <input class="form-control" value="<?php echo $app_name; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" maxlength="500" placeholder="Enter username">
                                            </div>
                                            <div class="form-group">
                                                <label>Web Title</label>
                                                <input type="text" name="webtitle" class="form-control" maxlength="100" placeholder="Enter username">
                                            </div>
                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea class="form-control" name="detail" rows="3" maxlength="5000" placeholder="Enter Addressr"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Date/Time</label>
                                                <div class='input-group date' id='datetimepicker'>
                                                    <input type='text' name="datetime" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Original link</label>
                                                <input type="text" name="weburl" maxlength="300"  class="form-control" placeholder="Enter username">
                                            </div>
                                            <div class="form-group">
                                                <label>Image url</label>
                                                <input class="form-control" type="text" maxlength="250" name="imageurl" id="imageurl" readonly>
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
                        <!-- block -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- // Data page -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Publisher information:-
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" name="pubname">
                                            </div>
                                            <div class="form-group">
                                                <label>Logo url</label>
                                                <input class="form-control" name="publogo" maxlength="250" id="publogo" readonly>
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit </button>
                        <button type="reset" class="btn btn-default">Reset </button>
                    </form>
                   <hr/>
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
        <script src="../../dist/toast/jquery.toast.messages.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->

        <!-- Custome js -->
        <script src="../../dist/common/script.js"></script>
        <script src="../../dist/common/datatable.js"></script>

        <!-- datetimepicker -->
        <script type="text/javascript" src="../../vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="../../vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="../../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css" />
       
        <script src="../../dist/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>


        <script>
            $(function () {
                $('#datetimepicker').datetimepicker();
            });

            $("#postimageForm").on('submit', (function (e) {
                e.preventDefault();
                $.ajax({
                    url: "uploadimg",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'JSON',
                    success: function(response){
                        $("#imageurl").val(response.fullurl);
                        $("#targetLayer").html('<img class="image-preview" src="'+response.url+'" class="upload-preview" />');
                    },
                    error: function () {}
                });
            }));

            $("#publogoForm").on('submit', (function (e) {
                e.preventDefault();
                $.ajax({
                    url: "uploadimg",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'JSON',
                    success: function(response){
                        $("#publogo").val(response.fullurl);
                        $("#targetlogoLayer").html('<img class="image-preview" src="'+response.url+'" class="upload-preview" />');
                    },
                    error: function () {}
                });
            }));
        </script>

    </body>

    </html>
    <?php
        include "includephp/newblog.php"
    ?>
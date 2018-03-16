<?php
    include 'session.php';
    include 'includephp/fetchadmin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/common/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/common/style.css" rel="stylesheet" type="text/css">
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
                        <li><a href="includephp/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="profile"><i class="fa fa-dashboard fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="profile"><i class="fa fa-list-alt  fa-fw"></i> Add Application</a>
                        </li>
                        <li>
                            <a href="notification/"><i class="fa fa-list-alt  fa-fw"></i>Test Notification</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Applications</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">                    
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>User ID</label>
                                <input class="form-control" value="<?php echo $id; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>User Name(email)</label>
                                <input type="email" name="uname" value="<?php echo $name; ?>" class="form-control" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label>Text Input with Placeholder</label>
                                <input text="text" name="upass" value="<?php echo $pass; ?>" class="form-control" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-default">Submit </button>
                            <button type="reset" class="btn btn-default">Reset </button>
                        </form>
                    </div>
                <div>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/common/sb-admin-2.js"></script>

    <!-- toast message  --> 
    <link href="dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="dist/toast/jquery.toast.min.js"></script>
    <script src="dist/toast/jquery.toast.messages.js"></script>
</body>
</html>
<?php
include "includephp/updateadmin.php";
?>
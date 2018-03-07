<?php
    include '../session.php';
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
                        <li><a href="includephp/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Push Notification (Android only)</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                <form role="form" action="../includephp/notification" method="post">
                    <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Title" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="notid" id="notid" class="form-control input-lg" placeholder="Not-Id" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="message" id="message" class="form-control input-lg" placeholder="Message" tabindex="3">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="style">
                            <option id="">- Style (Please Select) -</option>
                            <option id="picture">Picture</option>
                            <option id="inbox">Inbox</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="summeryText" id="summeryText" class="form-control input-lg" placeholder="Summery Text" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="image" id="image" class="form-control input-lg" placeholder="Image Url only" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="picture" id="picture" class="form-control input-lg" placeholder=" Big Picture(Notification Picture Url only)" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nottification_key" id="nottification_key" class="form-control input-lg" placeholder="Notification Key" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apiKey" id="apiKey" class="form-control input-lg" placeholder="API Key" tabindex="3">
                    </div>
                    <div class="form-group">
                        <p><strong>Sample use:</strong> "AIzaSyD1Zmb5nJqDhcWeQ6ZhlHpGguRz0Z0a222" [Get API key from Firebase console] </p>
                    </div>
                    <div class="form-group">
                        <a href="#" data-toggle="modal" data-target="#t_and_c_m">How to use</a>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 "><input type="submit" class="btn btn-success btn-block btn-lg" value="Send Notification"></input><br>
                    </div>
                </form>
                </div>
                <div>
            </div>
        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">How to use</h4>
                </div>
                <div class="modal-body">
                    <p> $title = "FinalPush Application";</p>
                    <p> $notID = 3;</p>
                    <p> $message1 = "Hi I am Developer. I am just testing Push Notification for FinalPush"; // push notification msg</p>
                    <p> $style = "picture"; //picture/inbox</p>
                    <p> $summeryText = "Venha provar os nossos Gins";</p>
                    <p> $image = "http://gintonico.com/content/uploads/2015/03/fontenova.jpg";</p>
                    <p> $picture = "http://media5.letsbonus.com/products/285000/285006/14014409744462-0-1700x690.jpg";</p>
                    <p> $key[] = 'dc_9YO1hRTo:APA91bEQV51ckIhndP7GJ29mwlRSuuLPgJ_5aRNVNnX9USGhraf4kaOwighBnBifmuEtdkvKJSX2YqMGg2QXOCpN0JOA8VmM3xd</i1etH0kWY_nTI6E_Ckj0yNFxtsNDZWRb6eWtUIy4S ';
                    <p> $apiKey = "AIzaSyD1Zmb5nJqDhcWeQ6ZhlHpGguRz0Z0a222";    // Replace with real server API key from Google APIs</i1etH0kWY_nTI6E_Ckj0yNFxtsNDZWRb6eWtUIy4S';>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../dist/common/sb-admin-2.js"></script>

    <!-- toast message  -->
    <link href="../../dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="../../dist/toast/jquery.toast.min.js"></script>

    <script>
     testtoast = function(message){
        $.toast({
            heading: 'Information',
            text: message,
            icon: 'info',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    }
    </script>
</body>
</html>

<?php
$notinfo = $_SESSION['notinfo'];
echo '<script type="text/javascript">',
'testtoast(' . $notinfo . ');',
    '</script>';
?>
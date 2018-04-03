<?php
    include 'includex/session.php';
    include 'includephp/fetchapptype.php';
    include 'includephp/fetchappcat.php';
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
                        <li>
                            <a href="includephp/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../pages"><i class="fa fa-arrow-left  fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Application </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading red-text makebold">
                           Note: All field are required!!! 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Name <span class="red-text makebold sixteen-text">*</span></label>
                                            <input class="form-control"  type="text" id="appname" name="appname" placeholder="Enter Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>ID <span class="red-text makebold sixteen-text">*</span></label>
                                            <input id="appid" name="appid" class="form-control"  type="text" readonly required >
                                            <p class="help-block">Application ID based on above name</p>
                                            <p class="help-block">Note: Non-editable and not able to change in future.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Application Type <span class="red-text makebold sixteen-text">*</span></label>
                                            <select class="form-control" name="apptype" >
                                            <?php  
                                                while ( $row = mysqli_fetch_array($apptype, MYSQLI_ASSOC)){
                                                ?>
                                                 <option id="<?php echo $row['application_type_name']; ?>"><?php echo $row['application_type_name']; ?></option>
                                                <?php  
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Application Category <span class="red-text makebold sixteen-text">*</span></label>
                                            <select class="form-control" name="appcat" >
                                            <?php  
                                                while ( $row = mysqli_fetch_array($appcat, MYSQLI_ASSOC)){
                                                ?>
                                                 <option id="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                                                <?php  
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description <span class="red-text makebold sixteen-text">*</span></label>
                                            <textarea name="appdes" class="form-control" placeholder="Enter Description" required rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Website <span class="red-text makebold sixteen-text">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">https://</span>
                                                <input type="text" class="form-control"  type="url" id="appweb" name="appweb" placeholder="Enter URL" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email(Support) <span class="red-text makebold sixteen-text">*</span></label>
                                            <input class="form-control"  type="email" id="appemail" name="appemail" placeholder="Enter Email" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/common/sb-admin-2.js"></script>

    <!-- toast message  --> 
    <link href="../dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="../dist/toast/jquery.toast.min.js"></script>
    <script src="../dist/toast/jquery.toast.messages.js"></script>
    <script>
       $(function(){
            $("#appname").keyup(function(e){
                $("#appid").val($("#appname").val().substring(0, 4).toLowerCase().replace(/ /g, '')); //+"_"
                //get value from #appname
                //split string in 4 character(maximum)
                //convert string in lowercase
                //replace space from string
                //add "_" postfix in string
            });
        });
       </script>
</body>
</html>
<?php
    include "includephp/addapp.php";
?>
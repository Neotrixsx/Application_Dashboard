
<?php
session_start();

if ($_GET['app_id']) {
    $_SESSION['Appid'] = $_GET['app_id'];
}
if ($_GET['app_name']) {
    $_SESSION['Appname'] = $_GET['app_name'];
}
if ($_GET['edituserid']) {
    $_SESSION['editUserid'] = $_GET['edituserid'];
}
if ($_GET['editblogid']) {
    $_SESSION['editBlogid'] = $_GET['editblogid'];
}

?>

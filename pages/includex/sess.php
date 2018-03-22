
<?php 
    session_start();
    $_SESSION['Appid'] = $_GET['app_id']; 
    $_SESSION['Appname'] = $_GET['app_name']; 
    echo $_SESSION['Appid'];
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);
    $sql = "SELECT `userid` FROM `admininfo` WHERE `username`= '$myusername' and `password`= '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;
        $_SESSION['login_id'] = $row['userid'];
        header("location: pages/");
    } else if ($count == 0) {
        $error = "Your Login Name or Password is invalid";
        echo "<script type='text/javascript'> loginerrortoast(); </script>";
    }
}
?>

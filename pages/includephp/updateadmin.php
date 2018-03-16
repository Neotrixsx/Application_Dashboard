<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = mysqli_real_escape_string($db, $_POST['uname']);
    $cpass = mysqli_real_escape_string($db, $_POST['upass']);
    $user_id= $_SESSION['login_id'];
    // $update = "UPDATE `userinfo` SET `email` = '$newcemail', `status` = '0' WHERE `userid` = $php_var";
    $update = "UPDATE `admininfo` SET `username`='$uname',`password`='$upass' WHERE `userid`= $user_id";

    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successupdatetoast(); </script>";
        echo "<script type='text/javascript'> setTimeout(function(){   window.location.reload(); }, 500); </script>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}

?>
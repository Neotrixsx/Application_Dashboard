<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = mysqli_real_escape_string($db, $_POST['uname']);
    $cpass = mysqli_real_escape_string($db, $_POST['upass']);
    $user_id= $_SESSION['login_id'];
    
    $update = "UPDATE `admininfo` SET `username`='$cname',`password`='$cpass' WHERE `userid`= $user_id";

    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successupdatetoast(); </script>";
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}
?>
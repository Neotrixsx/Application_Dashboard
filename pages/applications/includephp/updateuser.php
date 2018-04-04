<?php

$appid = $_SESSION['Appid'];
$edituserid = $_SESSION['editUserid'];

$tablename = $appid . "_users";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuid = mysqli_real_escape_string($db, $_POST['uid']);
    $cufname = mysqli_real_escape_string($db, $_POST['ufname']);
    $culname = mysqli_real_escape_string($db, $_POST['uname']);
    $cudeviceid = mysqli_real_escape_string($db, $_POST['udeviceid']);
    $cugender = mysqli_real_escape_string($db, $_POST['ugender']);
    $cuemail = mysqli_real_escape_string($db, $_POST['uemail']);
    $cuphone = mysqli_real_escape_string($db, $_POST['uphone']);
    $cuaddress = mysqli_real_escape_string($db, $_POST['uaddress']);
    $cunotid = mysqli_real_escape_string($db, $_POST['unotid']);
    $cunotstatus = mysqli_real_escape_string($db, $_POST['unotstatus']);
    $cuuserstatus = mysqli_real_escape_string($db, $_POST['uuserstatus']);
  
    $update = "UPDATE `$tablename` SET 
    `phone_unique_id` = '$cudeviceid', 
    `fname` = '$cufname', 
    `lname` = '$culname', 
    `gender` = '$cugender', 
    `email` = '$cuemail', 
    `phone` = '$cuphone', 
    `address` = '$cuaddress', 
    `notid` = '$cunotid', 
    `notid_status` = '$cunotstatus', 
    `status` = '$cuuserstatus' 
    WHERE `$tablename`.`userid` = $edituserid";

    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successupdatetoast(); </script>";
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}
?>
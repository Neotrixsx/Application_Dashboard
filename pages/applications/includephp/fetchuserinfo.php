<?php
$appid = $_SESSION['Appid'];
$edituserid = $_SESSION['editUserid'];

$tablename = $appid . "_users";

$sql = "SELECT `userid`,`phone_unique_id`,`fname`,`lname`,`gender`,`email`,`phone`,`address`,`notid`,`notid_status`,`status` FROM `$tablename` WHERE `userid`='$edituserid'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count >= 1) {
    $id = $row['userid'];
    $phoneuniqueid = $row['phone_unique_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $gender = $row['gender'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $notid = $row['notid'];
    $notid_status = $row['notid_status'];
    $status = $row['status'];
} else
if ($count == 0) {
    $userinfo = "Data not found!!!";
    echo "<script type='text/javascript'> nodatatoast(); </script>";
}

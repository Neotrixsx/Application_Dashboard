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
  
    $update = "UPDATE `test_blog` SET 
    `browsertitle` = 'qwqwq9', 
    `title` = 'qwqw9', 
    `detail` = 'wqwq9', 
    `image` = 'D:/xampp/htdocs/Application_Dashboard/pages/applications/dXBsb2Fk/postimage20180404.jpg9', 
    `time` = '9', 
    `link` = 'https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=lW7E9WrfvKouN8QfijbWYAg', 
    `pubname` = 'asass9', `publogo` = 'D:/xampp/htdocs/A9pplication_Dashboard/pages/applications/dXBsb2Fk/publogo20180404.png', 
    `status` = '0' 
    WHERE `test_blog`.`postid` = 1;";

    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successupdatetoast(); </script>";
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}
?>
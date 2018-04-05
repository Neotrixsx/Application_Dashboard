<?php

$appid = $_SESSION['Appid'];
$editblogid = $_SESSION['editBlogid'];

$tablename = $appid . "_blog";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bpid = mysqli_real_escape_string($db, $_POST['pid']);
    $bptitle = mysqli_real_escape_string($db, $_POST['ptitle']);
    $bpbrowsertitle = mysqli_real_escape_string($db, $_POST['pbrowsertitle']);
    $bpdatetime = mysqli_real_escape_string($db, $_POST['pdatetime']);
    $bpurllink = mysqli_real_escape_string($db, $_POST['purllink']);
    $bpdetail = mysqli_real_escape_string($db, $_POST['pdetail']);
    $bpimageurl = mysqli_real_escape_string($db, $_POST['pimageurl']);
    $bppubname = mysqli_real_escape_string($db, $_POST['ppubname']);
    $bppublogourl = mysqli_real_escape_string($db, $_POST['ppublogourl']);
    $bpstatus = mysqli_real_escape_string($db, $_POST['pstatus']);
    $b = mysqli_real_escape_string($db, $_POST['uuserstatus']);
  
    $update = "UPDATE `$tablename` SET 
    `browsertitle` = '$bpbrowsertitle', 
    `title` = '$bptitle', 
    `detail` = '$bpdetail', 
    `image` = '$bpimageurl', 
    `time` = '$bpdatetime', 
    `link` = '$bpurllink', 
    `pubname` = '$bppubname', 
    `publogo` = '$bppublogourl', 
    `status` = '$bpstatus' 
    WHERE `$tablename`.`postid` = $editblogid;";

    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successupdatetoast(); </script>";
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}
?>
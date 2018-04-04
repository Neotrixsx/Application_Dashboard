<?php
$appid = $_SESSION['Appid'];
$editblogid = $_SESSION['editBlogid'];

$tablename = $appid . "_blog";

$sql = "SELECT `postid`,`browsertitle`,`title`,`detail`,`image`,`time`,`link`,`pubname`,`publogo`,`status` FROM `$tablename` WHERE `postid`='$editblogid'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count >= 1) {
    $id = $row['postid'];
    $browsertitle = $row['browsertitle'];
    $title = $row['title'];
    $detail = $row['detail'];
    $imageurl = $row['image'];
    $datetime = $row['time'];
    $urllink = $row['link'];
    $pubname = $row['pubname'];
    $publogourl = $row['publogo'];
    $status = $row['status'];
} else
if ($count == 0) {
    $userinfo = "Data not found!!!";
    echo "<script type='text/javascript'> nodatatoast(); </script>";
}

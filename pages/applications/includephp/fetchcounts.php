<?php
$saveappid =  $_SESSION['Appid'];
$tablenameusers = $saveappid . "_users";
$tablenameblog = $saveappid . "_blog";

$usercountsql = "SELECT COUNT(userid) FROM $tablenameusers;";
$blogcountsql = "SELECT COUNT(postid) FROM $tablenameblog;";

$usercount = mysql_fetch_array(mysqli_query($db, $usercountsql));
$blogcount = mysql_fetch_array(mysqli_query($db, $blogcountsql));


if ($usercount >= 1) {
    $countuserresult=$usercount;
} else {
    $countuserresult = "0";
}

if ($blogcount >= 1) {
    $countblogresult=$blogcount;
} else {
    $countblogresult = "0";
}
?>
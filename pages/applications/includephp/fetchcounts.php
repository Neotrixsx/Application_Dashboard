<?php
$saveappid = $_SESSION['Appid'];
$tablenameusers = $saveappid . "_users";
$tablenameblog = $saveappid . "_blog";

$usercountsql = mysqli_query($db, "SELECT COUNT(userid) FROM $tablenameusers");
$blogcountsql = mysqli_query($db, "SELECT COUNT(postid) FROM $tablenameblog");

while ($usercount = $usercountsql->fetch_assoc()) {
    $ucount = $usercount['COUNT(userid)'];
}
while ($blogcount = $blogcountsql->fetch_assoc()) {
    $bcount = $blogcount['COUNT(postid)'];
}

if ($ucount >= 1) {
    $countuserresult = $ucount;
} else {
    $countuserresult = "0";
}

if ($bcount >= 1) {
    $countblogresult = $bcount;
} else {
    $countblogresult = "0";
}

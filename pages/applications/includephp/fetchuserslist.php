<?php
    $appid =  $_SESSION['Appid'];
    $tablename= $appid."_users";

    $sql = "SELECT `userid`,`fname`,`lname`,`gender`,`email`,`address` FROM `$tablename` ORDER BY userid DESC;";
    $result = mysqli_query($db, $sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $userinfo = $result;
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> setTimeout(function(){ nodatatoast(); }, 1000); </script>";
    }
?>

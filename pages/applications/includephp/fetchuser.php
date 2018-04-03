<?php
    $appid =  $_SESSION['Appid'];
    $userid =  $_SESSION['edituserid'];
    
    $tablename= $appid."_users";

    $sql = "SELECT `userid`,`fname`,`lname`,`gender`,`email`,`address` FROM `$tablename` where `userid`=$userid";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row;
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $userinfo = $result;
       
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> setTimeout(function(){ nodatatoast(); }, 1000); </script>";
    }
?>

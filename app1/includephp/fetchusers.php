<?php
    $sql = "SELECT `userid`,`fname`,`lname`,`gender`,`email`,`address` FROM `app1_users` ORDER BY userid DESC;";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $userinfo = $result;
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> testtoast(); </script>";
    }
?>

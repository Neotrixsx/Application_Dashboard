<?php
    $sql = "SELECT `postid`,`title`,`time`,`pubname`,`link` FROM `app1_blog` ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $bloginfo = $result;
    } else if ($count == 0) {
        $bloginfo = "Data not found!!!";
        echo "<script type='text/javascript'> testtoast(); </script>";
    }
?>

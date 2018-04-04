<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $aname = mysqli_real_escape_string($db, $_POST['appname']);
    $aid = mysqli_real_escape_string($db, $_POST['appid']);
    $atype = mysqli_real_escape_string($db, $_POST['apptype']);
    $acat = mysqli_real_escape_string($db, $_POST['appcat']);
    $ades = mysqli_real_escape_string($db, $_POST['appdes']);
    $aweb = mysqli_real_escape_string($db, $_POST['appweb']);
    $aemail = mysqli_real_escape_string($db, $_POST['appemail']);

    $dup_check = "SELECT `app_id` FROM `app_main_detail` WHERE `app_id`='$aid'";
    $dup_result = mysqli_query($db, $dup_check);
    $dup_count = mysqli_num_rows($dup_result);

    if ($dup_count >= 1) {
        echo "<script type='text/javascript'> duplicatetoast(); </script>";
    } else if ($dup_count == 0) {

        $app_base_info = "INSERT INTO `app_main_detail` (`app_id`, `app_name`) VALUES ( '$aid', '$aname')";

        if ($db->query($app_base_info) === true) {

            $app_details = $aid . "_details";
            $app_users = $aid . "_users";
            $app_blog = $aid . "_blog";

            $app_details_sql = "CREATE TABLE `$app_details` (
                `app_id` int(11) NOT NULL,
                `name` varchar(50) NOT NULL,
                `short_des` varchar(80) NOT NULL,
                `full_des` varchar(3000) DEFAULT NULL,
                `scr_shots_phone_1` varchar(100) DEFAULT NULL,
                `scr_shots_phone_2` varchar(100) DEFAULT NULL,
                `scr_shots_phone_3` varchar(100) DEFAULT NULL,
                `scr_shots_phone_4` varchar(100) DEFAULT NULL,
                `scr_shots_phone_5` varchar(100) DEFAULT NULL,
                `scr_shots_tab_1` varchar(100) DEFAULT NULL,
                `scr_shots_tab_2` varchar(100) DEFAULT NULL,
                `scr_shots_tab_3` varchar(100) DEFAULT NULL,
                `scr_shots_tab_4` varchar(100) DEFAULT NULL,
                `scr_shots_tab_5` varchar(100) DEFAULT NULL,
                `hi_res_icon` varchar(100) DEFAULT NULL,
                `feature_raphic` varchar(100) DEFAULT NULL,
                `promo_graphic` varchar(100) DEFAULT NULL,
                `tv_banner` varchar(100) DEFAULT NULL,
                `promo_video` varchar(100) DEFAULT NULL,
                `app_type` varchar(100) NOT NULL,
                `category` varchar(100) NOT NULL,
                `website` varchar(100) NOT NULL,
                `support_email` varchar(100) NOT NULL,
                `support_phone` varchar(100) DEFAULT NULL,
                `privacy_policy` varchar(100) DEFAULT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

            $app_details_unqkey_sql = "ALTER TABLE `$app_details`
                ADD PRIMARY KEY (`app_id`),
                ADD UNIQUE KEY `name` (`app_id`)";

            $app_users_sql = "CREATE TABLE `$app_users` (
                `userid` int(11) NOT NULL,
                `phone_unique_id` varchar(100) NOT NULL,
                `fname` varchar(100) DEFAULT NULL,
                `lname` varchar(100) DEFAULT NULL,
                `gender` varchar(50) DEFAULT NULL,
                `email` varchar(200) DEFAULT NULL,
                `phone` varchar(50) DEFAULT NULL,
                `address` varchar(500) DEFAULT NULL,
                `notid` varchar(250) DEFAULT NULL,
                `notid_status` int(1) NOT NULL,
                `status` int(1) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

            $app_users_unqkey_sql = "ALTER TABLE `$app_users`
                ADD PRIMARY KEY (`userid`),
                ADD UNIQUE KEY `phone_unique_id` (`phone_unique_id`),
                ADD UNIQUE KEY `userid` (`userid`)";

            $app_users_notnull_sql = "ALTER TABLE `$app_users`
                MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT";

            $app_blog_sql = "CREATE TABLE `$app_blog` (
                `postid` int(11) NOT NULL,
                `browsertitle` varchar(100) NOT NULL,
                `title` varchar(500) NOT NULL,
                `detail` varchar(5000) NOT NULL,
                `image` varchar(250) NOT NULL,
                `time` varchar(20) NOT NULL,
                `link` varchar(300) NOT NULL,
                `pubname` varchar(100) NOT NULL,
                `publogo` varchar(250) DEFAULT NULL,
                `status` int(1) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

            $app_blog_unqkey_sql = "ALTER TABLE `$app_blog`
                 ADD PRIMARY KEY (`postid`) USING BTREE";

            $app_blog_notnull_sql = "ALTER TABLE `$app_blog`
              MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT";

            mysqli_query($db, $app_details_sql);
            mysqli_query($db, $app_details_unqkey_sql);
            mysqli_query($db, $app_users_sql);
            mysqli_query($db, $app_users_unqkey_sql);
            mysqli_query($db, $app_users_notnull_sql);
            mysqli_query($db, $app_blog_sql);
            mysqli_query($db, $app_blog_unqkey_sql);
            mysqli_query($db, $app_blog_notnull_sql);

            $app_new_info = "INSERT INTO `$app_details` (`app_id`, `name`, `short_des`, `app_type`, `category`, `website`, `support_email`) VALUES ('$aid', '$aname', '$ades', '$atype', '$acat', '$aweb', '$aemail')";

            if ($db->query($app_new_info) === true) {
                echo "<script type='text/javascript'> addnewappsuccesstoast(); </script>";
            } else if ($app_new_count == 0) {
                echo "Error updating record: " . $db->error;
                echo "<script type='text/javascript'> addnewapptableerrortoast(); </script>";
            }

        } else if ($app_base_count == 0) {
            echo "Error app_base_count record: " . $db->error;
            echo "<script type='text/javascript'> addnewapperrortoast(); </script>";
        }
    }
}

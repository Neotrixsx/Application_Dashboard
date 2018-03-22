<?php
$saveappid =  $_SESSION['Appid'];
$tablename = $saveappid . "_details";

$fetchappinfosql = "SELECT `app_id`,`name`,`short_des`,`full_des`,`scr_shots_phone_1`,`scr_shots_phone_2`,`scr_shots_phone_3`,`scr_shots_phone_4`,`scr_shots_phone_5`,`scr_shots_tab_1`,`scr_shots_tab_2`,`scr_shots_tab_3`,`scr_shots_tab_4`,`scr_shots_tab_5`,`hi_res_icon`,`feature_raphic`,`promo_graphic`,`tv_banner`,`promo_video`,`app_type`,`category`,`website`,`support_email`,`support_phone`,`privacy_policy` FROM `$tablename`";

$result = mysqli_query($db, $fetchappinfosql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count >= 1) {
    $name = $row['name'];
    $shortdes = $row['short_des'];
    $fulldes = $row['full_des'];
    $scrshotsphone1 = $row['scr_shots_phone_1'];
    $scrshotsphone2 = $row['scr_shots_phone_2'];
    $scrshotsphone3 = $row['scr_shots_phone_3'];
    $scrshotsphone4 = $row['scr_shots_phone_4'];
    $scrshotsphone5 = $row['scr_shots_phone_5'];
    $scrshotstab1 = $row['scr_shots_tab_1'];
    $scrshotstab2 = $row['scr_shots_tab_2'];
    $scrshotstab3 = $row['scr_shots_tab_3'];
    $scrshotstab4 = $row['scr_shots_tab_4'];
    $scrshotstab5 = $row['scr_shots_tab_5'];
    $hiresicon = $row['hi_res_icon'];
    $featureraphic = $row['feature_raphic'];
    $promographic = $row['promo_graphic'];
    $tvbanner = $row['tv_banner'];
    $promovideo = $row['promo_video'];
    $apptype = $row['app_type'];
    $category = $row['category'];
    $website = $row['website'];
    $supportemail = $row['support_email'];
    $supportphone = $row['support_phone'];
    $privacypolicy = $row['privacy_policy'];
} else if ($count == 0) {
    $userinfo = "Data not found!!!";
    echo "<script type='text/javascript'> setTimeout(function(){ nodatatoast(); }, 1000); </script>";
}

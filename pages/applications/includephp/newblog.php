<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appid = mysqli_real_escape_string($db, $_POST['appid']);
    $blogtitle = mysqli_real_escape_string($db, $_POST['title']);
    $blogwebtitle = mysqli_real_escape_string($db, $_POST['webtitle']);
    $blogdetail = mysqli_real_escape_string($db, $_POST['detail']);
    $blogdatetime = mysqli_real_escape_string($db, $_POST['datetime']);
    $blogimageurl = mysqli_real_escape_string($db, $_POST['imageurl']);
    $blogwebtitle = mysqli_real_escape_string($db, $_POST['webtitle']);
    $blogweburl = mysqli_real_escape_string($db, $_POST['weburl']);
    $blogpubname = mysqli_real_escape_string($db, $_POST['pubname']);
    $blogpublogo = mysqli_real_escape_string($db, $_POST['publogo']);
   
    $user_id= $_SESSION['login_id'];
    
    $update="INSERT INTO $appid.'_blog` ( `browsertitle`, `title`, `detail`, `image`, `time`, `link`, `pubname`, `publogo`, `status`) VALUES ('$blogwebtitle', '$blogtitle', '$blogdetail', '$blogimageurl', '$blogdatetime', '$blogweburl', '$blogpubname', '$blogpublogo', '1')";
    echo $update;

    // if ($db->query($update) === TRUE) {
    //     echo "<script type='text/javascript'> successupdatetoast(); </script>";
    //     echo "<meta http-equiv='refresh' content='0'>";
    // } else {
    //     echo "Error updating record: " . $db->error;
    //     echo "<script type='text/javascript'> warningtoast(); </script>";
    // }
}
?>
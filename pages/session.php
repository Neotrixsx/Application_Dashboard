<?php
   include('include/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admininfo where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../");
   }

//    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
//     // request 30 minates ago
//     session_destroy();
//     session_unset();
// }
// $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time

?>
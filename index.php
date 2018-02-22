<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

 <link href="css/login.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<?php
include "./include/config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT `userid` FROM `userinfo` WHERE `username`= '$myusername' and `password`= '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
		
        // session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: dashboard.html");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
</head>

<body>
  <div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
<!-- <script>
	function toast(){
		toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
		toastr["success"]("My name is Inigo Montoya. You killed my father. Prepare to die!")}
	
</script> -->
</body>

</html>

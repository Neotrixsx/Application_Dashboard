
<?php
$userid = $_SESSION['login_id'];
$sql = "SELECT `userid`, `username`, `password` FROM `admininfo` WHERE `userid`=$userid";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count >= 1) {
	$id = $row['userid'];
	$name = $row['username'];
	$pass = $row['password'];
}
else
if ($count == 0) {
	$userinfo = "Data not found!!!";
	echo "<script type='text/javascript'> nodatatoast(); </script>";
}
?>

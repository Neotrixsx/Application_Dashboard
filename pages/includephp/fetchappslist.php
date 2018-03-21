
<?php
$sql = "SELECT `app_id`,`app_name` FROM `app_main_detail` ";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count >= 1) {
	$appslist=$result;
}
else
if ($count == 0) {
	$appslist = "Data not found!!!";
	echo "<script type='text/javascript'> nodatatoast(); </script>";
}
?>


<?php
$sql = "SELECT `application_type_id`,`application_type_name` FROM `application_type`";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count >= 1) {
	$apptype=$result;
}
else
if ($count == 0) {
	$userinfo = "Data not found!!!";
	echo "<script type='text/javascript'> nodatatoast(); </script>";
}
?>

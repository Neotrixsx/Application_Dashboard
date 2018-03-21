
<?php
$sql = "SELECT `category_id`,`category_name` FROM `application_category` ";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count >= 1) {
	$appcat=$result;
}
else
if ($count == 0) {
	$userinfo = "Data not found!!!";
	echo "<script type='text/javascript'> nodatatoast(); </script>";
}
?>

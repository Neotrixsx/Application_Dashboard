
<?php
date_default_timezone_set('asia/kolkata');
$newname = date("ymdh");

if (is_array($_FILES)) {
	$errors = array();
	$custom_name = date("Ymdhis"); // THIS IS WHERE I WANT TO INSERT NEW NAME
	$file_name = $_FILES['userImage']['name'];
	$file_size = $_FILES['userImage']['size'];
	$file_tmp = $_FILES['userImage']['tmp_name'];
	$file_type = $_FILES['userImage']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['userImage']['name'])));
	$extensions = array(
		'image/jpg',
		'image/jpeg',
		'image/png',
		'image/bmp',
		'image/dib',
		'image/gif'
	);
	if (in_array($file_type, $extensions)) { // CHECK FILE TYPE
		if ($file_size <= 1048576) { // FILE SIZE LIMIT
			$file_name = $custom_name . '.' . $file_ext;
			if (file_exists($file_name)) { // FIND DUPLICATE FILE BASED ON FILE NAME
				echo "<script type='text/javascript'> alert('File name exists.'); </script>";
			}
			else {
				if (empty($errors) == true) {
					if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
						$sourcePath = $file_tmp;
						$targetPath = "images/" . $file_name;
						if (move_uploaded_file($sourcePath, $targetPath)) {
                         ?>
                        <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
                        <?php
                        }
					}
				}
				else {
					echo "<script type='text/javascript'> alert('Upload failed with error code,'); </script>";
					echo "Upload failed with error code " . $_FILES['userImage']['error'];
				}
			}
		}else{
            echo "<script type='text/javascript'> alert('Larger than 1MB'); </script>";
        }
	}
	else {
		echo "<script type='text/javascript'> alert('Only Image files'); </script>";
	}
}

?>

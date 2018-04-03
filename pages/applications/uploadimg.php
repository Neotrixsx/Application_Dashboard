
<?php
date_default_timezone_set('asia/kolkata');
$imagefullpath = $_SERVER['DOCUMENT_ROOT'] . '/Application_Dashboard/pages/applications/';
if (is_array($_FILES)) {
    $errors = array();
    $today_date = date("Ymd");

    $custom_name = $_POST['imagename'];
    $file_name = $_FILES['mainimage']['name'];
    $file_size = $_FILES['mainimage']['size'];
    $file_tmp = $_FILES['mainimage']['tmp_name'];
    $file_type = $_FILES['mainimage']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['mainimage']['name'])));
    $extensions = array(
        'image/jpg',
        'image/jpeg',
        'image/png',
        'image/bmp',
        'image/dib',
        'image/gif',
    );
    if (in_array($file_type, $extensions)) { // CHECK FILE TYPE
        if ($file_size <= 1048576) { // FILE SIZE LIMIT
            $new_file_name = $custom_name . $today_date . '.' . $file_ext;
            if (empty($errors) == true) {
                if (is_uploaded_file($_FILES['mainimage']['tmp_name'])) {
                    $sourcePath = $file_tmp;
                    $targetPath = "dXBsb2Fk/" . $new_file_name;
                    if (move_uploaded_file($sourcePath, $targetPath)) {
						$finalpath = $imagefullpath . $targetPath;
                        echo json_encode(array("url"=>"$targetPath","fullurl"=>$finalpath,"message"=>"Successfully added"));
                  	}
                }
            } else {
                echo json_encode(array("message"=>"Upload failed with error code " . $_FILES['mainimage']['error']));
            }

        } else {
            echo json_encode(array("message"=>"'Larger than 1MB'"));
        }
    } else {
        echo json_encode(array("message"=>"Only Image files"));
    }
}
?>

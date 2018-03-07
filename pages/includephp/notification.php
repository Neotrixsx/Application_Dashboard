<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: REQUEST, GET, POST');
// $test_data=$_POST['test_data'];
// echo $test_data;
// echo '<pre>';print_r($_POST);
$title = $_POST['title'];
$notID = $_POST['notid'];
$message1 = $_POST['message'];
$style = $_POST['style'];
$summeryText = $_POST['summeryText'];
$image = $_POST['image'];
$picture = $_POST['picture'];
$key = explode(',',$_POST['nottification_key']); 
$apiKeydata = $_POST['apiKey']; // Replace with real server API key from Google APIs

//  echo $title;
//  echo $notID;
//  echo $message1;
//  echo $style;
//  echo $summeryText;
//  echo $image;
//  echo $picture;
//  echo $apiKeydata;
//  echo '<pre>';print_r($key);
// print_r($key); // exit();

foreach($key as $keyVal) {
    $apiKey = $apiKeydata;
    $registrationIDs = array(
        trim($keyVal)
    );

    // Message to be sent
    if ($i == 0) {
        $message = $message1;
    }
    else {
        $message = $message1;
    }

    // Set POST variables
    $url = 'https://fcm.googleapis.com/fcm/send';
    $fields = array(
        'registration_ids' => $registrationIDs,
        'data' => array(
            "title" => $title,
            "style" => $style,
            "message" => $message,
            "notId" => $notID,
            "summaryText" => $summeryText,
            "image" => $image,
            "picture" => $picture
        ) ,
    );

    // echo '<pre>'; print_r($fields); exit; --- Testing
    $headers = array(
        'Authorization: key=' . $apiKey,
        'Content-Type: application/json'
    );

    // Open connection
    $ch = curl_init();

    //Verify IP
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

    // Execute post
    $result[] = curl_exec($ch);
    // echo '<pre>'; print_r($result); exit;--- Testing

    // Close connection
    curl_close($ch);
    // print $ch;
}

// print_r($result);
$myresponse[0] = "success";
$json_encode = json_encode($myresponse);
// print_r("$json_encode");
$_SESSION['notinfo'] = $json_encode; 
// header('Location: checkIfExsists.php');
header('Location: ../notification/');
ob_end_flush();
?>
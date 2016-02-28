<?php

require_once 'include/DB_Functions.php';
$db = new DB_Functions();

// json response array
$response = array("error" => 0);

if (isset($_POST['uuid'])) {
    // receiving the post params
    $uuid = $_POST['uuid'];
    $landline = $_POST['landline'];
    $mobile1 = $_POST['mobile1'];
    $mobile2 = $_POST['mobile2'];
    $from_month = $_POST['from_month'];
    $to_month = $_POST['to_month'];
    $totalcharges = $_POST['totalcharges'];


    $result = $db->submitTelephoneBill($uuid, $landline, $mobile1, $mobile2, $from_month, $to_month,$totalcharges);
     if($result) {
        echo 'successful';
    } else {
        echo 'unsuccessful';
    }

} else {
    echo 'Required parameters not submitted';
}

?>

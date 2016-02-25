<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();

// json response array
$response = array("error" => 0);
if (isset($_POST['accountno'])) {
    // receiving the post params
    $accno = $_POST['accountno'];
    session_start();
    $username = $_SESSION['username'];
    if($db->addUserAccount($username,$accno)) {
        $response["error"] = 0;
        echo '<script language="javascript">';
        echo 'alert("Account no added successfully!")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'home.php';\",0);</script>";

    }
    else {
        // wrong login credentials
        $response["error"] = 1;
        $response["error_msg"] = "Account no not added!";
        echo '<script language="javascript">';
        echo 'alert("Account no not added!")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'accountno.html';\",0);</script>";
    }
}
else {
    // required post params is missing
    $response["error"] = 3;
    $response["error_msg"] = "Required parameters accountno is missing!";
    echo '<script language="javascript">';
    echo 'alert("Required parameters accountno is missing!")';
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'accountno.html';\",0);</script>";
}

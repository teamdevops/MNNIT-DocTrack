<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();

// json response array
$response = array("error" => 0);

if (isset($_POST['username']) && isset($_POST['password'])) {

    // receiving the post params
    $username = $_POST['username'];
    $password = $_POST['password'];

    // get the user details
    $user = $db->getUserDetails($username);

    if ($user != NULL) {
        // user is found , now check for the correct login credentials
        if ( $password  == $user["password"]) {
            $response["error"] = 0;
            $response["user"]["uuid"] = $user["uuid"];
            $response["user"]["name"] = $user["name"];
            header('Location: home.php');
        }
        else {

            // wrong login credentials
            $response["error"] = 1;
            $response["error_msg"] = "Login credentials wrong.";
            $response["password"] = $password;
            echo '<script language="javascript">';
            echo 'alert("Login credentials wrong.")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'login.html';\",0);</script>";
        }

    } else {
        // user is not found
        $response["error"] = 2;
        $response["error_msg"] = "Username doesn't exists.";
        echo '<script language="javascript">';
        echo 'alert("Username doesnt exists.")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'login.html';\",0);</script>";
    }
} else {
    // required post params is missing
    $response["error"] = 3;
    $response["error_msg"] = "Required parameters username or password is missing!";
    echo '<script language="javascript">';
    echo 'alert("Required parameters username or password is missing!")';
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'login.html';\",0);</script>";
}
?>

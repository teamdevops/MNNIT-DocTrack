<!DOCTYPE html>
<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
    $name = $_SESSION['name'];
}
else {
     header('Location: index.html');
}
?>
<html>
<head>
    <title>DocTrack - Home</title>
    <link rel="stylesheet" type="text/css" href="css/theme.css">
</head>
<body>
    <h1><center>MNNIT-DocTrack</center></h1>
    <hr/>
    <div style="border-bottom:1px solid #000;">
        <div class="left"><h2>Hello, <?php echo $name; ?> !</h2></div>
        <div class="right"><h3><a href="logout.php"> Logout </a></h3></div>
    </div>
    <br/> <br/>
    <div class="textContainer">
        <p><h4> Please choose the form to generate :</h4></p>
    </div>
    <div class="textContainer">
        <p>
            <ol>
                <li><a href="telephone.php">Telephone Bill Form</a></li>
                <li><a href="ltc.html">LTC Form</a></li>
                <li><a href="cpda.html">CPDA Form</a></li>
            </ol>
        </p>
    </div>
</body
</html>

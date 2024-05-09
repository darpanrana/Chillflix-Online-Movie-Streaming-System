<?php
    error_reporting(0);
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM feedback WHERE m_name='" . $_GET['name'] . "'"; 
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="feedback-view.css">
</head>
<body>
<article>
    <div class="f-main">

    </div>
</article>
</body>
</html>


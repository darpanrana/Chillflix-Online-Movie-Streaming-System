<?php
    include('Header.php');
    session_start();
    $con = mysqli_connect("localhost","root","","chillflix");
    $history = "SELECT * FROM history WHERE user_id='" . $_SESSION["user"] . "'";
    $res = mysqli_query($con,$history);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="history.css">
</head>
<body>
    <div class="history-main">
        <div class="h-container">
        <center>
            <h1>Your Watch History</h1>
            <br>
        </center>
        <div class="history-container">
            <div class="box">

            <div class="box-child">
                    <div class="desc">
                        <h2>Movie Name</h2>
                        <h2>Date</h2>
                    </div>
                </div>
            <?php

                while($row = mysqli_fetch_assoc($res))
                {

            ?>

                <div class="box-child">
                    <div class="desc">
                        <a href="player.php?id=<?= $row["m_id"] ?>">
                        <h2><?php echo $row["m_name"] ?></h2></a>
                        <h2><?php echo $row["time"] ?></h2>
                    </div>
                </div>
            
            <?php
                }
            ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include('footer.php');
?>
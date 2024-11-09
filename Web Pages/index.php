<?php
    session_start();
    include('Header.php');

    $con = mysqli_connect("localhost","root","","chillflix");

    $sql = "SELECT * FROM trending";
    $sql2 = "SELECT * FROM top";
    $sql3 = "SELECT * FROM header";
    $sql4 = "SELECT * FROM category1";
    $sql5 = "SELECT * FROM year";
    $sql6 = "SELECT * FROM slider";

    $res = mysqli_query($con, $sql);
    $res2 = mysqli_query($con, $sql2);
    $res3 = mysqli_query($con, $sql3);
    $res4 = mysqli_query($con, $sql4);
    $res5 = mysqli_query($con, $sql5);
    $res6 = mysqli_query($con, $sql6);

    $row6 = mysqli_fetch_array($res6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>chillflix.in</title>
</head>
<link rel="icon" type="image/png" href="Files\Logo\logo-no-background (3).png">
<script src="Homepage.js"></script>
<link rel="stylesheet" href="Homepage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <br>
    <div class="main">

    <div class="topest-top">
        <div class="topest"> 
            <?php
                while($row3 = mysqli_fetch_assoc($res3)) {
            ?>
                <img src="Files\Poster\<?php echo $row3["poster"] ?>">
                <a href="player.php?id=<?= $row3["m_id"] ?>"><button name="btn" class="btn-watch"><i class="fa fa-play" style="font-size:100px;"></i></button></a>
            <?php
                }
            ?>
        </div>
    </div>  

        <div class="slider">
            <div class="img">
                <div class="header">
                    <div class="first">&nbsp;
                        <?php echo $row6["cat1"] ?>
                    </div>
                    <div class="second">
                    <a href="All Movie.php">
                        See All
                    </a>
                    </div>
                </div>
                <br>
                <div class="poster" id="poster">
                    <?php
                        while($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <div class="poster-scale">
                            <img src="Files\Poster\<?php echo $row["poster"] ?>" class="poster-img" alt="">
                            <a href="player.php?id=<?= $row["m_id"] ?>"><button name="btn" class="btn-watch"><i class="fa fa-play" style="font-size:50px;"></i></button></a>
                        </div>
            
                    <?php
                        }
                    ?>      
                </div>
            </div>
        </div>

        <div class="slider">
            <div class="img">
                <div class="header">
                    <div class="first">&nbsp;
                        <?php echo $row6["cat2"] ?>
                    </div>
                    <div class="second">
                    <a href="All Movie.php">
                        See All
                    </a>
                    </div>
                </div>
                <br>
                <div class="poster" id="poster">
                    <?php
                        while($row2 = mysqli_fetch_assoc($res2)) {
                    ?>
                        <div class="poster-scale">
                            <img src="Files\Poster\<?php echo $row2["poster"] ?>" class="poster-img" alt="">
                            <a href="player.php?id=<?= $row2["m_id"] ?>"><button name="btn" class="btn-watch"><i class="fa fa-play" style="font-size:50px;"></i></button></a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="slider">
            <div class="img">
                <div class="header">
                    <div class="first">&nbsp;
                        <?php echo $row6["cat3"] ?>
                    </div>
                    <div class="second">
                        <a href="All Movie.php">
                            See All
                        </a>    
                    </div>
                </div>
                <br>
                <div class="poster" id="poster">
                    <?php
                        while($row4 = mysqli_fetch_assoc($res4)) {
                    ?>
                        <div class="poster-scale">
                            <img src="Files\Poster\<?php echo $row4["poster"] ?>" class="poster-img" alt="">
                            <a href="player.php?id=<?= $row4["m_id"] ?>"><button name="btn" class="btn-watch"><i class="fa fa-play" style="font-size:50px;"></i></button></a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>


        <div class="slider">
            <div class="img">
                <div class="header">
                    <div class="first">&nbsp;
                        <?php echo $row6["cat4"] ?>
                    </div>
                    <div class="second">
                        <a href="All Movie.php">
                            See All
                        </a>
                    </div>
                </div>
                <br>
                <div class="poster" id="poster">
                    <?php
                        while($row5 = mysqli_fetch_assoc($res5)) {
                    ?>
                        <div class="poster-scale">
                            <img src="Files\Poster\<?php echo $row5["poster"] ?>" class="poster-img" alt="">
                            <a href="player.php?id=<?= $row5["m_id"] ?>"><button name="btn" class="btn-watch"><i class="fa fa-play" style="font-size:50px;"></i></button></a>
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

if($_SESSION["user"] != "")
{
    $sub = "SELECT * FROM user WHERE email='" . $_SESSION["user"] . "'";
    $subres = mysqli_query($con, $sub);
    $subu = mysqli_fetch_array($subres);

    if($subu['exp'] == date("Y-m-d"))
    {
        $usub = "UPDATE user SET subscription=0,exp='NULL' WHERE email='" . $_SESSION["user"] . "'";
        mysqli_query($con, $usub);
        echo "<script>alert ('Your Subscription Is Expire..!')</script>";
    }
}


?>

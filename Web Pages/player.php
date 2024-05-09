<?php
error_reporting(0);
include('Header.php');  

session_start();
if($_SESSION["user"] == "")
{
    echo "<script>alert ('Please Log In Or Register'); 
    window.location = 'login.php';</script>";
}
else
{
    
}

$con = mysqli_connect("localhost","root","","chillflix");

$sql = "SELECT * FROM movie WHERE m_id='" . $_GET['id'] . "'";
$sql2 = "SELECT * FROM movie_master WHERE m_id='" . $_GET['id'] . "'";
$sql4 = "SELECT * FROM user WHERE email='" . $_SESSION["user"] . "'";

$res = mysqli_query($con, $sql);
$res2 = mysqli_query($con, $sql2);
$res4 = mysqli_query($con, $sql4);

$row = mysqli_fetch_array($res);
$row2 = mysqli_fetch_array($res2);
$row4 = mysqli_fetch_array($res4);

$movie = array('name'=>$row["m_name"],'poster'=>$row["poster"] ,'video'=>$row["src"],'year'=>$row["year"],'cat'=>$row["category"],'time'=>$row["duration"],'about'=>$row["about"],'sub'=>$row["subscription"],'maker'=>$row["maker_id"]);
$movie_master = array('a1'=>$row2["act1"],'a2'=>$row2["act2"],'a3'=>$row2["act3"],'a4'=>$row2["act4"],'a5'=>$row2["act5"],'d'=>$row2["director"],'p'=>$row2["producer"],'w'=>$row2["writer"],'m'=>$row2["sound"],'e'=>$row2["editor"]);
$user = array('sub'=>$row4["subscription"]);

$sql3 = "SELECT * FROM top";
$res3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_array($res3);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="player.js"></script>
</head>
<link rel="stylesheet" href="player.css">
<body>
    <div class="player-main" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('Files\\Poster\\<?php echo $movie['poster']; ?>');">
        <div class="player-child">
            <div class="player-child-first">
                <video src="Files\Movie\<?php echo $movie['video']; ?>" class="screen" controls ></video>
            </div>
            <div class="player-child-second">
                <label class="player-head">&nbsp;<?php echo $movie['name']; ?></label><br><br>
                <label class="player-mvkge"><?php echo $movie['year']; ?> | <?php echo $movie['cat']; ?> | <?php echo $movie['time']; ?></label><br><br>
                <label class="player-mvkge">Ratings :</label>
                    <br><br>
                    <div style="color: white;">
                        <?php
                            include('ratings.php');
                        ?>
                    </div>
                <br><br>
                <p class="player-mvkdtl"><?php echo $movie['about']; ?></p><br>
            </div>
        </div>

        <br><br>
        <div class="player-main2">
            <div class="player-castncrew">
                <div class="player-cast">
                    <label class="player-head">&nbsp;Cast Members : </label><br><br>
                    <div class="player-table">
                        <div class="data"><?php echo $movie_master['a1'] ?></div>
                        <div class="data"><?php echo $movie_master['a2'] ?></div>
                        <div class="data"><?php echo $movie_master['a3'] ?></div>
                        <div class="data"><?php echo $movie_master['a4'] ?></div>
                        <div class="data"><?php echo $movie_master['a5'] ?></div>
                    </div>
                </div>
                <br><br>
                <div class="player-cast">
                    <?php
                        $row = mysqli_fetch_assoc($res)
                    ?>
                    <label class="player-head">&nbsp;Crew Members : </label><br><br>
                    <div class="player-table">
                        <div class="data2">Directed By<br> <?php echo $movie_master['d'] ?></div>
                        <div class="data2">Produced By<br><?php echo $movie_master['p'] ?></div>
                        <div class="data2">Wrriten By<br><?php echo $movie_master['w'] ?></div>
                        <div class="data2">Music By<br><?php echo $movie_master['m'] ?></div>
                        <div class="data2">Editor<br><?php echo $movie_master['e'] ?></div>
                    </div>
                </div>
                <br><br>

                <div class="player-more">
                    <label class="player-head">&nbsp;More Like <?php echo $movie['name']; ?> : </label><br><br>
                
                    <div class="poster">
                        <?php
                            while($row3 = mysqli_fetch_assoc($res3)) {
                        ?>
                            <div class="player-scale">
                                <img src="Files\Poster\<?php echo $row3["poster"] ?>" class="poster-img" alt="">
                                <a href="player.php?id=<?= $row3["m_id"] ?>"><button class="btn-watch"><i class="fa fa-play" style="font-size:50px;"></i></button></a>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php

    if($movie['sub'] == 0 && $row4["subscription"] == 0)
    {
        
    }
    if($movie['sub'] != 0 && $row4["subscription"] != 0)
    {
        
    }
    if($movie['sub'] != 0 && $row4["subscription"] == 0)
    {
        echo "<script>alert ('Please Buy Subscription');
            window.location = 'subscription.php'</script>";
    }

        include('footer.php');
        
        if($_SESSION["user"] != "")
        {
            $insert = "INSERT INTO history(m_id,maker_id,m_name,user_id,time) VALUES(" . $_GET['id'] . ",'" . $movie['maker'] . "','" . $movie['name']  . "','" . $_SESSION["user"] . "','" . date("Y-m-d") . "')";
            mysqli_query($con, $insert);
        }

    ?>

</body>
</html>
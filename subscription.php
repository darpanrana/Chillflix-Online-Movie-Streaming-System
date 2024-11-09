<?php
    error_reporting(0);
    session_start();
    include('Header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $pack = "SELECT * FROM packages";
    $res = mysqli_query($con, $pack);
    if($_SESSION["user"] == "")
    {
        echo "<script>alert ('Please Log In Or Register'); 
        window.location = 'login.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="subscription.css">
</head>
<body>
    <div class="player-main">
        <div class="player-container">
            <div class="player-form">
                <div class="player-head">
                    <div class="player-head-label">
                        <label>Choose Your Plane</label>
                    </div>
                </div>

                <form action="" method="post">
                    <div class="box-packeage">
                            <br><br>
                            <div class="reg-packages">

                                <?php
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                ?>

                                    <div class="reg-packs">
                                        <div class="pack-head">
                                            <label class="reg-label"><?php echo $row["ptype"]; ?></label>
                                        </div>
                                        <br>
                                        <div class="pack-desc">
                                            <ul>
                                                <li><?php echo $row["desc"]; ?></li>
                                                <li><?php echo $row["price"]; ?> ₹</li>
                                                <li><?php echo $row["days"]; ?> Access</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="pack-btn">
                                            <input type="radio" class="pack-btn-radio" value="<?php echo $row["price"]; ?>" name="pack" id="" required>
                                        </div>
                                    </div>

                                <?php
                                    }
                                ?>
                            </div>
                </div>
                <br><br>
                <div class="player-buttons">    
                    <div class="player-button">
                        <button type="submit" name="submit" class="player-submit">Buy</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include('footer.php');

    if($_POST['pack'] == 0)
    {
        if(isset($_POST['submit']))
        {
            echo "<script>window.location = 'index.php';</script>";
        }
    }
    else
    {
        if($_POST['pack'] == 149)
        {
            $insert = "UPDATE user SET subscription=". $_POST['pack'] . ",exp='" . date("Y/m/d",strtotime("+30 days")) . "' WHERE email='" . $_SESSION["user"] . "'";
            mysqli_query($con, $insert);
        }
        else
        {
            $insert = "UPDATE user SET subscription=". $_POST['pack'] . ",exp='" . date("Y/m/d",strtotime("+75 days")) . "' WHERE email='" . $_SESSION["user"] . "'";
            mysqli_query($con, $insert);
        }
        $_SESSION["amt"] = $_POST['pack'];
        echo "<script>window.location = 'payment.php';</script>";
    }

?>
<?php
    session_start();
    include('Header.php');
    error_reporting(0);
    $con = mysqli_connect("localhost","root","","chillflix");
    $pack = "SELECT * FROM packages";
    $res = mysqli_query($con, $pack);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    <script src="registration.js"></script>
</head>
<body>
    <div class="player-main">
        <div class="player-container">
            <div class="player-form">
                <div class="player-head">
                    <div class="player-head-label">
                        <label>Registration</label>
                    </div>
                </div>

                <form action="" method="post" onSubmit = "return checkPassword(this)">
                
                <div class="player-box">
                    <div class="box-form1">
                        <div class="box-first">
                            <div class="box-reg"> 
                                    <label class="reg-label">Name : </label><br>
                                    <input type="text" class="reg-input" name="nm" id="" required><br>
                                    <label class="reg-label">Email : </label><br>
                                    <input type="email" class="reg-input" name="email" id="" required><br>
                                    <label class="reg-label">Password : </label><br>
                                    <input type="password" class="reg-input" name="pwd" id="pwd" required><br>
                                    <label class="reg-label">Confirm Password : </label><br>
                                    <input type="password" class="reg-input" name="cpwd" id="cpwd" required>
                            </div>
                        </div>
                        <div class="box-second">
                            <div class="box-packeage">
                                <label class="reg-label">Choose Your Plane : </label>
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
                                <br>
                                <div class="reg-privacy">
                                    <div class="pri-first">
                                        <label class="reg-label">Your Favorite Thing : </label><br><br>
                                        <input type="text" class="reg-input2" name="fav" id="" required>
                                    </div>
                                    <div class="pri-temp">&nbsp;</div>
                                    <div class="pri-sec">
                                        <label class="reg-label">Your Favorite Thing : </label><br><br>
                                        <p>We use reasonable administrative, logical, physical and managerial measures to safeguard your information against loss, theft and unauthorized access, use and modification.</p>
                                    </div>
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>

                <div class="player-buttons">
                    <div class="player-button">
                        <button type="submit" name="submit" class="player-submit">Register</button>
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

    $delete = "DELETE FROM user WHERE name=''";
    mysqli_query($con, $delete);

if(isset($_POST['submit']))
{
    if($_POST['pack'] == 0)
    {
        if(isset($_POST['submit']))
        {
            $_SESSION["user"] = $_POST['email'];
            $insert = "INSERT INTO user VALUES('" . $_POST['nm'] . "','" . $_POST['email'] . "','" . $_POST['pwd'] . "','" . $_POST['fav'] . "'," . $_POST['pack'] . ",'NULL')";
            mysqli_query($con, $insert);
            echo "<script>window.location = 'index.php';</script>";
        }
    }
    else
    {
        if($_POST['pack'] == 149)
        {
            $_SESSION["user"] = $_POST['email'];
            $insert = "INSERT INTO user VALUES('" . $_POST['nm'] . "','" . $_POST['email'] . "','" . $_POST['pwd'] . "'," . $_POST['pack'] . ",'" . date("Y/m/d",strtotime("+30 days")) . "')";
            mysqli_query($con, $insert);
        }
        else
        {
            $_SESSION["user"] = $_POST['email'];
            $insert = "INSERT INTO user VALUES('" . $_POST['nm'] . "','" . $_POST['email'] . "','" . $_POST['pwd'] . "'," . $_POST['pack'] . ",'" . date("Y/m/d",strtotime("+75 days")) . "')";
            mysqli_query($con, $insert);
        }
        $_SESSION["amt"] = $_POST['pack'];
        echo "<script>window.location = 'payment.php';</script>";
    }
}

?>
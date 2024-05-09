<?php
    include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="update-password.css">
</head>
<body>
    <div class="player-main">
        <div class="player-container">
            <div class="player-form">
                <div class="player-head">
                    <div class="player-head-label">
                        <label>Update Password</label>
                    </div>
                </div>

                <form action="" method="post">

                <div class="player-box">
                    <div class="box-form1">
                            <div class="box-reg"> 
                                    <label class="reg-label">Enter New Password : </label><br>
                                    <input type="password" class="reg-input" name="pwd" id="" required><br>
                                    <label class="reg-label">Re-Enter New Password : </label><br>
                                    <input type="password" class="reg-input" name="cpwd" id="" required><br>
                            </div>
                    </div>
                </div>
                
                <div class="player-buttons">    
                    <div class="player-button">
                        <button type="submit" name="submit" class="player-submit">Submit</button>
                    </div>
                </div>
                <br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    session_start();
    include('footer.php');

    if(isset($_POST['submit']))
    {
        if($_POST['pwd'] != $_POST['cpwd'])
        {
            echo "<script>alert ('Password Are Not Same')</script>";
        }
        $con = mysqli_connect("localhost","root","","chillflix");

        $sql = "UPDATE user SET pwd='" . $_POST['pwd'] . "' WHERE email='" . $_SESSION["upwd"] . "'";
        mysqli_query($con, $sql);

        $sql2 = "UPDATE maker SET pwd='" . $_POST['pwd'] . "' WHERE id='" . $_SESSION["upwd"] . "'";
        mysqli_query($con, $sql2);

        $sql3 = "UPDATE admin SET pwd='" . $_POST['pwd'] . "' WHERE id='" . $_SESSION["upwd"] . "'";
        mysqli_query($con, $sql3);

        echo"<script>alert('Password Changed')
            window.location = 'Homepage.php';</script>";

        session_destroy();
    }
?>
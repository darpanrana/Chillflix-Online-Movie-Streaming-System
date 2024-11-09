<?php
    include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="player-main">
        <div class="player-container">
            <div class="player-form">
                <div class="player-head">
                    <div class="player-head-label">
                        <label>Log In</label>
                    </div>
                </div>

                <form action="" method="post">

                <div class="player-box">
                    <div class="box-form1">
                            <div class="box-reg"> 
                                    <label class="reg-label">Email : </label><br>
                                    <input type="email" class="reg-input" name="email" id="" required><br>
                                    <label class="reg-label">Password : </label><br>
                                    <input type="password" class="reg-input" name="pwd" id="" required><br>
                            </div>
                    </div>
                </div>
                
                <div class="player-buttons">    
                    <div class="player-button">
                        <button type="submit" name="submit" class="player-submit">Log In</button>
                    </div>
                </div>
                <br>
                <div class="log-parent">
                    <div class="log-reg">
                        <label>Don't Have An Account <a href="registration.php"><label style="color: #ee3e38; cursor:pointer;">Register</label></a></label>
                        <b><label style="color: #ee3e38; cursor:pointer;">|</label></b>
                        <a href="forgot-password.php"><label style="color: #ee3e38; cursor:pointer;">Forgot Password</label></a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    session_start();
    include('footer.php');

    error_reporting(0);

    $con = mysqli_connect("localhost","root","","chillflix");

    $sql = "SELECT * FROM user WHERE email='" . $_POST['email'] . "'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);

    $sql2 = "SELECT * FROM maker WHERE id='" . $_POST['email'] . "'";
    $res2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_assoc($res2);

    $sql3 = "SELECT * FROM admin WHERE id='" . $_POST['email'] . "'";
    $res3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_assoc($res3);

    if(isset($_POST['submit']))
    {
        
        if($row2["id"] == $_POST['email'])
        {
            if(isset($_POST['submit']))
            {
                if($row2["pwd"] == $_POST['pwd'])
                {
                    $_SESSION["maker"] = $_POST['email'];
                    echo "<script>window.location = 'maker-dashboard.php';</script>";
                }
                else
                {
                    echo "<script>alert ('Wrong Password');</script>";
                }
            }
        }

        if($row3["id"] == $_POST['email'])
        {
            if(isset($_POST['submit']))
            {
                if($row3["pwd"] != $_POST['pwd'])
                {
                    echo "<script>alert ('Password Wrong');</script>";
                }
                else
                {
                    echo "<script>window.location = 'admin-dashboard.php';</script>";
                }
            }
        }
        else
        {
            if($row["email"] != $_POST['email'])
            {
                    echo "<script>alert ('User Not Found');</script>";
                    exit();
            }
            if($row["pwd"] != $_POST['pwd'])
            {
                echo "<script>alert ('Wrong Password');</script>";
            }
            else
            {
                if(isset($_POST['submit']))
                {
                    $_SESSION["user"] = $_POST['email'];
                    echo "<script>window.location = 'index.php';</script>";
                }
            }
        }

    }

?>
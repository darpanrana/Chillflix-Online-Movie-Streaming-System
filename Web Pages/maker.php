<?php
    session_start();
    include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="maker.css">
    <script src="maker.js"></script>
</head>
<body>
    <div class="maker-main">
        <div class="maker-container">
            <div class="maker-form">
                <div class="maker-head">
                    <div class="maker-head-label">
                        <label>Register As Maker</label>
                    </div>
                </div>

                <form method="post" onSubmit = "return checkPassword(this)">

                <div class="maker-box">
                    <div class="box-form1">
                            <div class="box-reg">
                                <label class="reg-label">Name : </label><br>
                                <input type="text" class="reg-input" name="nm" id="" required><br>
                                <label class="reg-label">Maker ID : </label><br>
                                <input type="text" class="reg-input" name="mid" id="" required>
                                    <div class="makerid-top">
                                        <div class="makerid">
                                            <label>@maker.com</label>        
                                        </div>
                                    </div>
                                <label class="reg-label">Password : </label><br>
                                <input type="password" class="reg-input" name="pwd" id="pwd" required><br>
                                <label class="reg-label">Confirm Password : </label><br>
                                <input type="password" class="reg-input" name="cpwd" id="cpwd" required><br>
                                <label class="reg-label">Your Favorite Thing : </label><br>
                                <input type="text" class="reg-input" name="fav" id="" required>
                            </div>
                    </div>
                </div>

                <div class="maker-buttons">    
                    <div class="maker-button">
                        <button type="submit" name="submit" class="maker-submit">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

<?php
    include('footer.php');

    error_reporting(0);

    $con = mysqli_connect("localhost","root","","chillflix");
    if(isset($_POST['submit']))
    {
        $insert = "INSERT INTO maker VALUES('" . $_POST['mid'] . "@maker.com','" . $_POST['nm'] . "','" . $_POST['pwd'] . "','" . $_POST['fav'] ."')";
        mysqli_query($con, $insert);
        $_SESSION["maker"] = $_POST['mid'] . "@maker.com";
        echo "<script>window.location = 'maker-dashboard.php';</script>";
    }
    $con->close();
?>
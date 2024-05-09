<?php
    session_start();
    
    $con = mysqli_connect("localhost","root","","chillflix");
    $cnt = "SELECT COUNT(m_id) FROM movie WHERE maker_id='" . $_SESSION["maker"] . "'";
    $res2 = mysqli_query($con, $cnt);
    $row2 = mysqli_fetch_array($res2);

    $cnt2 = "SELECT COUNT(m_id) FROM history WHERE maker_id='" . $_SESSION["maker"] . "'";
    $res3 = mysqli_query($con, $cnt2);
    $row3 = mysqli_fetch_array($res3);

    $star = "SELECT * FROM movie WHERE maker_id='" . $_SESSION["maker"] . "'";
    $res4 = mysqli_query($con, $star);
    
    include('maker-header.php');
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="Files\Logo\noname.png">
    <title>chillflix admin.in</title>
    <link rel="stylesheet" href="maker-dashboard.css">
</head>
<body>

    <div class="maker-dashboard">
        <div class="maker-container">
            <div class="maker-box">
                <div class="content-first">
                    <label>Uploaded Movies</label>
                    <br><br>
                    <label><?php echo $row2[0] ?></label>
                </div>
            </div>
            <div class="maker-box">
                <div class="content-first">
                    <label>Total Watches</label>
                    <br><br>
                    <label><?php echo $row3[0] ?></label>
                </div>
            </div>
            <div class="maker-box">
                <div class="content-last">
                    <div class="table">
                        <div class="row">
                            <div class="items">Movie Name</div>
                            <div class="items">Ratings</div>
                        </div>
                        <br>
                    
                        <?php
                            while($row4 = mysqli_fetch_array($res4))
                            {
                        ?>
                            <div class="row">
                            <div class="items"><?php echo $row4["m_name"] ?></div>
                            <div class="items"><?php echo $row4["rating"] ?></div>
                            </div>

                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
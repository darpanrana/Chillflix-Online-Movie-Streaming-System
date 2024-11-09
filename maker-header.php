    <?php
    error_reporting(0);
    session_start();
    $con = mysqli_connect("localhost","root","","chillflix");
    $name = "SELECT name FROM maker WHERE id='" . $_SESSION["maker"] . "'";
    $res = mysqli_query($con, $name);
    $row = mysqli_fetch_array($res);

    ?>
    
    <title>chillflix admin.in</title>
    <link rel="icon" type="image/png" href="Files\Logo\final.png">
    <link rel="stylesheet" href="maker-header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="admin-main">
        <div class="admin-container">

            <div class="menu">
                <div class="admin-head">
                    <img src="Files\\Logo\\logo-no-background (3).png" alt="" srcset="">
                </div>

                <div class="admin-head2">
                    <label>Hello, <?php echo $row[0]; ?></label>
                    <a href="index.php">
                    <i class="fa fa-power-off" style="font-size:30px; color:white;"></i></a>
                </div>
            </div>

            <div class="menu2">
                <div class="menu2-first">
                    <a href="maker-dashboard.php">
                    <label>Dashboard</label></a>
                </div>
                <div class="menu2-first">
                    <a href="maker-upload.php">
                    <label>Upload Movie</label></a>
                </div>
                <div class="menu2-first">
                    <a href="maker-update.php">
                    <label>Update Movie</label></a>
                </div>
                <div class="menu2-first">
                    <a href="maker-delete.php">
                    <label>Delete Movie</label></a>
                </div>
                <div class="menu2-first">
                    <a href="maker-history.php">
                    <label>Movie Ratings</label></a>
                </div>
            </div>

        </div>
    </div>
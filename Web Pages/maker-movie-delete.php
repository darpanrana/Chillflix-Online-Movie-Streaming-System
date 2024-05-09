<?php
    include('maker-header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM movie WHERE m_name='" . $_GET['name'] . "'"; 
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_array($res);

    if($row["subscription"] == 0)
    {
        $sub = "No";
    }
    else
    {
        $sub = "Yes";
    }

    $maker = "SELECT name FROM maker WHERE id='" . $row["maker_id"] . "'";
    $res2 = mysqli_query($con, $maker);
    $row2 = mysqli_fetch_array($res2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="maker-movie-delete.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<article>
<form method="post">
    <div class="admin-pending">
        <div class="pending-main">
            <div class="pending-container">
                <div class="name-desc">
                    <label>Name : <?php echo $row["m_name"] ?> <br> Category : <?php echo $row["category"] ?> <br> Year : <?php echo $row["year"] ?> <br> Duration : <?php echo $row["duration"] ?> <br> Subscription : <?php echo $sub ?></label>
                    <p><?php echo $row["about"] ?></p>
                </div>
                <br><br>
                <div class="pending-movie">
                    <img src="Files\Poster\<?php echo $row["poster"] ?>" alt="">
                    <video src="Files\Movie\<?php echo $row["src"]; ?>" controls ></video>
                </div>
                <br><br>
                <div class="pending-decision">
                    <div class="first">
                        <label>Do You Want To Delete This Movie..?</label>
                    </div>
                    <br>
                    <div class="dec-sec">
                        <div class="sec">
                            <button type="submit" name="yes">Yes</button>
                            <button type="submit" name="no">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</article>
</body>
</html>

<?php

    if(isset($_POST['yes']))
    {
        $del1 = "DELETE FROM pending WHERE m_name='" . $row["m_name"] . "'";
        mysqli_query($con, $del1);
        $del2 = "DELETE FROM pending WHERE m_name='" . $row["m_name"] . "'";
        mysqli_query($con, $del2);
        echo "<script>window.location = 'maker-delete.php';</script>";
    }
    else if(isset($_POST['no']))
    {
        echo "<script>window.location = 'maker-delete.php';</script>";
    }
    
?>
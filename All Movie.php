<?php
    include('Header.php');

    error_reporting(0);

    $con = mysqli_connect("localhost","root","","chillflix");
    $sql = "SELECT * FROM movie";
    $res = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="All Movie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br>
<form method="post">
    <div class="search-container">
        <div class="search-option">
            <div class="items">
                <label>Search : </label>
                <input type="text" name="name" id="">
            </div>
            <div class="items">
                <label>Category : </label>
                <select name="cat" id="">
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="items">
                <button type="submit" name="search"><i class="fa fa-search" style="font-size:36px; color:white; cursor:pointer;"></i></button>
            </div>
        </div>
    </div>
</form>

<?php

    if(isset($_POST['search']))
    {
        if($_POST['name'] != "")
        {
            $sql = "SELECT * FROM movie WHERE m_name='" . $_POST['name'] . "'";
            $res = mysqli_query($con, $sql);
        }
        else if($_POST['cat'] != "")
        {
            $sql = "SELECT * FROM movie WHERE category='" . $_POST['cat'] . "'";
            $res = mysqli_query($con, $sql);
        }
    }

?>

    <div class="movie-main">
        <div class="movie-container">

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
</body>
</html>

<?php
    include('footer.php');
?>
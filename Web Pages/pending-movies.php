<?php
    error_reporting(0);
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM pending WHERE m_name='" . $_GET['name'] . "'"; 
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
    <link rel="stylesheet" href="pending-movies.css">
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
                    <div class="pending-member">
                        <ul>
                            <li>Actor 1 : <?php echo $row["act1"] ?></li>
                            <li>Actor 2 : <?php echo $row["act2"] ?></li>
                            <li>Actor 3 : <?php echo $row["act3"] ?></li>
                            <li>Actor 4 : <?php echo $row["act4"] ?></li>
                            <li>Actor 5 : <?php echo $row["act5"] ?></li>
                        </ul>
                        <br>
                        <label>Give Ratings : </label>
                        <br><br>
                        <select name="rate" id="">
                            <option value="1">1 <span class="fa fa-star" style="color:black"></span></option>
                            <option value="2">2 <span class="fa fa-star" style="color:black"></span></option>
                            <option value="3">3 <span class="fa fa-star" style="color:black"></span></option>
                            <option value="4">4 <span class="fa fa-star" style="color:black"></span></option>
                            <option value="5">5 <span class="fa fa-star" style="color:black"></span></option>
                        </select>
                    </div>
                    <div class="pending-member">
                        <ul>
                            <li>Director : <?php echo $row["director"] ?></li>
                            <li>Producer : <?php echo $row["producer"] ?></li>
                            <li>Writer : <?php echo $row["writer"] ?></li>
                            <li>Music : <?php echo $row["sound"] ?></li>
                            <li>Editor : <?php echo $row["editor"] ?></li>
                        </ul>
                        <br>
                        <label>Uploaded By : </label>
                        <br><br>    
                        <label><?php echo $row2["name"] ?></label>
                    </div>
                </div>
                <br><br>
                <div class="pending-decision">
                    <div class="first">
                        <label>Do You Want To Upload This Movie..?</label>
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
        $insert1 = "INSERT INTO movie(maker_id,m_name,about,poster,src,category,year,duration,rating,subscription) VALUES ('" . $row["maker_id"] . "','" . $row["m_name"] . "','" . $row["about"] . "','" . $row["poster"] . "','" . $row["src"] . "','" . $row["category"] . "'," . $row["year"] . ",'" . $row["duration"] . "'," . $_POST['rate'] . "," . $row["subscription"] . ")";
        $insert2 = "INSERT INTO movie_master(act1,act2,act3,act4,act5,director,producer,writer,sound,editor) VALUES ('" . $row["act1"] . "','" . $row["act2"] . "','" . $row["act3"] . "','" . $row["act4"] . "','" . $row["act5"] . "','" . $row["director"] . "','" . $row["producer"] . "','" . $row["writer"] . "','" . $row["sound"] . "','" . $row["editor"] . "')";
        mysqli_query($con, $insert1);
        mysqli_query($con, $insert2);
        $del1 = "DELETE FROM pending WHERE m_name='" . $row["m_name"] . "'";
        mysqli_query($con, $del1);
    }
    else if(isset($_POST['no']))
    {
        $del2 = "DELETE FROM pending WHERE m_name='" . $row["m_name"] . "'";
        mysqli_query($con, $del2);
    }
    
?>
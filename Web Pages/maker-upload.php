<?php
        include('maker-header.php');
        $con = mysqli_connect("localhost","root","","chillflix");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="maker-upload.css">
</head>
<body>
    <form method="post">
    <div class="maker-upload">
        <div class="upload-container">
            <div class="upload-form">
                
                <div class="form">
                    <label>Movie Name : </label><br>
                    <input type="text" name="nm" id=""><br>
                    <label>About Movie : </label ><br>
                    <textarea name="abt" id="" cols="30" rows="10"></textarea><br>
                    <label>Movie Thumbanail : </label><br>
                    <input type="file" name="poster" id=""><br>
                    <label>Movie Video File : </label><br>
                    <input type="file" name="src" id=""><br>
                    <label>Movie Category : </label><br>
                    <input type="text" name="cat" id=""><br>
                    <label>Movie Release Year : </label><br>
                    <input type="number" name="year" id="">
                </div>

                <div class="form">
                    <label>Movie Duration : </label><br>
                    <input type="text" name="duration" id=""><br>
                    <label>Subscription : </label><br>
                    <select name="sub" id=""><br>
                        <option value="1" style="background-color:rgba(2, 2, 2, 0.806); color:black;">Yes</option>
                        <option value="0" style="background-color:rgba(2, 2, 2, 0.806); color:black;">No</option>
                    </select><br>
                    <label>Movie Actor 1 : </label><br>
                    <input type="text" name="act1" id=""><br>
                    <label>Movie Actor 2 : </label><br>
                    <input type="text" name="act2" id=""><br>
                    <label>Movie Actor 3 : </label><br>
                    <input type="text" name="act3" id=""><br>
                    <label>Movie Actor 4 : </label><br>
                    <input type="text" name="act4" id=""><br>
                    <label>Movie Actor 5 : </label><br>
                    <input type="text" name="act5" id="">
                </div>

                <div class="form">
                    <label>Movie Director : </label><br>
                    <input type="text" name="dir" id=""><br>
                    <label>Movie Producer : </label><br>
                    <input type="text" name="pro" id=""><br>
                    <label>Movie Writer : </label><br>
                    <input type="text" name="wri" id=""><br>
                    <label>Movie Music Artist : </label><br>
                    <input type="text" name="music" id=""><br>
                    <label>Movie Editor : </label><br>
                    <input type="text" name="edi" id=""><br><br>
                    <button type="submit" name="submit">Upload</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php

    $insert = "INSERT INTO pending VALUES('" . $_POST['nm'] . "','" . $_SESSION["maker"] . "','" . $_POST['abt'] . "','" . $_POST['poster'] . "','" . $_POST['src'] . "','" . $_POST['cat'] . "'," . $_POST['year'] . ",'" . $_POST['duration'] . "'," . $_POST['sub'] . ",'" . $_POST['act1'] . "','" . $_POST['act2'] . "','" . $_POST['act3'] . "','" . $_POST['act4'] . "','" . $_POST['act5'] . "','" . $_POST['dir'] . "','" . $_POST['pro'] . "','" . $_POST['wri'] . "','" . $_POST['music'] . "','" . $_POST['edi'] . "')";
    mysqli_query($con, $insert);
?>
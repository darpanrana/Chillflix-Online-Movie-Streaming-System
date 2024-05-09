<?php
        include('maker-header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="maker-movie-update.css">
</head>
<body>
    <form action="" method="post">
    <div class="maker-upload">
        <div class="upload-container">
            <div class="upload-form">
                
                <div class="form">
                    <label>Update About Movie : </label ><br>
                    <textarea name="m_a" id="m_a" cols="30" rows="10"></textarea><br>
                    <label>Update Movie Thumbanail : </label><br>
                    <input type="file" name="m_t" id=""><br>
                    <label>Update Movie Release Year : </label><br>
                    <input type="number" name="m_r" id=""><br>
                    <label>Update Subscription : </label><br>
                    <select name="m_s" id=""><br>
                        <option value="1" style="background-color:rgba(2, 2, 2, 0.806); color:black;">Yes</option>
                        <option value="0" style="background-color:rgba(2, 2, 2, 0.806); color:black;">No</option>
                    </select><br>
                </div>

                <div class="form">
                    <label>Update Movie Actor 1 : </label><br>
                    <input type="text" name="m_act1" id=""><br>
                    <label>Update Movie Actor 2 : </label><br>
                    <input type="text" name="m_act2" id=""><br>
                    <label>Update Movie Actor 3 : </label><br>
                    <input type="text" name="m_act3" id=""><br>
                    <label>Update Movie Actor 4 : </label><br>
                    <input type="text" name="m_act4" id=""><br>
                    <label>Update Movie Actor 5 : </label><br>
                    <input type="text" name="m_act5" id="">
                </div>

                <div class="form">
                    <label>Update Movie Director : </label><br>
                    <input type="text" name="m_director" id=""><br>
                    <label>Update Movie Producer : </label><br>
                    <input type="text" name="m_producer" id=""><br>
                    <label>Update Movie Writer : </label><br>
                    <input type="text" name="m_writer" id=""><br>
                    <label>Update Movie Music Artist : </label><br>
                    <input type="text" name="m_music" id=""><br>
                    <label>Update Movie Editor : </label><br>
                    <input type="text" name="m_editor" id=""><br><br>
                    <div class="form-btn">
                        <button type="submit">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>


<?php

    error_reporting(0);
    $con = mysqli_connect("localhost","root","","chillflix");
    $update = "UPDATE movie SET about='" . $_POST["m_a"] . "',poster='" . $_POST["m_t"] . "',year=" . $_POST['m_r'] . ",subscription='" . $_POST['m_s'] . "' WHERE m_id=" . $_GET['id'];
    $update2 = "UPDATE movie_master SET act1='" . $_POST['m_act1'] . "',act2='" . $_POST['m_act2'] . "',act3='" . $_POST['m_act3'] . "',act4='" . $_POST['m_act4'] . "',act5='" . $_POST['m_act5'] . "',director='" . $_POST['m_director'] . "',producer='" . $_POST['m_producer'] ."',writer='" . $_POST['m_writer'] . "',sound='" . $_POST['m_music'] ."',editor='" . $_POST['m_editor'] . "' WHERE m_id=" . $_GET['id'];

?>
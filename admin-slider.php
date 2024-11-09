<?php
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM header"; 
    $res = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="admin-slider.css">
</head>
<body>
    <article>
        <form method="post">
        <div class="admin-pending">
            <div class="pending-main">
                <div class="update-container">
                    <div class="update-form">
                        <div class="form-first">
                            <h1>Slider</h1>
                        </div>
                        <br>
                        <div class="bar-child">
                            <div class="item-update">
                                <div class="items-pos">

                                <?php
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                ?>

                                    <div class="items">
                                            <div class="items-name">
                                                <img src="Files/Poster/<?php echo $row["poster"] ?>" alt="" srcset="">
                                            </div>
                                    </div>

                                <?php
                                    }
                                ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    </form>
</body>
</html>

<?php


    
?>
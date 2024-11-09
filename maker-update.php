<?php
    include('maker-header.php');

    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM movie WHERE maker_id='" . $_SESSION["maker"] ."'"; 
    $res = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="maker-update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="" method="post">
    <div class="maker-update">
        <div class="update-container">
            <div class="update-form">
                <div class="form-first">
                    <h1>Update Movie</h1>
                </div>
                <br>
                <div class="bar-child">
                    <div class="item-update">
                        <div class="items-pos">

                        <?php
                            while($row = mysqli_fetch_assoc($res))
                            {
                        ?>

                            <div class="items">
                                <div class="items-id">
                                    <label><?php echo $row["m_id"]; ?></label>
                                </div>
                                <div class="items-name">
                                    <label><?php echo $row["m_name"]; ?></label>
                                </div>
                                <div class="items-update">
                                    <label>
                                        <a href="maker-movie-update.php?id=<?= $row["m_id"] ?>">
                                        <i class="fa fa-external-link" style="font-size:20px; color:white; cursor:pointer;"></i></a>
                                    </label>
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
</body>
</html>
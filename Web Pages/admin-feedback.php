<?php
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM feedback"; 
    $res = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="admin-feedback.css">
</head>
<body>
    <article>
        <div class="admin-pending">
            <div class="pending-main">
                <div class="update-container">
                    <div class="update-form">
                        <div class="form-first">
                            <h1>Feedbacks</h1>
                        </div>
                        <br>
                        <div class="bar-child">
                            <div class="item-update">
                                <div class="items-pos">

                                <div class="items">
                                        <div class="items-id">
                                            <label>Feedback By</label>
                                        </div>
                                        <div class="items-id">
                                            View
                                        </div>
                                </div>

                                <?php
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                ?>

                                    <div class="items">
                                        <div class="items-id">
                                            <label><?php echo $row["user_id"]; ?></label>
                                        </div>
                                        <div class="items-id">
                                            <label><?php echo $row["feedback"]; ?></label>
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
</body>
</html>

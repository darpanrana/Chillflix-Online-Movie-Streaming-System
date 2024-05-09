<?php
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM user"; 
    $res = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="admin-user.css">
</head>
<body>
    <article>
        <div class="admin-pending">
            <div class="pending-main">
                <div class="update-container">
                    <div class="update-form">
                        <div class="form-first">
                            <h1>All Users</h1>
                        </div>
                        <br>
                        <div class="bar-child">
                            <div class="item-update">
                                <div class="items-pos">

                                <div class="items">
                                        <div class="items-id">
                                            <label>User Name</label>
                                        </div>
                                        <div class="items-name">
                                            <label>User ID</label>
                                        </div>
                                        <div class="items-update">
                                            Subcription
                                        </div>
                                </div>

                                <?php
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                ?>

                                    <div class="items">
                                        <div class="items-id">
                                            <label><?php echo $row["name"]; ?></label>
                                        </div>
                                        <div class="items-name">
                                            <label><?php echo $row["email"]; ?></label>
                                        </div>
                                        <div class="items-update">
                                            <label><?php echo $row["subscription"]; ?></label>
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

<?php
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");
    $query = "SELECT * FROM packages WHERE price=149"; 
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_array($res);
    $query2 = "SELECT * FROM packages WHERE price=299"; 
    $res2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($res2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="admin-subsciption.css">
</head>
<body>
    <article>
        <form method="post">
        <div class="admin-pending">
            <div class="pending-main">
                <div class="update-container">
                    <div class="update-form">
                        <div class="form-first">
                            <h1>Update Packages</h1>
                        </div>
                        <br>
                        <div class="bar-child">
                            <div class="item-update">
                                <div class="items-pos">

                                    <div class="items">
                                            <div class="items-id">
                                                <label>Subscription : <?php echo $row["ptype"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Subscription Days : <?php echo $row["days"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Subscription Price : <?php echo $row["price"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Change Price : </label><br>
                                                <input type="number" name="b" id="" style="height: 30px;">
                                            </div>
                                            <div class="items-name">
                                                <button type="submit" nm="basic">Submit</button>
                                            </div>
                                        </div>

                                    <div class="items">
                                            <div class="items-id">
                                                <label>Subscription : <?php echo $row2["ptype"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Subscription Days : <?php echo $row2["days"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Subscription Price : <?php echo $row2["price"] ?></label>
                                            </div>
                                            <div class="items-name">
                                                <label>Change Price : </label><br>
                                                <input type="number" name="p" id="" style="height: 30px;">
                                            </div>
                                            <div class="items-name">
                                                <button type="submit" nm="premium">Submit</button>
                                            </div>
                                    </div>

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

if(isset($_POST['basic']))
{
    $u1 = "UPDATE packages SET price=" . $_POST['b'] . " WHERE ptype='" . $row["ptype"] . "'"; 
    mysqli_query($con, $u1);
}

if(isset($_POST['premium']))
{
    $u2 = "UPDATE packages SET price=" . $_POST['p'] . " WHERE ptype='" . $row2["ptype"] . "'"; 
    mysqli_query($con, $u2);
}
    
?>
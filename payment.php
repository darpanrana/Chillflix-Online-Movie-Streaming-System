<?php

error_reporting(0);
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="player-main">
        <div class="player-container">
            <div class="player-form">
                <div class="player-head">
                    <div class="player-head-label">
                        <label>Payment</label>
                    </div>
                </div>

                <form method="post">

                <div class="player-box">
                    <div class="box-form1">
                        <div class="box-reg">

                            <label class="reg-label">Amoumt : <?php echo $_SESSION["amt"] ?></label><br>

                            <label class="reg-label">Card Number : </label>
                            <input type="number" class="reg-input" name="card" id="" min="100000000000" max="999999999999" required><br>
                            
                            <div class="expiry">
                                <div class="item-card">
                                    <label class="reg-label">Year : </label><br>
                                    <input type="number" name="year" id="" min="1999" max="2030" required>
                                </div>
                                <div class="item-card">
                                    <label class="reg-label">Month : </label><br>
                                    <input type="number" name="month" id="" min="1" max="12" required>
                                </div>
                                <div class="item-card">
                                    <label class="reg-label">CVV : </label><br>
                                    <input type="number" name="cvv" id="" min="100" max="999" required>
                                </div>
                            </div><br>  

                            <label class="reg-label">Card Holder Name : </label>
                            <input type="text" class="reg-input" name="nm" id="" required><br>

                        </div>
                    </div>
                </div>
                
                <div class="player-buttons">    
                    <div class="player-button">
                        <button type="submit" name="submit" class="player-submit">Pay</button>
                    </div>
                </div>  
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    echo "<script>window.location = 'index.php'</script>";
}

?>
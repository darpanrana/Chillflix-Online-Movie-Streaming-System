<?php
    error_reporting(0);
    session_start();
?>

<!DOCTYPE html>
<html>
<head></head>
<script src="Header.js"></script>
<link rel="stylesheet" href="Header.css">
<link rel="icon" type="image/png" href="Files\Logo\final.png">
<title>chillflix.in</title>
    <div class="dr">    
        <div class="rd">
            <img src="Files\Logo\logo-no-background (3).png" class="logo" height="40px">
            <div class="menu">
                    <div class="menubar">
                        <div class="temp"></div>
                        <div class="log">
                            <a href="Homepage.php">
                                <label class="menunav">Home</label>
                            </a>
                        </div>
                        
                        <div class="log">
                            <a href="All Movie.php">
                                <label class="menunav">All Movies</label>
                            </a>
                        </div>

                        <div class="log">
                            <a href="subscription.php">
                            <label class="menunav">Subscription</label></a>
                        </div>

                        <div class="log">
                            <a href="history.php">
                            <label class="menunav">Watch History</label></a>
                        </div>

                            <?php
                                if($_SESSION["user"] == "")
                                {
                            ?>

                            <div class="log">
                                <a href="registration.php">
                                    <button id="loginbtn" class="login">Register</button>
                                </a>
                            </div>

                            <div class="log">
                                <a href="login.php">
                                    <button id="loginbtn" class="login">Log In</button>
                                </a>
                            </div>

                            <?php
                                }
                                else
                                {
                            ?>

                            <div class="log">   
                                <a href="log out.php">
                                    <button id="loginbtn" class="login">Log Out</button>
                                </a>
                            </div>        

                            <?php
                                }
                            ?>  
                    </div>
            </div>
        </div>
    </div>
</html>
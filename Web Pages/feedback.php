<?php
    session_start();
    include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <div class="privacy-main">
        <div class="privacy-container">
            <h1>Report ad issues or share feedback</h1>
            <br>
            <p>If you notice an issue while watching an ad on Chillflix, you can report it directly using the Report a Problem tool on the Chillflix app for iPhone, iPad, or Apple TV, or on Chillflix.com using a computer web browser. Reporting a problem notifies our content teams to look into the issue and work on fixing it as quickly as possible.</p>
            <br>
            <h3>You can use the Report a Problem tool to report any of these issues with an ad:</h3>
            <br>
            <ul>
                <li>Issues with an video quality.</li>
                <li>Issues with an audio quality or volume.</li>
                <li>An inappropriate content.</li>
                <li>Issues with where or when the movie was shown.</li>
            </ul>
            <br><br>
        <form method="post">
            <h1>Feedback : </h1>
            <br>
            <textarea name="feedback" id="" cols="30" rows="10"></textarea>
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>

<?php
    include('footer.php');

    if(isset($_POST['submit']))
    {
        if($_SESSION["user"] == "")
        {
            echo "<script>alert ('Please Log In Or Register'); 
            window.location = 'login.php';</script>";
        }
        else
        {
            $con = mysqli_connect("localhost","root","","chillflix");
            $ins = "INSERT INTO feedback VALUES(NULL,'" . $_SESSION["user"] . "','" . $_POST['feedback'] . "')";
            mysqli_query($con, $ins);
            echo "<script>alert ('Feedback Sent Succesfully...'); 
            window.location = 'homepage.php';</script>";
        }
    }
?>
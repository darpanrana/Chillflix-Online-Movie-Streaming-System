<?php
    include('admin_header.php');
    $con = mysqli_connect("localhost","root","","chillflix");

    $sql = "SELECT COUNT(email) FROM user";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

    $sql2 = "SELECT COUNT(id) FROM maker";
    $res2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($res2);

    $sql3 = "SELECT COUNT(m_id) FROM movie";
    $res3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($res3);

    $sql4 = "SELECT COUNT(id) FROM history";
    $res4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_array($res4);
?>

<link rel="stylesheet" href="admin-dashboard.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['chillflix', 'Analysis'],
        ['Movies',   <?php echo $row3[0]; ?>],
        ['Users',      <?php echo $row[0]; ?>],
        ['Makers',  <?php echo $row2[0]; ?>],
        ['Total Watch', <?php echo $row4[0]; ?>],
    ]);

    var options = {
        title: 'Chillflix'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>

<article>
<div class="admin-dashbord">
    <div class="dashboard-main">

    <div id="piechart" style="width: 1300px; height: 700px;">
    </div>

    </div>
</div>
</article>
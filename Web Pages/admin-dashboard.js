google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['chillflix', 'Analysis'],
        ['Movies',     11],
        ['Users',      2],
        ['Makers',  2],
        ['Total Watch', 2],
    ]);

    var options = {
        title: 'Chillflix'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
// Daily Visitors

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Daily Visitors', 'Amount'],
          ['Search',     11],
          ['Referal',      2],
          ['Social',  2],
          ['Paid', 2],
          ['Unasign',    7]
        ]);

        var options = {
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
}


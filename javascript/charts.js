

  function drawBarChart(titulo, id, array) {
    var data = google.visualization.arrayToDataTable(array);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      title: titulo,
      width: 600,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById(id));
    chart.draw(view, options);
}
 function drawPieChart(titulo, id, array) {

        var data = google.visualization.arrayToDataTable(array);

        var options = {
          title: titulo
        };

        var chart = new google.visualization.PieChart(document.getElementById(id));

        chart.draw(data, options);
      }


  function drawLineChart(titulo, id, array) {
        var data = google.visualization.arrayToDataTable(array);

        var options = {
          title: titulo,
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById(id));

        chart.draw(data, options);
      }

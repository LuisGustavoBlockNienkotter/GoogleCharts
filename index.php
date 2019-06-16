
<!DOCTYPE html>
<html>
<head>
	<title>Charts</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">	
	</script>
	<script type="text/javascript" src="javascript/charts.js">	
	</script>
	<script>
		var arrayBar = ([
	      ["Element", "Density", { role: "style" } ],
	      ["Copper", 8.94, "#b87333"],
	      ["Silver", 10.49, "silver"],
	      ["Gold", 19.30, "gold"],
	      ["Platinum", 21.45, "color: #e5e4e2"]
	    ]);
	    var arrayPie = ([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);
	    var arrayLine = ([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);
		google.charts.load("current", {callback: function(){
		 drawPieChart("Test", "pie", arrayPie);
		 drawLineChart("Test", "line", arrayLine);
		 drawBarChart("Test", "bar", arrayBar);},
		 packages:["corechart"]});
  		
	</script>
</head>
<body>
	<div id="pie" style="width: 900px; height: 300px;"></div>
	<br><br><br>
	<div id="line" style="width: 900px; height: 300px;"></div>
	<br><br><br>
	<div id="bar" style="width: 900px; height: 300px;"></div>

</body>
</html>
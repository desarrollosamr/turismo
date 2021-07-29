<!DOCTYPE html>
<html>
<head>
<title>Gráficos de resultados</title>
<style type="text/css">
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	.chart-container {
		width: 500px;
		margin-left: 40px;
		margin-right: 40px;
		margin-bottom: 40px;
	}
	.container {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
	}
</style>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
	<div class="container">
	    <div class="chart-container" style="float: left;">
	        <canvas id="graphCanvas"></canvas>
	    </div>
	    <div class="chart-container" style="float: right;">
	        <canvas id="graphCanvas1"></canvas>
	    </div>	
	</div>

    
    <script>
        $(document).ready(function () {
            showGraph();
            showGraph1();
        });


        function showGraph()
        {
            {
                $.post("core/modules/ventas/view/home/data.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].producto);
                        marks.push(data[i].cantidad);
                    }
                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Cantidad',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks,
                                fill: false
                            }
                        ]
                    };
                    var options = {
						responsive: true,
						title: {
							display: true,
							text: 'Ventas diarias del último mes'
						},
						legend: {
							display: false
						},
						elements: {
							point: {
								pointStyle: 'rectRot',
								radius: 5
							}
						}	
					};
                    var graphTarget = $("#graphCanvas");
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                        options: options
                    });
                });
            }
		}
        function showGraph1()
        {
            {
                $.post("core/modules/ventas/view/home/data1.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].producto);
                        marks.push(data[i].cantidad);
                    }
                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Cantidad',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };
                    var options = {
						responsive: true,
						title: {
							display: true,
							text: 'Lo más vendido'
						},
						legend: {
							display: false
						},
						scales: {
				            yAxes: [{
				                ticks: {
				                    suggestedMin: 0
				                }
				            }]
        				}
					};
                    var graphTarget = $("#graphCanvas1");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,
                        options: options
                    });
                });
            }            
        }
    </script>

</body>
</html>
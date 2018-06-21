

<?php

		
	if(isset($_POST['submit_from']))
	{

		//var_dump($_POST);
		extract($_POST);				
		$chart_type = $chart_type; //$ctype; //

		 
	}	
	else
	{
		$chart_type ='pie';
		 
	}



?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title> 		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	</head>
	<body>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<div id="chart_div" style="width: 100%; height:450px;"></div>


		<div style="position: fixed; bottom: 0px; width: 100%; padding-top: 20px; background: none repeat scroll 0px 0px rgb(249, 249, 249);">
			<form name='cusCountSelect' id="cusCountSelect" method="POST">
			 
			 <input type="hidden" id="ctype"  name ="ctype" value = "pie" />
			 <input type="hidden" id="submit_from" name="submit_from" value="1" />
			 
			<table>
			<tr><td><label style="font-family: Helvetica,Arial,sans-serif;font-size: 12px;">Chart Type : </label></td><td>
			<SELECT name='chart_type' onChange="JavaScript:updateChart(this);" id="chart_type">
			<?php if($question_type != 'grid'){?>
			<OPTION value='pie' <?php if($chart_type == 'pie'){echo 'selected';}?>>Pie Chart</OPTION>
			<OPTION value='line' <?php if($chart_type == 'line'){echo 'selected';}?>>Line Chart</OPTION>
			<?php } ?>
			<OPTION value='bar' <?php if($chart_type == 'bar'){echo 'selected';}?>>Bar Chart</OPTION>
			<?php if($question_type == 'nps'){?>
			<OPTION value='donut' <?php if($chart_type == 'donut'){echo 'selected';}?>>Donut Chart</OPTION>
			<?php } ?>
			</SELECT>
			</td>
			 
			<td><a id="download_chart" download="<?php echo "AddressAll"; ?>_chart.png" >Download Chart</a></td>
			</tr>
			</table>
			</form>
		</div>



	<script>
	var data;
	var options;
	var chart;
	function drawPieChart(dt)
	{
	 
	 	//step1 -> first of all add all js and css file of google chart  and then need to load visualization. object. 

		google.load("visualization", "1", {packages:["corechart"]});
		
		//step -2  -> set on load callback to drea a wll formated chart

		google.setOnLoadCallback(drawChart);  // callback function drawchart is here 

		function drawChart()
		{

			// we need two things  first is data in well formated mode  like -> "[[],[],[]]" 
			// and options to set some settings of graph according to our need.

			data = google.visualization.arrayToDataTable(dt);
			
			var options = {			
							title: '',
							colors: ['green', 'gold', 'red', 'blue','orange','pink'], 
							chartArea: {bottom: 10, top:0, height: "90%"},
							legend: { position: 'right', alignment:'center'},
							is3D:true
						};


			
			chart = new google.visualization.PieChart(document.getElementById("chart_div")); // which type of chart you want to create

			google.visualization.events.addListener(chart, 'ready', function () {
		    chart.setSelection([{row:99, column:10}]); // Select one of the points.			  
			$("#download_chart").attr('href',chart.getImageURI()); // how to download chart on anchor click

		    });

			chart.draw(data, options);
		}
	}


	function drawLineChart(dt)
	{
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart);
		function drawChart() {
		data = google.visualization.arrayToDataTable(dt);
		var options = {
			chartArea: {bottom: 10, top:20, height: "70%"},
		};
		
		chart = new google.visualization.LineChart(document.getElementById("chart_div"));
		google.visualization.events.addListener(chart, 'ready', function () {
	      chart.setSelection([{row:99, column:1}]); // Select one of the points.
	      //png = '<a href="' + chart.getImageURI() + '">Printable version</a>';
		  $("#download_chart").attr('href',chart.getImageURI());
	    });
		chart.draw(data, options);
		}
	}

	function drawBarChart(dt)
	{
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart);
		function drawChart() {
		data = google.visualization.arrayToDataTable(dt);
		
		var options = {
			chartArea: {bottom: 10, top:20, height: "75%"}
		};
		
		chart = new google.visualization.BarChart(document.getElementById("chart_div"));
		
		google.visualization.events.addListener(chart, 'ready', function () {
	      chart.setSelection([{row:99, column:1}]); // Select one of the points.
	      if(Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0)
	      {
	          $("#download_chart").live("click",function(){
	              var url = chart.getImageURI().replace(/^data:image\/[^;]/, 'data:application/octet-stream');
	              window.open(chart.getImageURI());
	          });
	      }
	      else{
	          $("#download_chart").attr('href',chart.getImageURI());
	      }
	    });
		//console.log(data);
		chart.draw(data, options);
		}
	}

	function drawdonutChart(dt)
	{
	   	
	    google.charts.load("current", {packages:["corechart"]});
	      google.charts.setOnLoadCallback(drawChart);
	      function drawChart() {
		
	        var data = google.visualization.arrayToDataTable(dt);

	        var options = {
	          title: '',
	          pieHole: 0.4,
			  legend: 'none',
	         // pieSliceText: 'label',
			  pieSliceText: 'value-and-percentage',
	          slices: {
	            0: { color: 'green' },
	            1: { color: 'grey' },
				2: { color: 'red' }
	          }
			  };

	        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
	      }

	}
	 
	function updateChart( charttype )
	{
		/* var e = document.getElementById('chart_type');		
		 var ctype = e.options[e.selectedIndex].value ;// e.options[e.selectedIndex].text();
		 document.getElementById('ctype').value=ctype;
*/
		$("#cusCountSelect").submit();
	}


	</script>
	</body>
</html>





<?php
 
 $dt ="[['Question','Total Attempt'],['Antigua and Barbuda',1],['United States',63],['Uruguay',1],['Brazil',4],['India',5],['New Zealand',3],['Canada',6],['Belgium',1],['Czech Republic',3],['United Kingdom',15],['Afghanistan',2],['Bahrain',1],['Azerbaijan',1],['Iceland',1],['Cyprus',1],['Zimbabwe',1],['Finland',1],['American Samoa',2],['Ireland',1],['Netherlands',2],['Israel',1],['Australia',1],['Korea',2],['Argentina',2],['Hungary',1]]";

	$dt =preg_replace( "/\r|\n|[.]/", "", $dt);

  
 
	if($chart_type == 'pie')
	{
		?>
		<script>
		drawPieChart(<?php echo $dt; ?>);
		</script>
		<?php
	}
	else if($chart_type == 'line')
	{
		?>
		<script>
		drawLineChart(<?php echo $dt; ?>);
		</script>
		<?php
	}
	else if($chart_type == 'bar')
	{
		?>
		<script>
		drawBarChart(<?php echo $dt; ?>);
		</script>
		<?php
	}
	else if($chart_type == 'donut')
	{
		?>
		<script>
		drawdonutChart(<?php echo $dt; ?>);
		</script>
		<?php
	}
	 
 

?>

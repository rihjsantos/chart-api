<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of radar chart</h6>
<div class="row">
	<pre>
		<code class="html">
			var data = {
			    labels: ["January", "February", "March", "April", "May", "June", "July"],
			    datasets: [
			        {
			            label: "My First dataset",			            
			            data: [65, 59, 80, 81, 56, 55, 40]
			        },
			        {
			            label: "My Second dataset",			            
			            data: [28, 48, 40, 19, 86, 27, 90]
			        }
			    ]
			};

			$.ajax({
				type: 'post',
				url: 'http://dummy-url.com/charts/radar',
				data: { 'data' : data },
				success: function(data) {
					$('#some-div').html(data)
				}
			})
		</code>
	</pre>

	<p>You can also use options available in the documentation at <a target="_blank" href="http://www.chartjs.org/docs/#radar-chart">ChartJS</a>
</div>


<!-- Result -->
<h6 class="docs-header">Result</h6>
<div class="row">
	<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
	<div class="row">
		<canvas id="chart"></canvas>		
	</div>
</div>

<script type="text/javascript">
	var data = {
  		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [
	        {
	            label: "My First dataset",
	            fillColor: "rgba(220,220,220,0.2)",
	            strokeColor: "rgba(220,220,220,1)",
	            pointColor: "rgba(220,220,220,1)",
	            pointStrokeColor: "#fff",
	            pointHighlightFill: "#fff",
	            pointHighlightStroke: "rgba(220,220,220,1)",
	            data: [65, 59, 80, 81, 56, 55, 40]
	        },
	        {
	            label: "My Second dataset",
	            fillColor: "rgba(151,187,205,0.2)",
	            strokeColor: "rgba(151,187,205,1)",
	            pointColor: "rgba(151,187,205,1)",
	            pointStrokeColor: "#fff",
	            pointHighlightFill: "#fff",
	            pointHighlightStroke: "rgba(151,187,205,1)",
	            data: [28, 48, 40, 19, 86, 27, 90]
	        }
	    ]
	};

	$('#spinner').show();
	setTimeout(function(){
		var ctx = document.getElementById("chart").getContext("2d");
		var chart = new Chart(ctx).Radar(data);
		$('#spinner').hide();
	},1000);			
</script>

<!-- Other options -->


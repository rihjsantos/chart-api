<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
<canvas id="chart"></canvas>

<style type="text/css">
	.ct-label {
		font-size: 1em;
	}
</style>

<script type="text/javascript">
	var data = {{ $data }}

	$('#spinner').show();
	setTimeout(function(){
		var ctx = document.getElementById("chart").getContext("2d");
		var myLineChart = new Chart(ctx).Line(data);
	},1000);			
</script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of pie chart</h6>
<div class="row">
	<pre>
		<code class="html">
			var data = {
  				series: [5, 3, 4]
			};

			$.ajax({
				type: 'post',
				url: 'http://dummy-url.com/charts/pie',
				data: { 'data' : data },
				success: function(data) {
					$('#some-div').html(data)
				}
			})

		</code>
	</pre>
</div>

<!-- Result -->
<h6 class="docs-header">Result</h6>
<div class="row">
	<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
	<div class="ct-chart ct-perfect-fourth"></div>
</div>

<script type="text/javascript">
	var data = {
		series: [5, 3, 4]
	};
	var sum = function(a, b) { return a + b };


	$('#spinner').show();
	setTimeout(function(){
		$('#spinner').hide();
		new Chartist.Pie('.ct-chart', data, {
			labelInterpolationFnc: function(value) {
    			return Math.round(value / data.series.reduce(sum) * 100) + '%';
  			}
		});
	},1000);			
</script>
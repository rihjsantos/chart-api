<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of line chart</h6>
<div class="row">
	<pre>
		<code class="html">
			var data = {
				labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
				series: [
					[12, 9, 7, 8, 5],
					[2, 1, 3.5, 7, 3],
					[1, 3, 4, 5, 6]
				]
			};

			$.ajax({
				type: 'post',
				url: 'http://dummy-url.com/charts/line',
				data: { 'data' : data },
				success: function(data) {
					$('#some-div').html(data)
				}
			});
		</code>
	</pre>
</div>

<!-- Result -->
<h6 class="docs-header">Result</h6>
<div class="row">
	<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
	<div class="ct-chart ct-perfect-fourth"></div>
</div>

<style type="text/css">
	.ct-label {
		font-size: 1em;
	}
</style>

<script type="text/javascript">
	var data = {
		labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
		series: [
			[12, 9, 7, 8, 5],
			[2, 1, 3.5, 7, 3],
			[1, 3, 4, 5, 6]
		]
	};

	$('#spinner').show();
	setTimeout(function(){
		$('#spinner').hide();
		new Chartist.Line('.ct-chart', data);
	},1000);			
</script>
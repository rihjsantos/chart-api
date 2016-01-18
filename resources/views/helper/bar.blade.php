<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of bar chart</h6>
<div class="row">
	<pre>
		<code class="html">
			var data = {
		  		labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
				series: [
					[1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
				]
			};

			$.ajax({
				type: 'post',
				url: 'http://dummy-url.com/charts/bar',
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
  		labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
		series: [
			[1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
		]
	};

	$('#spinner').show();
	setTimeout(function(){
		$('#spinner').hide();
		new Chartist.Bar('.ct-chart', data);
	},1000);			
</script>
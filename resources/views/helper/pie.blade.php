<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of pie chart</h6>
<div class="row">
	<pre>
		<code class="html">
			var data = {
				labels: ['Bananas', 'Apples', 'Grapes'],
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

<style type="text/css">
	.ct-label {
		font-size: 1em;
	}
</style>

<script type="text/javascript">
	var data = {
	  labels: ['Bananas', 'Apples', 'Grapes'],
	  series: [20, 15, 40]
	};

	var options = {
  		labelInterpolationFnc: function(value) {
    		return value[0]
  		}
	};

	var responsiveOptions = [
	  	['screen and (min-width: 640px)', {
			chartPadding: 30,
			labelOffset: 100,
			labelDirection: 'explode',
			labelInterpolationFnc: function(value) {
				return value;
			}
	  	}],
	  	['screen and (min-width: 1024px)', {
	    	labelOffset: 80,
	    	chartPadding: 20
	  	}]
	];

	$('#spinner').show();
	setTimeout(function(){
		$('#spinner').hide();
		new Chartist.Pie('.ct-chart', data, options, responsiveOptions);
	},1000);			
</script>
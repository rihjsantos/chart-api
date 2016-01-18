<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
<div class="ct-chart ct-perfect-fourth"></div>

<script type="text/javascript">
	var data = {{ $data }};

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
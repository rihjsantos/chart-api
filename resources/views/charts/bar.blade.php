<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
<div class="ct-chart ct-perfect-fourth"></div>

<style type="text/css">
	.ct-label {
		font-size: 1em;
	}
</style>

<script type="text/javascript">
	var data = {{ $data }}

	$('#spinner').show();
	setTimeout(function(){
		$('#spinner').hide();
		new Chartist.Bar('.ct-chart', data);
	},1000);			
</script>
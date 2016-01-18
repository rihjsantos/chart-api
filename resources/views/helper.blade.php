@extends('layout.app')

@section('content')
	<div class="docs-section" id="docsection-result"></div>	
	<script type="text/javascript">
		function loadHelper(type) {			
			$.ajax({
				type: "post",
				data: {'type' : type },
				url: '/helper',
				success: function(data) {					
					$('#docsection-result').html(data);
				}
			});			
		}
	</script>
@endsection
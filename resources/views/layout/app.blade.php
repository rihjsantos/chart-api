<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/skeleton.css') }}">		
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<div class="container">
					<ul class="navbar-list">
						<li class="navbar-item"><a class="navbar-link" href="#" onclick="loadHelper('pie')">Pie chart</a></li>
						<li class="navbar-item"><a class="navbar-link" href="#" onclick="loadHelper('bar')">Bar chart</a></li>
						<li class="navbar-item"><a class="navbar-link" href="#" onclick="loadHelper('line')">Line chart</a></li>						
					</ul>
				</div>
			</nav>

			@yield('content')
	</body>
</html>
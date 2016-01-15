<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/skeleton.css') }}">		
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">		
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<div class="container">
					<ul class="navbar-list">
						<li class="navbar-item"><a class="navbar-link">Pie chart</a></li>
						<li class="navbar-item"><a class="navbar-link">Bar chart</a></li>
						<li class="navbar-item"><a class="navbar-link">Line chart</a></li>
						<li class="navbar-item"><a class="navbar-link">Donut chart</a></li>
						<li class="navbar-item"><a class="navbar-link">Polar chart</a></li>
						<li class="navbar-item"><a class="navbar-link">Radar chart</a></li>
					</ul>
				</div>
			</nav>

			@yield('content')
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kaiser Permanente Lobby Demo</title>

	{{ HTML::script('js/project.concat.js') }}
	{{ HTML::script('js/main.js') }}

	{{ HTML::style('style/main.concat.css') }}
	{{ HTML::style('style/main.css') }}

</head>
<body>
	<div class="container">
		
		@yield('content')
		
	</div>

</body>
</html>
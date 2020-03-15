<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<div class="open-side" id="open-side">
			<h1 class="open-arrow">&#8592;</h1>
		</div>
		<div class="side-bar-div" id="side-bar-div">
			<ul class="side-bar">
				<li id="close-side"><h1>Close!</h1></li>
				<li><a href="#"><h3>― Home</h3></a></li>
				<li><a href="#"><h3>― Service</h3></a></li>
				<li><a href="#"><h3>― About</h3></a></li>
				<li><a href="#"><h3>― Contact</h3></a></li>
			</ul>
		</div>
	</body>
</html>
<script>
	$("#open-side").click(function (e) {
		e.stopPropagation()
	});
	$("#side-bar-div").click(function (e) {
		e.stopPropagation()
	});
</script>

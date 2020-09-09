<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Belajar jQuery Duniailkom</title>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script>
		$(document).ready(function() {
			
			$("#tombol_hide").click(function() {
				$("#box").hide();
			})
			
			$("#tombol_show").click(function() {
				$("#box").show();
			})
			
		});
	</script>
	<style>
		#box {
			width: 300px;
			height: 80px;
			background-color: pink;
			border: 2px solid black;
		}
	</style>
</head>
<body>
	<h2>Belajar jQuery Duniailkom</h2>
	<button id="tombol_hide">Hide</button>
	<button id="tombol_show">Show</button>
	<br><br>
	<div id="box"></div>
</body>
</html>
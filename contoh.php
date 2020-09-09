<!DOCTYPE html>
<html>
<head>
	<title>yuhuu</title>
	<style type="text/css">
		.jigsaw1, .jigsaw2 {
			width: 6em;
			height: 6em;
			margin: 50px;
			position: relative;
			-webkit-border-radius: .5em;
			-moz-border-radius: .5em;
			border-radius: .5em;
			cursor: pointer;
		}

		.jigsaw1,
		.jigsaw1 span {
			background-color: #0284cf; 
		}

		.jigsaw2,
		.jigsaw2 span {
			background-color: #00008B; 
		}

		.text {
			display: block;
			color: #fff;
			font-size: 1.2em;
			text-align: center;
			padding: 1.9em 0 0 1.2em;
			position: relative;
			background: transparent !important;
		}

		.jigsaw1 .t, .jigsaw2 .t {
			width: 2em;
			height: 2em;
			position: absolute;
			top: -1.5em;
			left: 2em;
			-webkit-border-radius: 4em;
			-moz-border-radius: 4em;
			border-radius: 4em;
		}

		.jigsaw1 .r, .jigsaw2 .r {
			width: 2em;
			height: 2em;
			position: absolute;
			top: 2em;
			left: 5.5em;
			-webkit-border-radius: 4em;
			-moz-border-radius: 4em;
			border-radius: 4em;
		}

		.jigsaw1 .b, .jigsaw2 .b { 
			width: 1.8em;
			height: 1.8em;
			position: absolute;
			top: 4.5em;
			left: 2.2em;
			-webkit-border-radius: 4em;
			-moz-border-radius: 4em;
			border-radius: 4em;
			background-color: #fff;
		}

		.jigsaw1 .l, .jigsaw2 .l { 
			width: 1.8em;
			height: 1.8em;
			position: absolute;
			top: 2.2em;
			left: -.4em;
			-webkit-border-radius: 4em;
			-moz-border-radius: 4em;
			border-radius: 4em;
			background-color: #fff;
		}
		
	</style>

</head>

<body>
	
	<div class="jigsaw1">
		<span class="t"></span>
		<span class="r"></span>
		<span class="b"></span>
		<span class="l"></span>
		<span class="text">Drag me</span>
	</div>

	<div class="jigsaw2">
		<span class="t"></span>
		<span class="r"></span>
		<span class="b"></span>
		<span class="l"></span>
		<span class="text">Drag me</span>
	</div>	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>	
	<script type="text/javascript">
		$(function() {
			$( ".jigsaw1,.jigsaw2" ).draggable();
		});
	</script>

</body>
</html>
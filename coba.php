<!DOCTYPE html>
<html>
<head>
	<title>wadaw</title>
	<link rel="stylesheet" type="text/css" href="inicss.css">
</head>
<body>
	<!-- MENU PUZZLE START-->
	<div class="container" id="menu-utama" >
		<div class="besar one"><img src="iconBesar.jpg" width="100" height="100">
			<div class="gambar"><img src="iconGambar1.jpg" width="40" height="40"></div>
			<div class="kecil1"><img src="iconKecil.jpg" width="40" height="40">
				<div class="teks"><b><a href="#" id="menu1">INFRA 01</a></b></div>
			</div>
		</div>

		<div class="besar two"><img src="iconBesar.jpg" width="100" height="100">
			<div class="gambar"><img src="iconGambar2.png" width="40" height="40"></div>
			<div class="kecil2"><img src="iconKecil2.png" width="40" height="40">
				<div class="teks"><b><a href="">SECURITY 02</a></b></div>
			</div>
		</div>

		<div class="besar three"><img src="iconBesar.jpg" width="100" height="100">
			<div class="gambar"><img src="iconGambar3.jpg" width="40" height="40"></div>
			<div class="kecil3"><img src="iconKecil3.png" width="40" height="40">
				<div class="teks"><b><a href="">TELCO 03</a></b></div>
			</div>
		</div>

		<div class="besar four"><img src="iconBesar.jpg" width="100" height="100">
			<div class="gambar"><img src="iconGambar4.jpg" width="40" height="40"></div>
			<div class="kecil4"><img src="iconKecil4.png" width="40" height="40">
				<div class="teks"><b><a href="">CONTENT 04</a></b></div>
			</div>
		</div>

		<div class="besar five"><img src="iconBesar.jpg" width="100" height="100">
			<div class="gambar"><img src="iconGambar5.jpg" width="40" height="40"></div>
			<div class="kecil5"><img src="iconKecil5.png" width="40" height="40">
				<div class="teks"><b><a href="">SERVICE 05</a></b></div>
			</div>
		</div>	
	</div>
	<!-- MENU PUZZLE END -->
	<!-- MENU INFRA START -->
	<div class="container" id="infra">
		<div class="inimenu teks-2">
			<div class="kembali">
				<button  id="menu"><b>X</b></button>
			</div>
			<div class="isi">
				<h3>DEVICES</h3>
				<p>desktop, laptop, tablet <br> smartphone, thin client, <br> copier, multimedia, video <br> conference ...</p>
				<img class="device-img" src="iconBoxPage2.png" width="48" height="48">
			</div>
			<div class="isi">
				<h3>CABLING</h3>
				<p>electricity, data cabling,<br> indoor fiber ...</p>
				<img class="cabling-img" src="icon2Page2.jpg" width="48" height="48">
			</div>
			<div class="isi">
				<h3>NETWORKS</h3>
				<p>desktop, laptop, tablet <br> smartphone, thin client, <br> copier, multimedia, video <br> conference ...</p>
				<img class="network-img" src="iconBoxPage2.png" width="48" height="48">
			</div>
			<div class="tombol">
				<button class="kontak">contact us</button>
			</div>
		</div>
	</div>
	<!-- MENU INFRA END -->
	<!-- kudu import dulu ternyata -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>	
	<script type="text/javascript">
		$(function() {
			$( ".besar" ).draggable({containment:'parent'});
		});
		$(document).ready(function() {
			
			$("#menu").click(function() {
				$("#infra").hide();
			})
			$("#menu1").click(function() {
				$("#infra").show();
			})
			
			
			
		});
		
	</script>
</body>
</html>
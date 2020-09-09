<!DOCTYPE html>
<html>
<head>
	<title>wadaw</title>
	<link rel="stylesheet" type="text/css" href="style_utama.css">
	<link rel="stylesheet" media="screen and (max-width: 1229.4px)" href="widescreen.css">
	<link rel="stylesheet" media="screen and (max-width: 1092.8px)" href="widescreen2.css">
	<link rel="stylesheet" media="screen and (max-width: 956.2px)" href="widescreen3.css">
	<link rel="stylesheet" media="screen and (max-width: 819.6px)" href="widescreen4.css">
	<link rel="stylesheet" media="screen and (max-width: 683px)" href="widescreen5.css">
	<link rel="stylesheet" media="screen and (max-width: 546px)" href="widescreen6.css">
</head>
<body>



	<!-- MENU PUZZLE START-->
	<div class="container" id="menuutama" >
		<div class="besar one"><img class="gambarbesar" src="iconBesar.jpg" width="120" height="120">
			<div class="gambar gambar1"><img src="iconGambar1.jpg" width="50" height="50"></div>
			<div class="kecil1"><img src="iconKecil.jpg" width="50" height="50">
				<div class="teks"><b><a href="#" id="menu1">INFRA 01</a></b></div>
			</div>
		</div>

		<div class="besar two"><img class="gambarbesar" src="iconBesar.jpg" width="120" height="120">
			<div class="gambar gambar2"><img src="iconGambar2.png" width="50" height="50"></div>
			<div class="kecil2"><img src="iconKecil2.png" width="50" height="50">
				<div class="teks"><b><a href="">SECURITY 02</a></b></div>
			</div>
		</div>

		<div class="besar three"><img class="gambarbesar" src="iconBesar.jpg" width="120" height="120">
			<div class="gambar gambar3"><img src="iconGambar3.jpg" width="50" height="50"></div>
			<div class="kecil3"><img src="iconKecil3.png" width="50" height="50">
				<div class="teks"><b><a href="">TELCO 03</a></b></div>
			</div>
		</div>

		<div class="besar four"><img class="gambarbesar" src="iconBesar.jpg" width="120" height="120">
			<div class="gambar gambar4"><img src="iconGambar4.jpg" width="50" height="50"></div>
			<div class="kecil4"><img src="iconKecil4.png" width="50" height="50">
				<div class="teks"><b><a href="">CONTENT 04</a></b></div>
			</div>
		</div>

		<div class="besar five"><img class="gambarbesar" src="iconBesar.jpg" width="120" height="120">
			<div class="gambar gambar5"><img src="iconGambar5.jpg" width="50" height="50"></div>
			<div class="kecil5"><img src="iconKecil5.png" width="50" height="50">
				<div class="teks"><b><a href="">SERVICE 05</a></b></div>
			</div>
		</div>	
	</div>
	<!-- MENU PUZZLE END -->
	<!-- MENU INFRA START -->

	<div class="container" id="infra">
		<div class="inimenu teks-2">
			<div class="kembali">
				<button id="menu">X</button>
			</div>
			<div class="segitiga-atas"><img src="triangleIcon.png" width="100" height="35">
				<div class="atas"><img src="projectIcon.png" width="50px" height="50px">
					<div class="judul">INFRA<b><h1>01</h1></b></div>
				</div>
				<div class="kotak">
					<img src="thisBox.png" width="90" height="90">
					<div class="judul2">INFRA<b><h1>01</h1></b></div>
				</div>
			</div>
			<!-- isi konten -->
			<div class="isi isi-device">
				<div><h3>DEVICES</h3></div>
				<p>desktop, laptop, tablet <br> smartphone, thin client, <br> copier, multimedia, video <br> conference ...</p>
				<img class="isi device-img" src="iconBoxPage2.png" width="48" height="48">
			</div>
			<div class="isi isi-cabling">
				<div><h3>CABLING</h3></div>
				<p>electricity, data cabling,<br> indoor fiber ...</p>
				<img class="isi cabling-img" src="icon2Page2.jpg" width="48" height="48">
			</div>
			<div class="isi isi-network">
				<div><h3>NETWORKS</h3></div>
				<p>desktop, laptop, tablet <br> smartphone, thin client, <br> copier, multimedia, video <br> conference ...</p>
				<img class="isi network-img" src="iconBoxPage2.png" width="48" height="48">
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
				$("#infra").hide(1000);
			})
			$("#menu1").click(function() {
				$("#infra").fadeIn("slow");
			})



		});

	</script>
</body>
</html>
<?php
$Kullanici = "Furkan Cebar";
$eposta = "b191210088@ogr.sakarya.edu.tr";
$sifre = "123";

if ($eposta != $_POST["mail"] || $sifre != $_POST["password"])
{
	header("Location: Login.html");
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>

	<title>Giriş</title>
	<link rel="icon" href="logo.jpg">

	<meta charset="utf-8">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">

	<link href="style.css" rel="stylesheet">

</head>

<body>

	<div class="baslik row justify-content-center">
		<div class="col-4 text-center">
			<h1>
				Furkan Cebar
			</h1>

			<h3>
				Kişisel Web Sitesi
			</h3>
		</div>
	</div>

	<div class="navbar justify-content-center">
		<a href="Anasayfa.html" class="btn">Anasayfa</a>
		<a href="Sehrim.html" class="btn">Şehrim</a>
		<a href="Hakkimda.html" class="btn">Hakkımda</a>
		<a href="CV.html" class="btn">CV</a>
		<a href="Iletisim.html" class="btn">İletişim</a>
		<a href="#" class="btn btn-secili">Giriş</a>
	</div>

	<div class="icerik-kutusu container">
	<div class="row">
	<div class="col-sm-5"></div>
	<div class="col-sm-2" style="background-color: rgb(184, 184, 184); border-radius: 6px;">
		<br>
			<p style="color: black">Hoş geldiniz <?php echo $Kullanici;  ?></p>
		<br>
	</div>
	</div>
	</div>

	<div class="text-center" style="margin-bottom: 0;">© 2019-2020 Furkan CEBAR</div>
</body>

</html>
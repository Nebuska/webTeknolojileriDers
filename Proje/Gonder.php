<?php
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

if (empty($_POST["istek"]))
{
	$_POST["istek"] = "";
}
if (empty($_POST["sikayet"]))
{
	$_POST["sikayet"] = "";
}
if (empty($_POST["soru"]))
{
	$_POST["soru"] = "";
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>

	<title>İletişim</title>
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
		<a href="#" class="btn btn-secili">İletişim</a>
		<a href="Login.html" class="btn">Giriş</a>
	</div>

	<div class="icerik-kutusu container justify-content-center">
		<div class="row">
		<div class="col-4"></div>
		<div class="col-4,5" style="background-color: rgb(184, 184, 184); border-radius: 6px; padding: 1rem;">
		<form action="Gonder.php" method="POST">
			<table>
				<tr>
					<td>
						İsim:
					</td>
					<td>
						<?php echo test_input($_POST["isim"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						Soyisim:
					</td>
					<td>
						<?php echo test_input($_POST["soyisim"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<?php echo test_input($_POST["email"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						Cinsiyetiniz:
					</td>
					<td>
						<?php echo test_input($_POST["cinsiyet"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						İletişim Sebebiniz:
					</td>
					<td>
						<?php echo test_input($_POST["sikayet"]); ?>
						<?php echo test_input($_POST["istek"]); ?>
						<?php echo test_input($_POST["soru"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						Yaşınız:
					</td>
					<td>
						<?php echo test_input($_POST["yas"]); ?>
					</td>
				</tr>
				<tr>
					<td>
						İletiniz:
					</td>
					<td>
						<?php echo test_input($_POST["ileti"]); ?>
					</td>
				</tr>
			</table>
		</form>
		</div>
</div>
	</div>

	<div class="text-center" style="margin-bottom: 0;">© 2019-2020 Furkan CEBAR</div>
</body>

</html>
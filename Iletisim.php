<!DOCTYPE html>

<html>
<head>
	<title>İletişim</title>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="description" content="İletişim">
	<meta name="keywords" content="Kemal,İletişim">
	<meta name="author" content="Muhammet Kemal Güvenç">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dea668164e.js" crossorigin="anonymous"></script>

    <!-- İkon -->
    <link rel="icon" href="Kaynaklar/ikonlar/city-solid.ico" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="Kaynaklar/styles.css" />

    <!-- Javascript -->
    <script src="Kaynaklar/javascript.js" type="application/javascript"></script>

</head>

<body>
	<header>
		İLETİŞİM KURUN
	</header>

	<nav>
		<div class="container-fluid">
			<div class="row" id="menu">
				<div class="col-lg">
					<a href="index.html">
						<i class="fas fa-home fa-fw"></i> Hakkımda
					</a>
				</div>
				<div class="col-lg">
					<a href="CV.html">
						<i class="fas fa-address-card fa-fw"></i> Cv
					</a>
				</div>
				<div class="col-lg">
					<a href="Sehrim.html">
						<i class="fas fa-city fa-fw"></i> Şehrim
					</a>
				</div>
				<div class="col-lg">
					<a href="Mirasimiz.html">
						<i class="fas fa-monument fa-fw"></i> Mirasımız
					</a>
				</div>
				<div class="col-lg">
					<a href="Iletisim.html" id="active">
						<i class="fas fa-file-signature fa-fw"></i> İletişim
					</a>
				</div>
				<div class="col-lg">
					<a href="Giris.html">
						<i class="fas fa-sign-in-alt fa-fw"></i> Giriş
					</a>
				</div>
			</div>
		</div>
	</nav>

	<article>
		<div class="container">
			<div class="row">
				<div class="col-lg"></div>
				<div class="col-lg-9">
					<br />
					<fieldset class="p-2">
						<legend class="w-auto">Göndermek İstediğiniz İletişim Formu</legend>
						<table>
							<tr>
								<td><label for="ad">Ad:</label></td>
								<td id="ad">
									<?php echo $_POST["ad"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="soyad">Soyad:</label></td>
								<td id="soyad">
									<?php echo $_POST["soyad"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="eposta">E-Posta:</label></td>
								<td id="eposta">
									<?php echo $_POST["eposta"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="cinsiyet">Cinsiyet:</label></td>
								<td id="cinsiyet">
									<?php echo $_POST["cinsiyet"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="konular">Soracağınız konular:</label></td>
								<td id="konular">
									<?php
									for($i=0;$i<count($_POST["konu"]);$i++) 
										echo $_POST["konu"][$i]."<br/>";
                                     ?>
								</td>
							</tr>
							<tr>
								<td><label for="aciliyet">Sorunun aciliyeti:</label></td>
								<td id="aciliyet">
									<?php echo $_POST["aciliyet"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="tarih">Sorunun ilk olduğu tarih:</label></td>
								<td id="tarih">
									<?php echo $_POST["tarih"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="dosya">Göndermek istediğiniz dosya (eğer varsa)</label></td>
								<td id="dosya">
									<?php echo $_POST["dosya"]; ?>
								</td>
							</tr>
							<tr>
								<td><label for="soru">Soru:</label></td>
								<td id="soru">
									<?php echo $_POST["soru"]; ?>
								</td>
							</tr>
						</table>
					</fieldset>
					<br />
				</div>
				<div class="col-lg"></div>
			</div>
		</div>
		<br /><br /><br /><br /><br />
	</article>

	<footer>
        <p>Kişisel Web Sayfam --- #EvdeKalTürkiye</p>
	</footer>

</body>
</html>
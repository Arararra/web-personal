<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="css\uikit.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.js"></script>
	<!-- php -->
	<?php
		$pendidikan = [
			[
			'tahun' => '2009-2015',
			'sekolah' => 'SD Muhammadiyah 25 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			],
			[
			'tahun' => '2015-2018',
			'sekolah' => 'SMP Muhammadiyah 15 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			],
			[
			'tahun' => '2018-Sekarang',
			'sekolah' => 'SMK Negeri 2 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			],
		];
		$keahlian = [
			[
			'keahlian' => 'C++',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
			[
			'keahlian' => 'HTML',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
			[
			'keahlian' => 'CSS',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
			[
			'keahlian' => 'JAVA',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
			[
			'keahlian' => 'PHP',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
			[
			'keahlian' => 'MySQL',
			'deskripsi' => 'sample sample sample sample sample sample sample sample sample sample sample sample.',
			],
		];
	?>

	<!-- navbar -->
	<nav class="uk-navbar-container" uk-navbar style="position: sticky; top: 0; z-index: 9999;">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Main Menu</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Keahlian</a></li>
            <li><a href="#">Pendidikan</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </div>
	</nav>

	<!-- main menu/head -->
	<div class="main">
		<img src="media/mainimage.jpg" class="main-image" uk-img>
		<p class="main-text"><?php include 'header.php'; ?></p>
	</div>

	<!-- profil -->
	<p style="font-size: 500px; text-align: center;">A</p>

	<!-- keahlian -->
	<h1 align="center">Keahlian</h1>
	<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
    <?php foreach ($keahlian as $key => $value): ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        	<p><?php echo $value['keahlian'] ?></p>
			<p><?php echo $value['deskripsi'] ?></p>
        </div>
    </div>
    <?php endforeach ?>
	</div>

	<br><br>

	<!-- pendidikan -->
	<h1 align="center">Riwayat Sekolah</h1>
	<div class="uk-flex uk-flex-center">
	<?php foreach ($pendidikan as $key => $value): ?>
	<div class="uk-child-width-1-2@ uk-margin-left">
    <div style="max-width: 400px;">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="media/smkn2.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title"><?php echo $value['tahun'] ?></h3>
                <p><?php echo $value['sekolah'] ?></p>
                <p><?php echo $value['lokasi'] ?></p>
            </div>
        </div>
    </div>
	</div>
	<?php endforeach ?>
	</div>

	<br><br>

	<!-- portofolio -->
	<a class="uk-button uk-button-default" href="#modal-full" uk-toggle>Open</a>
	<div id="modal-full" class="uk-modal-full" uk-modal>
	    <div class="uk-modal-dialog">
	        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
	        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
	            <div class="uk-background-cover" style="background-image: url('images/photo.jpg');" uk-height-viewport></div>
	            <div class="uk-padding-large">
	                <h1>Headline</h1>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- footer -->
	<div>
		<p style="text-align: center; font-size: 15px;"><?php include 'footer.php' ?></p>
	</div>
</body>
</html>
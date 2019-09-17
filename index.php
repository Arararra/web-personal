<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="css\uikit.css">
	<link rel="stylesheet" type="text/css" href="css\custom.css">
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
			'gambar' => '<img src="media/mim25.jpg" alt="">',
			],
			[
			'tahun' => '2015-2018',
			'sekolah' => 'SMP Muhammadiyah 15 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => "<img src='media/smpm15.png' alt=''>",
			],
			[
			'tahun' => '2018-Sekarang',
			'sekolah' => 'SMK Negeri 2 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => '<img src="media/smkn2.jpg" alt="">',
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
        	<p><div class="uk-label uk-label-success"><?php echo $value['keahlian'] ?></div></p>
			<p><?php echo $value['deskripsi'] ?></p>
        </div>
    </div>
    <?php endforeach ?>
	</div>

	<br><br><br>

	<!-- pendidikan -->
	<h1 align="center">Riwayat Pendidikan</h1>
	<div class="uk-flex uk-flex-center">
	<?php foreach ($pendidikan as $key => $value): ?>
	<div class="uk-child-width-1-2@ uk-margin-left">
    <div style="max-width: 400px;">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <?php echo $value['gambar'] ?>
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
	<h1 align="center">Portofolio</h1>
	<div class="uk-flex">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    	<div class="uk-card-badge uk-label">PHP & HTML & Bootstrap</div>
    	<h3 class="uk-card-title">Database Sederhana</h3>
    	<p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<a class="uk-button uk-button-default" href="#modal1" uk-toggle>Show Image</a>
	</div>
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    	<div class="uk-card-badge uk-label">CSS & HTML</div>
    	<h3 class="uk-card-title">Web Statis</h3>
    	<p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<a class="uk-button uk-button-default" href="#modal2" uk-toggle>Show Image</a>
	</div>
	</div>
	<div id="modal1" class="uk-modal-full" uk-modal>
	    <div class="uk-modal-dialog">
	        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
	        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
	            <div class="uk-background-cover" style="background-image: url('media/portofolio/Form Database.png');" uk-height-viewport></div>
	            <div class="uk-padding-large">
	                <h1>Main page</h1>
	                <p>Di halaman ini saya menggunakan HTML untuk pemrograman, CSS dan juga Bootstrap untuk membuat tampilan yang lebih baik.</p>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="modal2" class="uk-modal-full" uk-modal>
	    <div class="uk-modal-dialog">
	        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
	        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
	            <div class="uk-background-cover" style="background-image: url('media/portofolio/cafe.png');" uk-height-viewport></div>
	            <div class="uk-padding-large">
	                <h1>Main page</h1>
	                <p>Di halaman ini saya menggunakan HTML untuk pemrograman, CSS dan juga Bootstrap untuk membuat tampilan yang lebih baik.</p>
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
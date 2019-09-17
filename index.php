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
	<nav class="uk-navbar-container" uk-navbar style="position: sticky; top: 0;">
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
	<div class="uk-text-right@s uk-text-right@m uk-text-right@l" style="position: sticky; left: 100%; z-index: -999; width: 100%; max-width: 300px;">
		<h2 align="center">Keahlian</h2>
		<?php foreach ($keahlian as $key => $value): ?>
			<div>
				<p><?php echo $value['keahlian'] ?></p>
				<p><?php echo $value['deskripsi'] ?></p>
			</div>
			<hr>
		<?php endforeach ?>
	</div>

	<!-- pendidikan -->
	<div class="k-text-left@s uk-text-left@m uk-text-left@l" style="width: 100%; max-width: 300px;">
		<h2 align="center">Pendidikan</h2>
		<?php foreach ($pendidikan as $key => $value): ?>
			<div>
				<p><?php echo $value['tahun'] ?></p>
				<p><?php echo $value['sekolah'] ?></p>
				<p><?php echo $value['lokasi'] ?></p>
			</div>
			<hr>
		<?php endforeach ?>
	</div>

	<!-- footer -->
	<div>
		<p style="text-align: center; font-size: 15px;"><?php include 'footer.php' ?></p>
	</div>
</body>
</html>
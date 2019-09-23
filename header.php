<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Web</title>
	<link rel="stylesheet" href="css/uikit.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/customv2.css">
	<link rel="stylesheet" href="dist/css/lightbox.css">
</head>
<body>
	<!-- php -->
	<?php
		$profil = [
			[
			'panggilan' => 'Rama',
			'nama' => 'M. Rama Maulana',
			'ttl' => '09 Oktober 2002, Surabaya',
			'alamat' => 'Jl. Tanah Merah Sayur 4 no. 32 Surabaya, Indonesia',
			'foto' => 'media/foto.jpg',
			'hobi' => 'main game, koding, mendengarkan musik',
			'hobby' => 'play a game, coding, music',
			],
		];
		$pendidikan = [
			[
			'tahun' => '2009-2015',
			'sekolah' => 'SD Muhammadiyah 25 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => 'media/mim25.jpg',
			],
			[
			'tahun' => '2015-2018',
			'sekolah' => 'SMP Muhammadiyah 15 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => 'media/smpm15.png',
			],
			[
			'tahun' => '2018-Now',
			'sekolah' => 'SMK Negeri 2 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => 'media/smkn2.jpg',
			],
		];
		$keahlian = [
			[
			'keahlian' => 'C++',
			'deskripsi' => 'Pemrograman dasar yang saya pelajari sejak duduk dibangku SMK.',
			'persen' => '60%',
			'skill' => 'C',
			],
			[
			'keahlian' => 'HTML',
			'deskripsi' => 'Dasar dari pemrograman web yang paling penting.',
			'persen' => '75%',
			'skill' => 'HTML',
			],
			[
			'keahlian' => 'CSS',
			'deskripsi' => 'Biasanya saya gunakan untuk membuat tampilan antar muka HTML digabung dengan Framework.',
			'persen' => '50%',
			'skill' => 'CSS',
			],
			[
			'keahlian' => 'JAVA',
			'deskripsi' => 'Jarang saya gunakan karena kebutuhan untuk JAVA kurang.',
			'persen' => '30%',
			'skill' => 'JAVA',
			],
			[
			'keahlian' => 'PHP',
			'deskripsi' => 'Biasanya saya gunakan untuk membuat website dinamis digabung dengan HTML.',
			'persen' => '45%',
			'skill' => 'PHP',
			],
			[
			'keahlian' => 'MySQL',
			'deskripsi' => 'Digunakan untuk membuat dan manajemen basis data SQL.',
			'persen' => '45%',
			'skill' => 'MySQL',
			],
		];
		$portofolio = [
			[
			'label' => 'PHP & HTML & CSS',
			'judul' => 'Registrasi Database',
			'deskripsi' => 'Membuat form registrasi yang terhubung dengan basis data SQL dan juga menampilkan tabel.',
			'galeri' => 'database',
			'image' => 'media/portofolio/form.png',
			'caption' => 'Ini adalah tampilan web registrasi.',
			],
			[
			'label' => 'HTML & CSS',
			'judul' => 'Web Statis Cafe',
			'deskripsi' => 'Membuat web start-up untuk Cafe.',
			'galeri' => 'cafe',
			'image' => 'media/portofolio/homecafe.png',
			'caption' => 'Ini adalah tampilan awal web cafe.',
			],
		];
		$sosmed = [
			[
			'sosmed' => '<a href="https://t.me/Ararra"><img src="media/ikon/telegram.svg" width="40px" alt="telegram"></a>',
			],
			[
			'sosmed' => '<a href="https://www.facebook.com/profile.php?id=100040939097287"><img src="media/ikon/facebook.svg" width="40px"></a>',
			],
			[
			'sosmed' => '<a href="https://wa.me/62895341112746"><img src="media/ikon/whatsapp.svg" width="40px"></a>',
			],
			[
			'sosmed' => '<a href="https://www.instagram.com/mramamaulana60/?hl=id"><img src="media/ikon/instagram.svg" width="40px"></a>',
			],
		];
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="css\uikit.css">
	<link rel="stylesheet" type="text/css" href="css\custom.css">
	<link href="dist/css/lightbox.css" rel="stylesheet" />
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
			'foto' => '<img class="uk-border-circle" width="200" height="200" src="media/foto.jpg">',
			'hobi' => 'main game, koding, mendengarkan musik',
			],
		];
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
			'deskripsi' => 'Pemrograman dasar yang saya pelajari sejak duduk dibangku SMK.',
			],
			[
			'keahlian' => 'HTML',
			'deskripsi' => 'Dasar dari pemrograman web yang paling penting.',
			],
			[
			'keahlian' => 'CSS',
			'deskripsi' => 'Biasanya saya gunakan untuk membuat tampilan antar muka HTML digabung dengan Framework.',
			],
			[
			'keahlian' => 'JAVA',
			'deskripsi' => 'Jarang saya gunakan karena kebutuhan untuk JAVA kurang.',
			],
			[
			'keahlian' => 'PHP',
			'deskripsi' => 'Biasanya saya gunakan untuk membuat website dinamis digabung dengan HTML.',
			],
			[
			'keahlian' => 'MySQL',
			'deskripsi' => 'Digunakan untuk membuat dan manajemen basis data SQL.',
			],
		];
	?>

	<!-- navbar -->
	<nav class="uk-navbar-container" uk-navbar style="position: sticky; top: 0; z-index: 2;">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Main Menu</a></li>
            <li><a href="#profil">Profil</a></li>
            <li><a href="#skill">Keahlian</a></li>
            <li><a href="#sekolah">Pendidikan</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
	</nav>

	<!-- main menu/head -->
	<div class="main">
		<img src="media/mainimage.jpg" class="main-image" uk-img>
		<p class="main-text"><?php include 'header.php'; ?></p>
	</div>

	<br><br id="profil"><br>

	<!-- profil -->
	<div class="uk-child-width-1-2@s uk-grid-match uk-flex uk-flex-center uk-margin" uk-grid>
		<div>
			<?php foreach ($profil as $key => $value): ?>
	        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
	        	<h1><b>Profilku</b></h1>
	            <h3 class="uk-card-title uk-text-center"><?php echo $value['foto'] ?></h3>
	            <p>Perkenalkan, namaku <?php echo $value['nama'] ?> biasa dipanggil <?php echo $value['panggilan'] ?></p>
				<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
			    <div>
			    	<h4>Kelahiran</h4>
			    	<p>Lahir pada tanggal <?php echo $value['ttl'] ?></p>
			    </div>
			    <div>
			    	<h4>Alamat</h4>
			    	<p><?php echo $value['alamat'] ?></p>
			    </div>
			    <div>
			    	<h4>Hobi</h4>
			    	<p><?php echo $value['hobi'] ?></p>
			    </div>
				</div>
	        </div>
	        <?php endforeach ?>
	    </div>
	</div>

	<br id="skill"><br><br>

	<!-- keahlian -->
	<h1 align="center">Keahlian</h1>
	<div class="uk-container uk-container-expands">
	<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center uk-flex uk-flex-center" uk-grid>
    <?php foreach ($keahlian as $key => $value): ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-card-hover">
        	<p><div class="uk-label uk-label-success"><?php echo $value['keahlian'] ?></div></p>
			<p><?php echo $value['deskripsi'] ?></p>
        </div>
    </div>
    <?php endforeach ?>
	</div>
	</div>

	<br id="sekolah"><br><br>

	<!-- pendidikan -->
	<h1 align="center">Riwayat Pendidikan</h1>
	<div class="uk-container uk-margin">
	<div class="uk-flex uk-flex-center" uk-grid>
	<?php foreach ($pendidikan as $key => $value): ?>
	<div class="uk-child-width-1-2@ uk-margin-left">
    <div style="max-width: 330px;">
        <div class="uk-card uk-card-default uk-card-hover">
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
	</div>

	<br id="portofolio"><br><br>

	<!-- portofolio -->
	<h1 align="center">Portofolio</h1>
	<div class="uk-container uk-margin uk-flex uk-flex-center">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-card-hover">
    	<div class="uk-card-badge uk-label">PHP & HTML & Bootstrap</div>
    	<h3 class="uk-card-title">Registrasi Database</h3>
    	<p>Membuat form registrasi yang terhubung dengan basis data SQL dan juga menampilkan tabel.</p>
		<a class="uk-button uk-button-default" href="media/portofolio/form.png" data-lightbox="database" data-title="Ini adalah tampilan web registrasi.">Tampilkan</a>
	</div>
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-card-hover">
    	<div class="uk-card-badge uk-label">CSS & HTML</div>
    	<h3 class="uk-card-title">Web Statis Cafe</h3>
    	<p>Membuat web start-up untuk Cafe.</p>
		<a class="uk-button uk-button-default" href="media/portofolio/homecafe.png" data-lightbox="cafe" data-title="Ini adalah tampilan awal web.">Tampilkan</a>
	</div>
	</div>
	</div>


	<br><br id="kontak"><br>

	<!-- kontak/hubungi -->
	<div class="uk-child-width-1-2@s uk-grid-match uk-flex uk-flex-center uk-margin uk-container">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-card-hover">
	    <form class="uk-form-horizontal uk-margin-large">
	    <h1 class="uk-text-center">Hubungi Aku</h1>
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Nama</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Masukkan Nama Kalian">
	        </div>
	    </div>
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Email</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Masukkan Email Kalian">
	        </div>
	    </div>
	    <div class="uk-margin">
	        <div class="uk-form-label">Jenis Kelamin</div>
	        <div class="uk-form-controls uk-form-controls-text">
	            <label><input class="uk-radio" type="radio" name="radio1"> Laki-laki</label><br>
	            <label><input class="uk-radio" type="radio" name="radio1"> Perempuan</label>
	        </div>
	    </div>
	    <div class="uk-margin">
	        <textarea class="uk-textarea" rows="5" placeholder="Berikan pesanmu"></textarea>
	    </div>
	    <div class="uk-margin">
	    	<input class="uk-button uk-button-default uk-width-1-1" type="submit" value="Kirim" uk-toggle="target: #modal-close-default">
	    </div>
		<div class="uk-text-center">
			<h4>Atau melalui</h4>
			<div class="uk-flex uk-flex-center">
				<div class="uk-margin-left">
					<img src="media/ikon/telegram.svg" width="40px">
					<p>0895341112746</p>
				</div>
				<div class="uk-margin-left">
					<img src="media/ikon/facebook.svg" width="40px">
					<p>Rama</p>
				</div>
				<div class="uk-margin-left">
					<img src="media/ikon/whatsapp.svg" width="40px">
					<p>0895341112746</p>
				</div>
				<div class="uk-margin-left">
					<img src="media/ikon/instagram.svg" width="40px">
					<p>Rama Maulana</p>
				</div>
			</div>
		</div>
		<div id="modal-close-default" uk-modal>
	    <div class="uk-modal-dialog uk-modal-body">
	        <button class="uk-modal-close-default" type="button" uk-close></button>
	        <h2 class="uk-modal-title">Terima Kasih</h2>
	        <p>Terima kasih [nama] sudah memberikan pesanmu, Aku akan balas pesanmu secepatnya melalui emailmu.</p>
	    </div>
		</div>
		</form>
	</div>
	</div>

	<br><br><br>

	<!-- This is the modal with the default close button -->
	

	<!-- footer -->
	<div>
		<p style="text-align: center; font-size: 15px;"><?php include 'footer.php' ?></p>
	</div>

	<!-- galeri -->
	<a href="media/portofolio/afterform.png" data-lightbox="database" data-title="Ini adalah tampilan yang muncul setelah registrasi."></a>
	<a href="media/portofolio/tabel.png" data-lightbox="database" data-title="Ini adalah tabel yang terhubung dengan basis data SQL"></a>
	<a href="media/portofolio/aboutcafe.png" data-lightbox="cafe" data-title="Ini adalah tampilan tentang cafe."></a>
	<a href="media/portofolio/menucafe.png" data-lightbox="cafe" data-title="Ini adalah contoh beberapa menu."></a>
	<a href="media/portofolio/contactcafe.png" data-lightbox="cafe" data-title="Ini adalah tampilan kontak cafe."></a>

	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.js"></script>
	<script src="dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>
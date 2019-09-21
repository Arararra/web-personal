<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>V2</title>
	<link rel="stylesheet" href="css/uikit.css">
	<link rel="stylesheet" href="dist/css/lightbox.css">
	<link rel="stylesheet" href="css/customv2.css">
</head>
<body background="media/pattern-bg.png" style="width: 100%; height: 100vh;">
	<!-- php -->
	<?php
		$profil = [
			[
			'panggilan' => 'Rama',
			'nama' => 'M. Rama Maulana',
			'ttl' => '09 October 2002',
			'alamat' => 'Jl. Tanah Merah Sayur 4 no. 32 Surabaya, Indonesia',
			'foto' => 'media/foto.jpg',
			'hobi' => 'play a game, coding, and music',
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
			'tahun' => '2018-Sekarang',
			'sekolah' => 'SMK Negeri 2 Surabaya',
			'lokasi' => 'Surabaya, Indonesia',
			'gambar' => 'media/smkn2.jpg',
			],
		];
		$keahlian = [
			[
			'keahlian' => 'C++',
			'persen' => '60%',
			'skill' => 'C',
			],
			[
			'keahlian' => 'HTML',
			'persen' => '75%',
			'skill' => 'HTML',
			],
			[
			'keahlian' => 'CSS',
			'persen' => '50%',
			'skill' => 'CSS',
			],
			[
			'keahlian' => 'JAVA',
			'persen' => '30%',
			'skill' => 'JAVA',
			],
			[
			'keahlian' => 'PHP',
			'persen' => '45%',
			'skill' => 'PHP',
			],
			[
			'keahlian' => 'MySQL',
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

	<div class="uk-container">
	<div class="uk-card uk-card-default uk-margin-top uk-margin-bottom">
	<div class="uk-grid-collapse uk-child-width-expand@s uk-margin-large-top" uk-grid>
	<!-- isi -->
	<!-- kiri -->
	<div>
		<div class="uk-card uk-card-default profil">
	        <div class="uk-card-media-top">
	            <img src="media/foto.jpg">
	        </div>
	        <?php foreach ($profil as $key => $value): ?>
	        <div class="uk-card-body">
	            <h3 class="uk-card-title uk-text-center"><?php echo $value['nama'] ?></h3>
	            <p>Hello, my name is <?php echo $value['nama'] ?>, usually I called <?php echo $value['panggilan'] ?>. I was born in <?php echo $value['ttl'] ?>. I lived at <?php echo $value['alamat'] ?>. My hobby is <?php echo $value['hobi'] ?>.</p>
	            <p>At first, I hate coding because I'm bad at memorizing something but as time goes by, I realize that coding is not that hard. Everyone can learn how to code.</p>
	        </div>
	    	<?php endforeach ?>
	    </div>        
	</div>
	<!-- end kiri -->

	<!-- kanan -->
    <div class="uk-padding kanan" >	
    	<!-- skill -->
    	<h1>My Skills</h1>
    	<?php foreach ($keahlian as $key => $value): ?>
	    	<p><?php echo $value['keahlian'] ?></p>
			<div class="container">
			 	<div class="skills <?php echo $value['skill'] ?>" style="width: <?php echo $value['persen'] ?>"><?php echo $value['persen'] ?></div>
			</div>
		<?php endforeach ?>
		<hr>
		
		<!-- edukasi -->
		<h1>Education History</h1>
		<?php foreach ($pendidikan as $key => $value): ?>
		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
		    <div class="uk-card-media-left uk-cover-container">
		        <img src="<?php echo $value['gambar'] ?>" alt="" uk-cover>
		        <canvas width="600" height="400"></canvas>
		    </div>
		    <div>
		        <div class="uk-card-body">
		            <h3 class="uk-card-title"><?php echo $value['tahun'] ?></h3>
		            <p><?php echo $value['sekolah'] ?></p>
		            <p><?php echo $value['lokasi'] ?></p>
		        </div>
		    </div>
		</div>
		<?php endforeach ?>
		<hr>

		<!-- portfolio -->
		<h1>Portfolio</h1>
		<hr>

		<!-- kontak -->
		<h1>Contact Me</h1>
		<form class="uk-form-horizontal uk-margin-large" action="thanks.php" method="post">
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Nama</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Nama" name="nama" data-validation="length" data-validation-length="min2">
	        </div>
	    </div>
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Email</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-horizontal-text" type="email" placeholder="Email@mail.com" name="email" data-validation="email" data-validation-length="min4">
	        </div>
	    </div>
	    <div class="uk-margin">
	        <div class="uk-form-label">Jenis Kelamin (opsional)</div>
	        <div class="uk-form-controls uk-form-controls-text">
	            <label><input class="uk-radio" type="radio" name="radio1" value="You're such a great Guy"> Laki-laki</label><br>
	            <label><input class="uk-radio" type="radio" name="radio1" value="You're such a nice Girl"> Perempuan</label>
	            
	        </div>
	    </div>
	    <div class="uk-margin">
	        <textarea class="uk-textarea" rows="5" placeholder="Berikan pesanmu"></textarea>
	    </div>
	    <div class="uk-margin">
	    	<button class="uk-button uk-button-default uk-width-1-1" type="submit">Kirim</button>
	    </div>
		<div class="uk-text-center">
			<h4>Atau melalui</h4>
			<div class="uk-flex uk-flex-center">
				<?php foreach ($sosmed as $key => $value): ?>
					<div class="uk-margin-right uk-margin-left">
						<?php echo $value['sosmed'] ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		</form>
    </div>
    <!-- end kanan -->
	<!-- end isi -->
	</div>
	</div>
	</div>

	<!-- footer -->
	<div>
		<p style="text-align: center; font-size: 15px;"><?php include 'footer.php' ?></p>
	</div>

	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.js"></script>
	<script src="dist/js/lightbox-plus-jquery.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script>
	  $.validate({
	    lang: 'en'
	  });
	</script>
</body>
</html>
<?php include 'header.php'; ?>

	<!-- navbar -->
	<nav class="uk-navbar-container" uk-navbar style="position: sticky; top: 0; z-index: 2;">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#profil">Profil</a></li>
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
		<p class="main-text">Welcome to My Web</p>
	</div>

	<br><br id="profil"><br>

	<!-- profil -->
	<div class="uk-child-width-1-2@s uk-grid-match uk-flex uk-flex-center uk-margin uk-container">
		<div>
			<?php foreach ($profil as $key => $value): ?>
	        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
	        	<h1><b>Profilku</b></h1>
	            <h3 class="uk-card-title uk-text-center"><img class="uk-border-circle" width="200" height="200" src="<?php echo $value['foto'] ?>"></h3>
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
	<div class="uk-grid-column-small uk-grid-row-small uk-child-width-1-3@s uk-text-center uk-flex uk-flex-center" uk-grid>
    <?php foreach ($keahlian as $key => $value): ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-card-hover" style="height: 200px">
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
	<div class="uk-grid-column-small uk-grid-row-large uk-child-width-expand@s uk-text-center uk-flex uk-flex-center">
	<div class="uk-flex uk-flex-center" uk-grid>
	<?php foreach ($pendidikan as $key => $value): ?>
	<div class="uk-child-width-1-2@">
    <div style="max-width: 370px;">
        <div class="uk-card uk-card-default uk-card-body uk-card-hover" style="height: 550px">
            <div class="uk-card-media-top">
                <img src="<?php echo $value['gambar'] ?>" alt="">
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
	<div class="uk-grid-column-small uk-grid-row-large uk-child-width-expand@s uk-flex uk-flex-center">
	<div class="uk-flex uk-flex-center uk-grid-large uk-grid" uk-grid>
	<?php foreach ($portofolio as $key => $value): ?>
	<div class="uk-child-width-expand@s">
	<div class="uk-card uk-card-default uk-card-body uk-card-hover portofolio">
	    <div class="uk-card-badge uk-label"><?php echo $value['label'] ?></div>
	    <h3 class="uk-card-title"><?php echo $value['judul'] ?></h3>
	    <p><?php echo $value['deskripsi'] ?></p>
	    <a class="uk-button uk-button-default" href="<?php echo $value['image'] ?>" data-lightbox="<?php echo $value['galeri'] ?>" data-title="<?php echo $value['caption'] ?>">Tampilkan</a>
	</div>
	</div>
	<?php endforeach ?>
	</div>
	</div>

	<br><br id="kontak"><br>

	<!-- kontak/hubungi -->
	<div class="uk-child-width-1-2@s uk-grid-match uk-flex uk-flex-center uk-margin uk-container">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-card-hover">
	    <form class="uk-form-horizontal uk-margin-large" action="thanks.php" method="post">
	    <h1 class="uk-text-center">Hubungi Aku</h1>
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
	</div>

	<br><br><br>

<?php include 'footer.php' ?>
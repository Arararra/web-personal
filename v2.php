<?php include 'header.php'; ?>

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
	            <p>Hello, my name is <?php echo $value['nama'] ?>, usually I called <?php echo $value['panggilan'] ?>. I was born in <?php echo $value['ttl'] ?>. I lived at <?php echo $value['alamat'] ?>. My hobby is <?php echo $value['hobby'] ?>.</p>
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
		<?php foreach ($portofolio as $key => $value): ?>
		<a href="portofolio.php?id=<?php echo $value['id'] ?>"><img src="<?php echo $value['image'] ?>" width="300"></a>
		<?php endforeach ?>
		<hr>

		<!-- kontak -->
		<h1>Contact Me</h1>
		<form class="uk-form-horizontal uk-margin-large" action="thanks.php" method="post">
	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-horizontal-text">Name</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Your Name" name="nama" data-validation="length" data-validation-length="min2">
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
	            <label><input class="uk-radio" type="radio" name="radio1" value="You're such a great Guy"> Male</label><br>
	            <label><input class="uk-radio" type="radio" name="radio1" value="You're such a nice Girl"> Female</label>
	            
	        </div>
	    </div>
	    <div class="uk-margin">
	        <textarea class="uk-textarea" rows="5" placeholder="Your Message"></textarea>
	    </div>
	    <div class="uk-margin">
	    	<button class="uk-button uk-button-default uk-width-1-1" type="submit">Send</button>
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

<?php include 'footer.php'; ?>
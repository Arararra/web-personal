<?php include 'header.php'; ?>

	<?php
	if(isset($_POST['nama']) AND isset ($_POST['email'])):
	?>

	<div class="uk-container uk-margin-top" style="left: 50%; padding-top: 250px; transform: translate(-50% -50%);">
		<div class="uk-card uk-body uk-card-default">
			<div class="uk-child-width-1-2@m" uk-grid>
	            <div class="uk-card-body uk-card-default uk-position-center">
	            	<a class="uk-close-large uk-modal-close-default" type="button" uk-close onClick="javascript:history.go(-1)"></a>
	            	<div class="uk-text-center">
	            		<h3 class="uk-card-title">Terima Kasih</h3>
	                	<p>Terima kasih <b><?php echo $_POST['nama'];?></b>, Aku akan membalas pesanmu melalui <b><?php echo $_POST['email'];?></b>.<br></p>
	            	</div>
	            </div>
	        </div>
		</div>
	</div>
	
	<?php
	else:
	?>

	<div class="uk-container uk-margin-top" style="left: 50%; padding-top: 250px; transform: translate(-50% -50%);">
		<div class="uk-card uk-body uk-card-default">
			<div class="uk-child-width-1-2@m" uk-grid>
	            <div class="uk-card-body uk-card-default uk-position-center">
	            	<div class="uk-text-center">
	            		<h3 class="uk-card-title"><?php include 'header.php'; ?></h3>
	                	<p>Akses ditolak. Anda akan diarahkan ke index.php</p>
	            	</div>
	            </div>
	        </div>
		</div>
	</div>

	<?php 
	header( "refresh:3;url=index.php" );
	die();	
	endif
	?>

<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thank You</title>
	<link rel="stylesheet" href="css\uikit.css">
	<link rel="stylesheet" href="css\custom.css">
	<link rel="stylesheet" href="dist/css/lightbox.css">
</head>
<body style="padding: 20% 5%;">

	<?php
	if(isset($_POST['nama']) AND isset ($_POST['email'])){
	?>

	<div class="uk-container uk-margin-top">
	<div class="uk-card uk-body uk-card-default">
		<div class="uk-child-width-1-2@m" uk-grid>
            <div class="uk-card-body uk-card-default uk-position-center">
            	<a class="uk-close-large uk-modal-close-default" type="button" uk-close href="index.php"></a>
            	<div class="uk-text-center">
            		<h3 class="uk-card-title">Terima Kasih</h3>
                	<p>Terima kasih <b><?php echo $_POST['nama'];?></b>, Aku akan membalas pesanmu melalui <b><?php echo $_POST['email'];?></b>.<br></p>
            	</div>
            </div>
        </div>
	</div>
	</div>
	
	<?php
	}
	else{
	?>

	<div class="uk-container uk-margin-top">
	<div class="uk-card uk-body uk-card-default">
		<div class="uk-child-width-1-2@m" uk-grid>
            <div class="uk-card-body uk-card-default uk-position-center">
            	<div class="uk-text-center">
            		<h3 class="uk-card-title"><?php include 'header.php'; ?></h3>
                	<p>Akses ditolak.</p>
            	</div>
            </div>
        </div>
	</div>
	</div>

	<?php 
	header( "refresh:5;url=index.php" );
	die();	
	}
	?>

	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.js"></script>
</body>
</html>
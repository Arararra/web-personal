<?php include 'header.php'; ?>

	<style type="text/css">
		@media only screen and (min-width: 600px){
			.width{
				width: 200px;
			}
		}
	</style>

	<?php 
	$id = $_GET['id'];
	if ($id == 0 OR $id == 1):
	?>

	<div class="uk-container uk-margin-top uk-margin-bottom">
		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
			<div class="uk-card-media-left uk-cover-container">
				<a href="<?php echo $portofolio[$id]['thumb'] ?>" data-lightbox="galeri" data-title="<?php echo $portofolio[$id]['caption'] ?>">
					<img src="<?php echo $portofolio[$id]['thumb'] ?>" uk-cover>
				</a>
				<canvas width="600" height="400"></canvas>
			</div>
			<div class="uk-card-body">
					<h3 class="uk-card-title"><?php echo $portofolio[$id]['judul'] ?></h3>
					<?php foreach ($portofolio[$id]['label'] as $key => $value): ?>
						<div class="uk-label"><?php echo $value ?></div>
					<?php endforeach ?>
				<p><?php echo $portofolio[$id]['deskripsi'] ?></p>
				<P>Completed: <?php echo $portofolio[$id]['selesai'] ?></P>
				<a class="uk-button uk-button-default" href="v2.php">back to v2</a><br><br>
					<?php  foreach ($portofolio[$id]['image'] as $key => $value): ?>
						<a href="<?php echo $value ?>" data-lightbox="galeri" data-title=""><img class="width" src="<?php echo $value ?>"></a>
					<?php endforeach ?>
			</div>
		</div>
	</div>

	<?php else: ?>

	<div class="uk-card-body">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-text-center uk-container">
			<h3 class="uk-card-title">ID tidak tersedia</h3>
			<p>Anda akan diarahkan ke index.php.</p>
		</div>
	</div>

<?php
	header( "refresh:3; url=index.php" );
	die();
	endif; 
	include 'footer.php'; 
?>
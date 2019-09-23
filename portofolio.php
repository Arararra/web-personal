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

	if ($id == 0) {
	?>

	<div class="uk-container uk-margin-top uk-margin-bottom">
	<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <a  data-lightbox="database1" data-title="This is the main page of Registration Form." href="media/portofolio/form.png"><img src="media/portofolio/form.png" uk-cover></a>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Database Registration</h3>
            <div class="uk-label">PHP</div>
            <div class="uk-label">HTML</div>
            <div class="uk-label">CSS</div>
            <div class="uk-label">MySQL</div>
            <p>Database registration using PHP and HTML that connected to MySQL server.</p>
            <P>Completed: 17 July 2019</P>
            <a class="uk-button uk-button-default" href="v2.php">back to v2</a><br><br>
            <a href="media/portofolio/afterform.png" data-lightbox="database1" data-title="This is a page that show when you successfully register a data."><img class="width" src="media/portofolio/afterform.png"></a>
			<a href="media/portofolio/tabel.png" data-lightbox="database1" data-title="This is a table that connected to MySQL server."><img class="width" src="media/portofolio/tabel.png"></a>
        </div>
    </div>
	</div>
	</div>

	<?php
	}elseif ($id == 1) {
	?>

	<div class="uk-container uk-margin-top uk-margin-bottom">
	<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <a  data-lightbox="cafe1" data-title="This is the home page of website." href="media/portofolio/homecafe.png"><img src="media/portofolio/homecafe.png" uk-cover></a>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Static Web For Cafe</h3>
            <div class="uk-label">HTML</div>
            <div class="uk-label">CSS</div>
            <p>A static web that used to promote cafe.</p>
            <P>Completed: 10 September 2019</P>
            <a class="uk-button uk-button-default" href="v2.php">back to v2</a><br><br>
			<a href="media/portofolio/aboutcafe.png" data-lightbox="cafe1" data-title="This is the page that show cafe information."><img class="width" src="media/portofolio/aboutcafe.png"></a>
			<a href="media/portofolio/menucafe.png" data-lightbox="cafe1" data-title="This is the page that show cafe menu."><img class="width" src="media/portofolio/menucafe.png"></a>
			<a href="media/portofolio/contactcafe.png" data-lightbox="cafe1" data-title="This is the page that show cafe contact."><img class="width" src="media/portofolio/contactcafe.png"></a>
        </div>
    </div>
	</div>
	</div>

	<?php
	}else{
		echo "<br><br>ID Tidak tersedia<br><br>";
	} 
	?>

<?php include 'footer.php'; ?>
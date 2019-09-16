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
	<p style="font-size: 500px;">A</p>

	<!-- footer -->
	<div>
		<p style="text-align: center; font-size: 15px;"><?php include 'footer.php' ?></p>
	</div>
</body>
</html>
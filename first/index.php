<?php 
	include_once('conf.php');

	$page = ( isset($_REQUEST['page']) ) ? $_REQUEST['page'] : "home";
?>

<!-- LAYOUT -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Cabinet Nadia Lebreton - Hygiéniste Naturopathe</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache" />

	<link href="<?php echo CSS; ?>" media="screen" rel="stylesheet" type="text/css" />
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jQueryRotate.js"></script>
	<script type="text/javascript" src="<?php echo JS; ?>"></script>

	<link rel="SHORTCUT ICON" type="image/x-icon" href="/images/favicon.ico" />
</head>
<body>
	<div id="container">
		<?php include_once('views/header.php'); ?>
		<div id="main">
			<?php include_once('views/'.$page.'.php'); ?>
		</div>
	</div>
	<?php include_once('views/footer.php'); ?>
</body>
</html>
<!-- END LAYOUT -->
<?php
	include_once('microtemplate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			php-microtemplate simple example
		</title>
		<!-- Adding the template "templates/css.php" -->
		<?=t('css')?>
	</head>
	<body>
		<div id="wrapper">
			<!-- Adding the template "templates/content.php" -->
			<?=t('content')?>
			
			<!-- Adding the template "templates/footer.php" -->
			<?=t('footer')?>
		</div>
	</body>
</html>


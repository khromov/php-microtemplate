<?php
	include_once('microtemplate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			php-microtemplate variables example
		</title>
		<!-- Adding the template "templates/css.php" -->
		<?=t('css')?>
	</head>
	<body>
		<div id="wrapper">
			<!-- Adding the template "templates/content.php" -->
			<?=t('content_variable', array('heading' => 'php-microtemplate variables example', 'text' => 'A paragraph of example content, sent as a variable!'))?>
			
			<!-- Adding the template "templates/footer.php" -->
			<?=t('footer', array('source' => 'https://bitbucket.org/khromov/php-microtemplate/src/master/example_variables.php'))?>
		</div>
	</body>
</html>


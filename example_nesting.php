<?php
	include_once('microtemplate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			php-microtemplate nested templates and loops example
		</title>
		<!-- Adding the template "templates/css.php" -->
		<?=t('css')?>
	</head>
	<body>
		<div id="wrapper">
			<!-- Adding the template "templates/content.php" -->
			<?=t('content_variable', array('heading' => 'php-microtemplate nested templates and loops example', 'text' => 'Check out this list below using nested templates!'))?>
			
			<!-- Adding the template "templates/list.php"
			
			Structure of array sent to "templates/list.php": 
			Array
			(
			    [items] => Array
			        (
			            [0] => first item
			            [1] => second item
			            [2] => third item
			        )
			)
			-->
			<?=t('list', array('items' => array('first item','second item','third item')))?>
			
			<!-- Adding the template "templates/footer.php" -->
			<?=t('footer', array('source' => 'https://bitbucket.org/khromov/php-microtemplate/src/master/example_nesting.php'))?>
		</div>
	</body>
</html>


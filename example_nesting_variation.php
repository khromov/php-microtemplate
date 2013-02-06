<?php
	include_once('microtemplate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			php-microtemplate nested templates and loops variation example
		</title>
		<!-- Adding the template "templates/css.php" -->
		<?=t('css')?>
	</head>
	<body>
		<div id="wrapper">
			<!-- Adding the template "templates/content.php" -->
			<?=t('content_variable', array('heading' => 'php-microtemplate nested templates and loops variation example', 'text' => 'Check out this "advanced" list below using nested templates!'))?>
			
			<!-- Adding the template "templates/list.php"
			
			Structure of array sent to "templates/list.php":
			Array
			(
			    [items] => Array
			        (
			            [0] => Array
			                (
			                    [heading] => First list item
			                    [text] => First item text
			                )
			
			            [1] => Array
			                (
			                    [heading] => Second list item
			                    [text] => Second item text
			                )
			
			            [2] => Array
			                (
			                    [heading] => Third list item
			                    [text] => Third item text
			                )
			        )
			)			
			-->
			<?=t('list-adv', array('items' => array( array('heading' => 'First list item', 'text' => 'First item text'), array('heading' => 'Second list item', 'text' => 'Second item text'), array('heading' => 'Third list item', 'text' => 'Third item text'))))?>
			
			<!-- Adding the template "templates/footer.php" -->
			<?=t('footer', array('source' => 'https://bitbucket.org/khromov/php-microtemplate/src/master/example_nesting_variation.php'))?>
		</div>
	</body>
</html>


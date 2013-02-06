<div id="list">
	<ul>
		<?php
			/* For each item, send the list item name to the "templates/list-item.php" template */
			foreach($v['items'] as $item)
				echo t('list-item', $item); /* Output the template content */
		?>
	</ul>
</div>
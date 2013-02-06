<div id="list">
	<ul>
		<?php
			/* For each item, send the content of the list item to the "templates/list-item-adv.php" template */
			foreach($v['items'] as $item)
				echo t('list-item-adv', $item); /* Output the template content */
		?>
	</ul>
</div>
<?php

/**
 * @file
 * Templating for the menu items EC corporate displayed as links.
 */
?>

<?php print render($heading_markup); ?>
<?php foreach($links as $link): ?>
  <?php print l($link['title'], $link['href'], $link); ?>
<?php endforeach; ?>
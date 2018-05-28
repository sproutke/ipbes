<?php

/**
 * @file
 * Template for dkan front page.
 */
?>
<div class="panel-display panel-dkan-front clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if($content['banner']): ?>
   <div class="panel-banner panel-row">
     <div class="container-fluid">
       Testing our banner
       <div class="inside"><?php print $content['banner']; ?></div>
     </div>
   </div>
 <?php endif; ?>

  <?php if($content['footer']): ?>
    <footer class="footer">
      Footer goes here
      <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>

</div>

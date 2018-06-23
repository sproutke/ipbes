<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php // if ($title): ?>
  <fieldset class="collapsible collapsed">
    <legend><span class="fieldset-legend">Family of policy support tools:</span></legend>
  <?php // endif; ?>
  <?php print render($title_suffix); ?>
 <?php if ($content): ?>
<div class="fieldset-wrapper">
<?php print $content; ?>
</div>
<?php endif; ?>
</fieldset>
</div>




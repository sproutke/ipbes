<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
  #### defs
  // call a global variable every time the template is called
  global $static;
  // be aware of the key_name for the global variable to keep it
  // unique for every display
  // I call the same view in one panel several times with
  // different arguments
  $key_name = $view->name . '_' . $view->current_display ;
  foreach ($view->args as $value) {
    $key_name .= '_' . $value;
  }
  // init classes array
  $group_classes = array();
  ## groups counter - store in global variable
  if (!isset($static[$key_name]['gc'])) {
    $static[$key_name]['gc'] = 1;
  }
  else {
    $static[$key_name]['gc']++;
  }
  #### classes
  ## counter
  $group_classes[] = 'group-' . $static[$key_name]['gc'];
  ## first
  if ($static[$key_name]['gc'] == 1) {
    $group_classes[] = 'first';
  }
  ## last
  // get max row "id" per group
  foreach ($rows as $id => $row) {
    $max_id = $id;
  }
  // count results (-1 because $id starts with 0)
  $count_results = count($view->result) - 1;
  //
  if ($max_id == $count_results) {
    $group_classes[] = 'last';
  }
  ## ret
  $group_class = implode(' ', $group_classes);
?>


<div class="documents-group <?php print $group_class; ?>">
<?php if (!empty($title)): ?>
  <div class="view-grouping-level-1"><?php print $title; ?></div>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>

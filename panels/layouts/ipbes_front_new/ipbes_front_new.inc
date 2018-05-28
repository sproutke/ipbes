<?php

/**
 * @file
 * Plugin definition.
 */

$plugin = array(
  'title' => t('IPBES Front New'),
  'category' => t('Custom'),
  'icon' => 'ipbes_front_new.png',
  'theme' => 'panels_ipbes_front_new',
  'css' => 'ipbes_front_new.css',
  'regions' => array(
    'banner' => t('Banner'),
    'footer' => t('Footer Copyright')
  ),
);

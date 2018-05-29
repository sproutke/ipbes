<?php

/**
 * @file
 * Plugin definition.
 */

$plugin = array(
  'title' => t('IPBES Front New'),
  'category' => t('Custom'),
  'icon' => 'ipbes_front_new.png',
  'theme' => 'panels-ipbes_front_new',
  'css' => 'ipbes_front_new.css',
  'regions' => array(
    'menu' => t('Menu'),
    'banner' => t('Banner'),
    'footer' => t('Footer Copyright')
  ),
);

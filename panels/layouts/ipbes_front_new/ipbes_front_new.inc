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
    'banner' => t('Banner'),
    'focus-areas' => t('Focus Areas'),
    'news' => t('News'),
    'footer' => t('Footer Copyright')
  ),
);

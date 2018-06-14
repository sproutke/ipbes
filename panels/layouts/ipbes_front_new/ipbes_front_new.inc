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
    'slider' => t('Slider'),
    'banner' => t('Banner'),
    'focus-areas' => t('Focus Areas'),
    'news' => t('News'),
    'notifications' => t('Notifications'),
    'events' => t('Events'),
    'footer-menu' => t('Footer Menu'),
    'footer-communities' => t('Footer Communities'),
    'footer-contacts' => t('Footer Contacts')
  ),
);

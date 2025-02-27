<?php

/**
 * Implements hook_panels_layouts()
 */
function nysenate_f2cb_homepage2_panels_layouts() {
  $items['f2cb_homepage2'] = array(
    'title' => t('Homepage Layout 2'),
    'category' => t('NY Senate: 2'),
    'icon' => 'f2cb_homepage.png',
    'theme' => 'f2cb_homepage2',
    'regions' => array(
        'header' => t('Header'),
        'hero' => t('hero'),
        'content' => t('Main Content'),
        'footer_first' => t('Footer First'),
        'footer_middle' => t('Footer Middle'),
        'footer_last' => t('Footer Last'),
    ),
  );
  return $items;
}


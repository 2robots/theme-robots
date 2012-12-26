<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Implements hook_process_region().
 * We use no template specific prefix, for easy renaming.
 */
function alpha_process_region(&$vars) {

  $zone = $vars['elements']['#data']['zone'];
  $last_region = '';
  $theme = alpha_get_theme();

  foreach($theme->regions as $name => $data) {
    if($zone == $data['zone']) {
      $last_region = $name;
    }
  }

  if($last_region == $vars['region']) {
    $vars['attributes'] = str_replace(' region ', ' region omega ', $vars['attributes']);
  }
}

/**
 * Implements hook_process_region().
 */
/*function theme_robots_alpha_process_region(&$vars) {

  // display logo, ... at the right region.
  if (in_array($vars['elements']['#region'],
    array('content'))
  ) {
    $theme = alpha_get_theme();

    switch ($vars['elements']['#region']) {
      case 'content':
        break;
    }
  }
}*/

/**
 * Implements hook_process_zone().
 */
/*function theme_robots_alpha_process_zone(&$vars) {

  if (in_array($vars['elements']['#zone'],
    array('content')
  )) {
    $theme = alpha_get_theme();

    switch ($vars['elements']['#zone']) {
      case 'content':
        break;
    }
  }
}*/

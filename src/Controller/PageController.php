<?php

namespace Drupal\page_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * This is our page module controller.
 */
class PageController {

  public function heroList() {

    $heroes = [
      ['name' => 'Hulk'],
      ['name' => 'Thor'],
      ['name' => 'Iron Man'],
      ['name' => 'Luke Cage'],
      ['name' => 'Black Widow'],
      ['name' => 'Daredevil'],
      ['name' => 'Captain America'],
      ['name' => 'Wolverine']
    ];

    $ourHeroes = '';
    foreach ($heroes as $hero) {
      $ourHeroes .= '<li>' . $hero['name'] . '</li>';
    }

    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $ourHeroes . '</ol>',
    ];

  }
}

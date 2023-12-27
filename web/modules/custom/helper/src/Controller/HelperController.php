<?php

namespace Drupal\helper\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for display Data.
 */
class HelperController extends ControllerBase {

  /**
   * Display form as table.
   */
  public function formTable() {
    $header = [
      'Year', 'Jan', 'Feb', 'Mar', 'Q1',
      'Apr', 'May', 'Jun', 'Q2',
      'Jul', 'Aug', 'Sep', 'Q3',
      'Oct', 'Nov', 'Dec', 'Q4', 'YTD',
    ];
    return [
      '#theme' => 'table-page',
      '#header' => $header,
    ];
  }

}

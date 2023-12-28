<?php

namespace Drupal\helper\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\helper\Form\FormTableRow;

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
    $form = \Drupal::formBuilder()->getForm(FormTableRow::class);
    return [
      '#theme' => 'table-page',
      '#header' => $header,
      '#form' => $form,
    ];
  }

}

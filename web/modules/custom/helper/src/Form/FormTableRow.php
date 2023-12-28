<?php

namespace Drupal\helper\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form Row Table.
 */
class FormTableRow extends FormBase {

  /**
   * Return form ID.
   */
  public function getFormId() {
    return 'form-row-table';
  }

  /**
   * Build form row function.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Get year.
    $year = date('Y');

    // Add a field for the year.
    $form['year'] = [
      '#type' => 'number',
      '#default_value' => $year,
      '#attributes' => [
        'readonly' => 'readonly',
      ],
    ];

    // Month list.
    $months = [
      'january', 'february', 'march',
      'april', 'may', 'june',
      'july', 'august', 'september',
      'october', 'november', 'december',
    ];

    // Add a field for the month.
    foreach ($months as $month) {
      $form[$month] = [
        '#type' => 'number',
        '#default_value' => 0,
      ];
    }

    // Quarter list and year total data.
    $readonly = ['quarter1', 'quarter2', 'quarter3', 'quarter4', 'ytd'];

    // Add a field for the quarters and ytd.
    foreach ($readonly as $element) {
      $form[$element] = [
        '#type' => 'number',
        '#default_value' => 0,
        '#attributes' => [
          'readonly' => 'readonly',
        ],
      ];
    }

    // Button for add new row in table(-1 year).
    $form['add_year'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add year'),
    ];
    return $form;
  }

  /**
   * Action after submitting.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}

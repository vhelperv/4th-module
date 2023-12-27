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
    // @todo Implement buildForm() method.
  }

  /**
   * Action after submitting.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // @todo Implement submitForm() method.
  }

}

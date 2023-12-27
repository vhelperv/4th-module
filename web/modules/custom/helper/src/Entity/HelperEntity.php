<?php

namespace Drupal\helper\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Defines the helper entity.
 *
 * @ConfigEntityType(
 *   id = "helper",
 *   label = @Translation("Table Data"),
 *   base_table = "helper_data",
 *   entity_keys = {
 *      "id" = "id",
 *      "uuid" = "uuid",
 *      "tid" = "tid",
 *      "year" = "year",
 *      "january" = "january",
 *      "february" = "february",
 *      "march" = "march",
 *      "quarter1" = "quarter1",
 *      "april" = "april",
 *      "may" = "may",
 *      "june" = "june",
 *      "quarter2" = "quarter2",
 *      "july" = "july",
 *      "august" = "august",
 *      "september" = "september",
 *      "quarter3" = "quarter3",
 *      "october" = "october",
 *      "november" = "november",
 *      "december" = "december",
 *      "quarter4" = "quarter4",
 *      "ytd" = "ytd",
 *      "created" = "created",
 *   },
 * )
 */
class HelperEntity extends ContentEntityBase implements ContentEntityInterface {

  /**
   * Definition field entity helper.
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $field['id'] = BaseFieldDefinition::create('id')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the helper entity.'))
      ->setReadOnly(TRUE);
    $field['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the helper entity.'))
      ->setReadOnly(TRUE);
    $field['tid'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Table ID'))
      ->setDescription(t('The table ID'));
    $field['year'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Year'))
      ->setDescription(t('Field year value in row table'))
      ->setRequired(TRUE);
    $field['january'] = BaseFieldDefinition::create('float')
      ->setLabel(t('January'))
      ->setDescription(t('Field january value in row table'));
    $field['february'] = BaseFieldDefinition::create('float')
      ->setLabel(t('February'))
      ->setDescription(t('Field february value in row table'));
    $field['march'] = BaseFieldDefinition::create('float')
      ->setLabel(t('March'))
      ->setDescription(t('Field march value in row table'));
    $field['quarter1'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Quarter 1'))
      ->setDescription(t('Field quarter #1 value in row table'));
    $field['april'] = BaseFieldDefinition::create('float')
      ->setLabel(t('April'))
      ->setDescription(t('Field april value in row table'));
    $field['may'] = BaseFieldDefinition::create('float')
      ->setLabel(t('May'))
      ->setDescription(t('Field may value in row table'));
    $field['june'] = BaseFieldDefinition::create('float')
      ->setLabel(t('June'))
      ->setDescription(t('Field june value in row table'));
    $field['quarter2'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Quarter 2'))
      ->setDescription(t('Field quarter #2 value in row table'));
    $field['july'] = BaseFieldDefinition::create('float')
      ->setLabel(t('July'))
      ->setDescription(t('Field july value in row table'));
    $field['august'] = BaseFieldDefinition::create('float')
      ->setLabel(t('August'))
      ->setDescription(t('Field august value in row table'));
    $field['september'] = BaseFieldDefinition::create('float')
      ->setLabel(t('September'))
      ->setDescription(t('Field september value in row table'));
    $field['quarter3'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Quarter 3'))
      ->setDescription(t('Field quarter #3 value in row table'));
    $field['october'] = BaseFieldDefinition::create('float')
      ->setLabel(t('October'))
      ->setDescription(t('Field october value in row table'));
    $field['november'] = BaseFieldDefinition::create('float')
      ->setLabel(t('November'))
      ->setDescription(t('Field november value in row table'));
    $field['december'] = BaseFieldDefinition::create('float')
      ->setLabel(t('December'))
      ->setDescription(t('Field december value in row table'));
    $field['quarter4'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Quarter 4'))
      ->setDescription(t('Field quarter #4 value in row table'));
    $field['ytd'] = BaseFieldDefinition::create('float')
      ->setLabel(t('YTD'))
      ->setDescription(t('Field ytd value in row table'));
    $field['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('Field created time row in table'))
      ->setReadOnly(TRUE);
    return $field;
  }

}

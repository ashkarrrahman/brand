<?php

/**
 * @file
 * Contains Drupal\brand\Entity\brand.
 */

namespace Drupal\brand\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Brand entities.
 */
class brandViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['brand']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Brand'),
      'help' => $this->t('The Brand ID.'),
    );

    return $data;
  }

}

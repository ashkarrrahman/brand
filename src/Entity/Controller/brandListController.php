<?php

/**
 * @file
 * Contains Drupal\brand\Entity\Controller\brandListController.
 */

namespace Drupal\brand\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for the Brand entity.
 *
 * @ingroup brand
 */
class brandListController extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Brand ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\brand\Entity\brand */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.brand.edit_form', array(
          'brand' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}

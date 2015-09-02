<?php
/**
* @file
*
 * Contains Drupal\brand\brandConfigListBuilder
*/

namespace Drupal\brand;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;


class brandConfigListBuilder extends ConfigEntityListBuilder {

    /**
     * {@inheritdoc}
     */
    public function buildHeader() {
        $header['label'] = $this->t('Name');
        $header['url'] = $this->t('URL');
          return $header + parent::buildHeader();
    }

    /**
     * {@inheritdoc}
     */
    public function buildRow(EntityInterface $entity) {

        // Label
        $row['label'] = $this->getLabel($entity);

        // url
        $row['url'] = $entity->brandURL;


        return $row + parent::buildRow($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function render() {

        $build = parent::render();

        $build['#empty'] = $this->t('There are no brands available.');
        return $build;
    }

}

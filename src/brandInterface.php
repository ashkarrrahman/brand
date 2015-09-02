<?php

/**
 * @file
 * Contains Drupal\brand\brandInterface.
 */

namespace Drupal\brand;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Brand entities.
 *
 * @ingroup brand
 */
interface brandInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}

<?php

/**
 * @file
 * Contains Drupal\brand\brandAccessControlHandler.
 */

namespace Drupal\brand;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Brand entity.
 *
 * @see \Drupal\brand\Entity\brand.
 */
class brandAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view brand entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit brand entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete brand entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add brand entities');
  }

}

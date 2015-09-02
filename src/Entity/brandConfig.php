<?php
/**
 * @file
 * Contains \Drupal\brand\Entity\ConfigEntity.
 */

namespace Drupal\brand\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Drupal\brand\brandConfigInterface;

/**
 * Defines a Brand configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "brand_config",
 *   label = @Translation("Brand Config"),
 *   fieldable = FALSE,
 *   controllers = {
 *     "list_builder" = "Drupal\brand\brandConfigListBuilder",
 *     "form" = {
 *       "add" = "Drupal\brand\Form\brandConfigForm",
 *       "edit" = "Drupal\brand\Form\brandConfigForm",
 *       "delete" = "Drupal\brand\Form\brandConfigDeleteForm"
 *     }
 *   },
 *   config_prefix = "brand_config",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name"
 *   }
 * )
 */
class brandConfig extends ConfigEntityBase implements brandConfigInterface {

    /**
     * The ID of the brand.
     *
     * @var string
     */
    public $id;

    /**
     * The brand URL.
     *
     * @var string
     */
    public $brandURL;


}

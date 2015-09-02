<?php
/**
 * @file
 * Contains \Drupal\brand\Form\BrandConfigDeleteForm.
 */
namespace Drupal\brand\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Url;

/**
 * Form that handles the removal of brand entities.
 */
class brandConfigDeleteForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete this brand: @name?', array('@name' => $this->entity->name));
  }
  /**
   * {@inheritdoc}
   */
  public function getCancelRoute() {
    return new Url('brandConfig.list');
  }
  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }
  /**
   * {@inheritdoc}
   */
  public function submit(array $form, array &$form_state) {

    // Delete and set message
    $this->entity->delete();
    drupal_set_message($this->t('The brand @label has been deleted.', array('@label' => $this->entity->name)));
    $form_state['redirect_route'] = $this->getCancelRoute();

  }
}

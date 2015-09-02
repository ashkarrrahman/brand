<?php

/**
 * @file
 * Contains Drupal\brand\Entity\Form\brandSettingsForm.
 */

namespace Drupal\brand\Entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class brandSettingsForm.
 *
 * @package Drupal\brand\Form
 *
 * @ingroup brand
 */
class brandSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'brand_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Defines the settings form for Brand entities.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form definition array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['brand_settings']['#markup'] = 'Settings form for Brand entities. Manage field settings here.';

    /*$form['brand_name'] = array(
     '#type' => 'textfield',
     '#title' => $this->t('Machine name'),
    );
    $form['brand_url'] = array(
     '#type' => 'textfield',
     '#title' => $this->t('URL'),
    );
    $form['brand_submit'] = array(
     '#type' => 'submit',
     '#value' => $this->t('Save'),
    );
    */
    return $form;
  }

}

<?php
/**
 * @file
 * Contains \Drupal\brand\Form\BrandConfigForm.
 */

namespace Drupal\brand\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Url;

/**
 * Class brandConfigForm
 *
 * Form class for adding/editing brand config entities.
 */
class brandConfigForm extends EntityForm
{

    /**
     * {@inheritdoc}
     */
    public function form(array $form, array &$form_state)
    {

        $form = parent::form($form, $form_state);

        $brand = $this->entity;

        // Change page title for the edit operation
        if ($this->operation == 'edit') {
            $form['#title'] = $this->t('Edit brand: @name', array('@name' => $brand->name));
        }

        // The unique machine name of the brand.
        $form['id'] = array(
            '#type' => 'machine_name',
            '#maxlength' => EntityTypeInterface::BUNDLE_MAX_LENGTH,
            '#default_value' => $brand->id,
            '#disabled' => !$brand->isNew(),
            '#machine_name' => array(
              'exists' => array($this, 'exist'),
            ),
        );

        // The brand color.
        $form['url'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('URL'),
            '#maxlength' => 255,
            '#default_value' => $brand->brandURL,
            '#description' => $this->t("Brand URL."),
            '#required' => TRUE,
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function save(array $form, array &$form_state)
    {

        $brand = $this->entity;

        $status = $brand->save();

        if ($status) {
            // Setting the success message.
            drupal_set_message($this->t('Saved the brand: @name.', array(
                '@name' => $brand->name,
            )));
        } else {
            drupal_set_message($this->t('The @name brand was not saved.', array(
                '@name' => $brand->name,
            )));
        }
        $url = new Url('brandConfig.list');
        $form_state['redirect'] = $url->toString();

    }

}

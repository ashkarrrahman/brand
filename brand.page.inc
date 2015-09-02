<?php

/**
 * @file
 * Contains brand.page.inc.
 *
 * Page callback for Brand entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Brand templates.
 *
 * Default template: brand.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_brand(array &$variables) {
  // Fetch brand Entity Object.
  $brand = $variables['elements']['#brand'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}

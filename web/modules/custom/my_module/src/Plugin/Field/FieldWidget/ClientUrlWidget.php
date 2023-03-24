<?php

namespace Drupal\my_module\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\StringTextareaWidget;
use Drupal\Core\Form\FormStateInterface;

class ClientUrlWidget extends StringTextareaWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);
    $urls = file_get_contents(drupal_get_path('module', 'my_module') . '/urls.txt');
    $urls = explode(PHP_EOL, $urls);
    $options = array_combine($urls, $urls);
    $element['value']['#type'] = 'checkboxes';
    $element['value']['#options'] = $options;
    return $element;
  }

}

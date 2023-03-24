<?php

namespace Drupal\my_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

class ClientUrlFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    foreach ($items as $delta => $item) {
      $url = $item->get('url')->getValue();
      $parsed_url = parse_url($url);
      $domain = isset($parsed_url['host']) ? $parsed_url['host'] : '';
      $elements[$delta] = [
        '#markup' => $domain,
      ];
    }
    return $elements;
  }

}
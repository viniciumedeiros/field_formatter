<?php

namespace Drupal\field_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'field_text_tooltip' formatter
 *
 * @FieldFormatter(
 *   id = "field_text_tooltip",
 *   label = @Translation("Tooltip"),
 *   field_types = {
 *     "text",
 *   },
 * )
 */

class TooltipFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();

    foreach ($items as $delta => $item) {
      $elements[$delta] = array(
        '#type' => 'processed_text',
        '#text' => $item->value,
        '#format' => $item->format,
        '#langcode' => $item->getLangcode(),
        '#theme'=> 'text_field_tooltip_qTip2_formatter',
        '#attached' => array(
          'library' =>  array(
            'field_formatter/qTip2',
            'field_formatter/tooltipformatter_js',
          ),
        ),
      );
    }

    return $elements;
  }

}
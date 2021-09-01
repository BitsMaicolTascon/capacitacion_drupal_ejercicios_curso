<?php

namespace Drupal\Drupal_db\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provider a hello block.
 * 
 * @Block(
 *  id = "drupal_hello_block",
 *  admin_label = @Translation("Drupal Hello Block")
 * )
 */

 class HelloBlock extends BlockBase { 

    public function build() {
        return [
            '#markup' => "<p>" . $this->t('Hello, Block!') . "</p>",
        ];
    }

 }
<?php

namespace Drupal\Drupal_db\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provider a company block.
 * 
 * @Block(
 *  id = "drupal_company_block",
 *  admin_label = @Translation("Drupal Company Block")
 * )
 */

 class CompanyBlock extends BlockBase { 

    public function build() {
        $build = [];
        $form = \Drupal::formBuilder()->getForm('Drupal\drupal_db\Form\CompanyForm');
        $build['company_form'] = [
            'form'=> $form,
        ];
        return $build;
    }

 }
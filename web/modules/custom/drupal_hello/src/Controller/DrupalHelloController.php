<?php

/**
 * @file
 * Module file for Drupal Hello
 * This module says hello to the user.
 */

 namespace Drupal\drupal_hello\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class DrupalHelloController extends ControllerBase {
    public function hello() {
      return array('#markup' => "<p>" . $this->t('Hello my friend welcome to my wedsite') . "</p>");
    }
 }


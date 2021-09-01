<?php

/**
 * @file
 * Module file for Drupal sum controller.
 * This module sum the number from params.
 */

 namespace Drupal\drupal_hello\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class DrupalSumController extends ControllerBase {
    public function sum($number_one, $number_two) {
        dpm($number_one);
        return array('#markup' => $number_one . '+' . $number_two . '=' . ($number_one + $number_two));
    }
 }
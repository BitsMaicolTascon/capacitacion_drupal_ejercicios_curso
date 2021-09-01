<?php

/**
 * @file
 * Module file for Drupal user controller.
 * This modeule get the user
 */

 namespace Drupal\drupal_hello\Controller;

 use Drupal\Core\Controller\ControllerBase;
 use Drupal\user\UserInterface;

 class DrupalUserController extends ControllerBase {

    public function get_user(UserInterface $user) {
        $current_user = $user->toArray();
        dpm($current_user);
        return array('#markup' => "teh current user is" . $current_user['name']['0']['value']);
    }
 }
<?php

/**
 * @file
 * Module file for DataBase class
 * This module insert, select, update and delete.
 */

 namespace Drupal\drupal_db\Controller;

 use Drupal\Core\Controller\ControllerBase;
 use Drupal\core\DataBase\Database;

 class DrupalDataBaseController extends ControllerBase {
    
    public function insert() {
      $connection = Database::getConnection();
      $connection->insert('company')
        ->fields([
          'name' => 'Bits americas',
          'address' => 'Global COMPANY',
          'CEO' => 'Juan Andres'
        ])
        ->execute();
  
      return array('#markup' => "<p>" . $this->t('Succes! insert data') . "</p>");
    }

    public function select() {
  
      $connection = Database::getConnection();
      $result = $connection->query("SELECT * FROM company WHERE name = 'MATascon'");
      foreach ($result as $row) {
        dpm($row);
      }
      return array('#markup' => "<p>" . $this->t('Succes! select data') . "</p>");
    }

    public function update() {
      $connection = Database::getConnection();
      $connection->update('company')
        ->fields([
          'name' => 'Youtube',
          'address' => 'California',
        ])
        ->condition('id', 3)
        ->execute();
      return array('#markup' => "<p>" . $this->t('Succes! update data') . "</p>");
    }

    public function delete() {
      $connection = Database::getConnection();
      $connection->delete('company')
        ->condition('id', 3)
        ->execute();
      return array('#markup' => "<p>" . $this->t('Succes! delete data') . "</p>");
    }
 }
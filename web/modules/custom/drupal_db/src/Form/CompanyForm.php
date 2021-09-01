<?php

namespace Drupal\drupal_db\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\core\DataBase\Database;

class CompanyForm extends FormBase { 

    public function getFormId() { 
        return 'company_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Company Name'),
            '#description' => $this->t('Enter the company name'),
            '#required' => TRUE,
        ];

        $form['address'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Company address'),
            '#description' => $this->t('Enter the company address'),
            '#required' => TRUE,
        ];

        $form['CEO'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Company CEO'),
            '#description' => $this->t('Enter the company CEO'),
            '#required' => TRUE,
        ];
        // sirve para agrupar botones dentro de la vista
        $form['actions'] = [
            '#type' => 'actions',
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
            /* '#ajax' => array(   
                'callback' => '::saveCompany',
                'effect' => 'fade',
                'progress' => array('message' => '', 'type' => 'throbber'),
                'spped' => 'slow'
            ) */
        ];

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) { 
        if (strlen($form_state->getValue('name')) < 5) {
            $form_state->setErrorByName('name', $this->t('The name is too short.'));
        }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) { 
        $connection = Database::getConnection();
        $connection->insert('company')
          ->fields([
            'name' => $form_state->getValue('name'),
            'address' => $form_state->getValue('address'),
            'CEO' => $form_state->getValue('CEO'),
          ])
          ->execute();
        
        \Drupal::messenger()->addMessage($this->t('The company has been added.'));
  
    }

    /* public function saveCompany(FormStateInterface $form_state) {
        $connection = Database::getConnection();
        $connection->insert('company')
          ->fields([
            'name' => $form_state->getValue('name'),
            'address' => $form_state->getValue('address'),
            'CEO' => $form_state->getValue('CEO'),
          ])
          ->execute();
    } */
}
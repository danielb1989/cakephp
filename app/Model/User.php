<?php

    App::uses('AppModel', 'Model');
    App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {
        
        public $name = 'User';
        
        public $validate = array(
            'username' => array(
                'required' => array(
                    'rule' => array('notBlank'),
                    'message' => 'A username is required'
                )
            ),
            'password' => array(
                'required' => array(
                    'rule' => array('notBlank'),
                    'message' => 'A password is required'
                )
            ),
            'role' => array(
                'valid' => array(
                    'rule' => array('inList', array('admin', 'author')),
                    'message' => 'Please enter a valid role',
                    'allowEmpty' => false
                )
            )
        );
        
        public function passwordHasher($string = null) {
            if(!empty($string)) {
                $passwordHasher = new BlowfishPasswordHasher();
                return $passwordHasher->hash($string);
            }
        }
        
        public function passwordChecker($password = null, $hashedPassword = null) {
            if(!empty($password) && !empty($hashedPassword)) {
                $passwordHasher = new BlowfishPasswordHasher();
                return $passwordHasher->check($password, $hashedPassword);
            }
        }
        
    }
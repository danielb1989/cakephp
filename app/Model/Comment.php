<?php

    class Comment extends AppModel {

        public $name = 'Comment';
        
        public $validate = array(
            'name' => array(
                'rule' => 'notBlank'
            ),
            'email' => array(
                'rule' => 'notBlank'
            ),
            'comment' => array(
                'rule' => 'notBlank'
            )
        );
        
    }
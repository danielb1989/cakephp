<?php

    class Post extends AppModel {

        public $name = 'Post';
        
        public $validate = array(
            'title' => array(
                'rule' => 'notBlank'
            ),
            'body' => array(
                'rule' => 'notBlank'
            )
        );
        
        public function isOwnedBy($postId, $user) {
            $post = $this->find('first', array(
                'conditions' => array(
                    'Post.id' => $postId,
                    'user_id' => $user
                )
            ));
            if(!empty($post)) {
                return true;
            }
        }
        
    }
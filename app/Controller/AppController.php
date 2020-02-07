<?php

    App::uses('Controller', 'Controller');

    class AppController extends Controller {

        public $components = array(
            'Flash',
            'Session',
    //        'Auth' => array(
    //            'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
    //            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
    //            'authorize' => array('Controller') // Adicionamos essa linha
    //        )
            'Messages'
        );

        public $helpers = array(
            "TextFormat"
        );

        // public function isAuthorized($user = null) {
            //if (isset($user['role']) && $user['role'] === 'admin') {
            //    return true; // Admin pode acessar todas actions
            //}
            // return false; // Os outros usuários não podem
        // }

    }

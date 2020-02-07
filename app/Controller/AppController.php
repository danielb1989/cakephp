<?php

    App::uses('Controller', 'Controller');

    class AppController extends Controller {
        
        public $uses = array(
            "User"
        );

        public $components = array(
            'Flash',
            'Session',
            'Messages'
        );

        public $helpers = array(
            "TextFormat"
        );
        
        private $controllers_de_livre_acesso = array(
            "pages"
        );

        public function beforeFilter() {
            if(!in_array($this->params->controller, $this->controllers_de_livre_acesso)) {
                $this->validaAcesso();
            }
        }
        
        private function validaAcesso() {
            try {
                if ($this->Session->check("User") != true){
                    throw new Exception("Por favor, digite seu usuário.");
                } 
                $usuario = $this->User->find("first", array(
                    "conditions" => array(
                        "User.id" => $this->Session->read("User.id"),
                        "User.username" => $this->Session->read("User.username")
                    )
                ));
                if(empty($usuario)){
                    throw new Exception("Usuário não pode fazer login no sistema.");
                }
            } catch (Exception $e) {
                $this->logoutSistema($this->Messages->alert($e->getMessage(), 2));
            }
        }
        
        public function logoutSistema($mensagem = null) {
            $this->Session->destroy();
            $this->Session->setFlash($mensagem);
            $this->redirect(array("controller" => "painel", "action" => "login"));
        }

    }

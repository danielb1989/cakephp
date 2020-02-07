<?php

    App::uses('AppController', 'Controller');

    class PainelController extends AppController {
        
        public $layout = "painel";

        public $uses = array(
            "Post",
            "Comment",
            "User"
        );
        
        public $components = array();
        
        function beforeFilter() {
            if($this->request->params['action'] == "login"){
                $this->layout = "login";
            }
        }
        
        public function login() {
            if($this->request->is("post")){
                try {
                    if(empty($this->request->data["User"]["username"])){
                        throw new Exception("Por favor, digite seu email.");
                    }
                    if(empty($this->request->data["User"]["password"])){
                        throw new Exception("Por favor, digite sua senha.");
                    }
                    $user = $this->User->find("first", array(
                        "conditions" => array(
                            "username" => $this->request->data["User"]["username"]
                        )
                    ));
                    if(empty($user)){
                        throw new Exception("Usuário não encontrado.");
                    }
                    $password = $this->User->passwordHasher($this->request->data["User"]["password"]);
                    if(!$this->User->passwordChecker($user["User"]["password"], $password)) {
                        throw new Exception("Senha incorreta.");
                    }
                    $this->Session->write(array(
                        "User.id" => $user["User"]["id"],
                        "User.username" => $user["User"]["username"]
                    ));
                    $this->redirect(array("controller" => "painel", "action" => "index"));
                } catch (Exception $e) {
                    $this->Session->setFlash($this->Messages->alert($e->getMessage(), 2));
                }
            }
        }

        public function index() {
            $this->set(array(
                'posts' => $this->Post->find('count', array()), 
                'comments' => $this->Comment->find('count', array()), 
                'users' => $this->User->find('count', array()), 
            ));
        }

    }
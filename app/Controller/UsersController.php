<?php 

    App::uses('AppController', 'Controller');

    class UsersController extends AppController {
        
        public $name = 'Users';
        
        public $layout = "painel";
        
        public $uses = array();

        public function index() {
            $this->set('users', $this->User->find('all', array(
                "order" => "User.id DESC"
            )));
        }

        public function add() {
            if ($this->request->is('post')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash($this->Messages->alert('Usuário <strong>'.$this->request->data["User"]["username"].'</strong> salvo com sucesso.', 1));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash($this->Messages->alert('Não foi possível criar o usuário. Por favor, tente novamente mais tarde.', 2));
                }
            }
        }

        public function edit($id = null) {
            try {
                $this->User->id = $id;
                if($this->request->is('get')) {
                    $this->request->data = $this->User->findById($id);
                } else {
                    if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash($this->Messages->alert('Usuário <strong>'.$this->request->data["User"]["username"].'</strong> editado com sucesso.', 1));
                        $this->redirect(array('action' => 'index'));
                    }
                }
            } catch (Exception $exc) {
                $this->Session->setFlash($this->Messages->alert($exc->getMessage(), 2));
                $this->redirect(array('action' => 'index'));
            }
        }

        public function delete($id = null) {
            try {
                if(!$this->request->is('post')) {
                    throw new Exception('Você não pode excluir esse usuário.');
                }
                if($id == 1) {
                    throw new Exception('Você não pode excluir esse usuário.');
                }
                $this->User->id = $id;
                if (!$this->User->exists()) {
                    throw new Exception('O usuário não existe.');
                }
                if (!$this->User->delete()) {
                    throw new Exception('Não foi possível excluir o usuário.');
                }
                $this->Session->setFlash($this->Messages->alert('Usuário <strong>' . $id . '</strong> deletado com sucesso.', 2));
                $this->redirect(array('action' => 'index'));
            } catch (Exception $exc) {
                $this->Session->setFlash($this->Messages->alert($exc->getMessage(), 2));
                $this->redirect(array('action' => 'index'));
            }
        }

    }
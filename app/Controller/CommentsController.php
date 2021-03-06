<?php

    App::uses('AppController', 'Controller');

    class CommentsController extends AppController {

        public $name = 'Comments';
        
        public $layout = "painel";
        
        public $uses = array(
            "Comment"
        );

        public $components = array();

        public $helpers = array ('Html', 'Form');

        public function index() {
            $this->set('comments', $this->Comment->find('all', array(
                "order" => "Comment.id DESC"
            )));
        }

        public function view($id = null) {
            $this->set('post', $this->Post->findById($id));
        }
        
        public function add() {
            if ($this->request->is('post')) {
                $this->request->data['Comment']['ip'] = $this->request->clientIp();
                if ($this->Comment->save($this->request->data)) {
                    $this->Session->setFlash($this->Messages->alert('Comentário salvo com sucesso.', 1));
                    $this->redirect(array('controller' => 'pages', 'action' => 'post', $this->request->data['Comment']['post_id']));
                }
            }
        }

        public function delete($id = null) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->Comment->id = $id;
            if (!$this->Comment->exists()) {
                throw new NotFoundException(__('Comentário inválido'));
            }
            if ($this->Comment->delete()) {
                $this->Session->setFlash($this->Messages->alert('Comentário excluido com sucesso.', 2));
                $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('User was not deleted'));
            $this->redirect(array('action' => 'index'));
        }

    }
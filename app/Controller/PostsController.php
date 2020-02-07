<?php

    App::uses('AppController', 'Controller');

    class PostsController extends AppController {

        public $name = 'Posts';
        
        public $layout = "painel";
        
        public $helpers = array ('Html','Form');

        public function index() {
            $this->set('posts', $this->Post->find('all', array(
                "order" => "Post.id DESC"
            )));
        }

        public function view($id = null) {
            $this->set('post', $this->Post->findById($id));
        }

        public function add() {
            if ($this->request->is('post')) {
                if ($this->Post->save($this->request->data)) {
                    $mensagem = $this->Messages->alert('Post <strong>'.$this->request->data["Post"]["title"].'</strong> criado com sucesso.', 1);
                    $this->Session->setFlash($mensagem);
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        public function edit($id = null) {
            $this->Post->id = $id;
            if ($this->request->is('get')) {
                $this->request->data = $this->Post->findById($id);
            } else {
                if ($this->Post->save($this->request->data)) {
                    $this->Session->setFlash($this->Messages->alert('Post <strong>'.$this->request->data["Post"]["title"].'</strong> editado com sucesso.', 1));
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        public function delete($id) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            if ($this->Post->delete($id)) {
                $this->Session->setFlash($this->Messages->alert('Post <strong>' . $id . '</strong> deletado com sucesso.', 2));
                $this->redirect(array('action' => 'index'));
            }
        }

        public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                if ($this->action === 'add') {
                    return true;
                }
                if (in_array($this->action, array('edit', 'delete'))) {
                    $postId = (int) $this->request->params['pass'][0];
                    return $this->Post->isOwnedBy($postId, $user['id']);
                }
            }
            return false;
        }

    }
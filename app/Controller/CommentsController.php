<?php

class CommentsController extends AppController {
    
    public $name = 'Comments';
    
    public $components = array("Messages");
    
    public $helpers = array ('Html', 'Form');
    
    public function index() {
        $this->set('posts', $this->Post->find('all'));
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
    
}
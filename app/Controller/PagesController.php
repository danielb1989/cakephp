<?php

    App::uses('AppController', 'Controller');

    class PagesController extends AppController {

        public $uses = array(
            "Post",
            "Comment"
        );

        public $components = array('Messages');

        public function home() {
            $ultimasPostagens = $this->Post->find('all');
            $this->set(array(
                "ultimasPostagens" => $ultimasPostagens
            ));
        }

        public function post($id = null) {
            $post = $this->Post->find('first', array(
                'conditions' => array('Post.id' => $id)
            ));
            $last_posts = $this->Post->find('all', array(
                'order' => array('Post.id ASC'),
                'limit' => 5
            ));
            $comments = $this->Comment->find('all', array(
                'conditions' => array('Comment.post_id' => $id),
                'limit' => 5
            ));
            $this->set(array(
                'post' => $post,
                'last_posts' => $last_posts,
                'comments' => $comments
            ));
        }

        public function display() {
            $path = func_get_args();
            $count = count($path);
            if (!$count) {
                return $this->redirect('/');
            }
            if (in_array('..', $path, true) || in_array('.', $path, true)) {
                throw new ForbiddenException();
            }
            $page = $subpage = $title_for_layout = null;
            if (!empty($path[0])) {
                $page = $path[0];
            }
            if (!empty($path[1])) {
                $subpage = $path[1];
            }
            if (!empty($path[$count - 1])) {
                $title_for_layout = Inflector::humanize($path[$count - 1]);
            }
            $this->set(compact('page', 'subpage', 'title_for_layout'));
            try {
                $this->render(implode('/', $path));
            } catch (MissingViewException $e) {
                if (Configure::read('debug')) {
                        throw $e;
                }
                throw new NotFoundException();
            }
        }
    }

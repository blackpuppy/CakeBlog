<?php

App::uses('AppController', 'Controller');

class TagsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');

    public function index() {
        $this->set('tags', $this->Tag->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid tag'));
        }

        $tag = $this->Tag->findById($id);
        if (!$tag) {
            throw new NotFoundException(__('Invalid tag'));
        }
        $this->set('tag', $tag);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Your tag has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your tag.');
            }
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid tag'));
        }

        $tag = $this->Tag->findById($id);
        if (!$tag) {
            throw new NotFoundException(__('Invalid tag'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Tag->id = $id;
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Your tag has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your tag.');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $tag;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Tag->delete($id)) {
            $this->Session->setFlash('The tag with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}

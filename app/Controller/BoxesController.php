<?php

class BoxesController extends AppController {
	public $helpers = array('Html', 'Form');
    
    public function index() {
        $this->set('boxes', $this->Box->find('all'));
    }
	
	public function ver($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid box'));
        }

        $box = $this->Box->findById($id);
        if (!$box) {
            throw new NotFoundException(__('Invalid box'));
        }
        $this->set('box', $box);
    }
	
	public function criar() {
        if ($this->request->is('post')) {
            $this->Box->create();
            if ($this->Box->save($this->request->data)) {
                $this->Session->setFlash(__('Your box has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
	
	public function editar($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid box'));
		}
	
		$box = $this->Box->findById($id);
		if (!$box) {
			throw new NotFoundException(__('Invalid box'));
		}
	
		if ($this->request->is(array('post', 'put'))) {
			$this->Box->id = $id;
			if ($this->Box->save($this->request->data)) {
				$this->Session->setFlash(__('Your box has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your box.'));
		}
	
		if (!$this->request->data) {
			$this->request->data = $box;
		}
	}
	
	public function apagar($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Box->delete($id)) {
        $this->Session->setFlash(__("The box with id: $id has been deleted."));
        return $this->redirect(array('action' => 'index'));
    }
}
}

?>
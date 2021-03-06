<?php
App::uses('AppController', 'Controller');
/**
 * Institutos Controller
 *
 * @property Instituto $Instituto
 */
class InstitutosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instituto->recursive = 0;
		$this->set('institutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instituto->exists($id)) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		$options = array('conditions' => array('Instituto.' . $this->Instituto->primaryKey => $id));
		$this->set('instituto', $this->Instituto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instituto->create();
			if ($this->Instituto->save($this->request->data)) {
				$this->Session->setFlash(__('The instituto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instituto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Instituto->exists($id)) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instituto->save($this->request->data)) {
				$this->Session->setFlash(__('The instituto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instituto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instituto.' . $this->Instituto->primaryKey => $id));
			$this->request->data = $this->Instituto->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instituto->id = $id;
		if (!$this->Instituto->exists()) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Instituto->delete()) {
			$this->Session->setFlash(__('Instituto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instituto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

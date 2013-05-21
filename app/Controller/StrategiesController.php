<?php
App::uses('AppController', 'Controller');
/**
 * Strategies Controller
 *
 * @property Strategy $Strategy
 */
class StrategiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Strategy->recursive = 0;
		$this->set('strategies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
		$this->set('strategy', $this->Strategy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Strategy->create();
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		}
		$strategyCategories = $this->Strategy->StrategyCategory->find('list');
		$this->set(compact('strategyCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
			$this->request->data = $this->Strategy->find('first', $options);
		}
		$strategyCategories = $this->Strategy->StrategyCategory->find('list');
		$this->set(compact('strategyCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Strategy->id = $id;
		if (!$this->Strategy->exists()) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Strategy->delete()) {
			$this->Session->setFlash(__('Strategy deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategy was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Strategy->recursive = 0;
		$this->set('strategies', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
		$this->set('strategy', $this->Strategy->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Strategy->create();
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		}
		$strategyCategories = $this->Strategy->StrategyCategory->find('list');
		$this->set(compact('strategyCategories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
			$this->request->data = $this->Strategy->find('first', $options);
		}
		$strategyCategories = $this->Strategy->StrategyCategory->find('list');
		$this->set(compact('strategyCategories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Strategy->id = $id;
		if (!$this->Strategy->exists()) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Strategy->delete()) {
			$this->Session->setFlash(__('Strategy deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategy was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

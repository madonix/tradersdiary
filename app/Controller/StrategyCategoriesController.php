<?php
App::uses('AppController', 'Controller');
/**
 * StrategyCategories Controller
 *
 * @property StrategyCategory $StrategyCategory
 */
class StrategyCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StrategyCategory->recursive = 0;
		$this->set('strategyCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StrategyCategory->exists($id)) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		$options = array('conditions' => array('StrategyCategory.' . $this->StrategyCategory->primaryKey => $id));
		$this->set('strategyCategory', $this->StrategyCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StrategyCategory->create();
			if ($this->StrategyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy category could not be saved. Please, try again.'));
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
		if (!$this->StrategyCategory->exists($id)) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StrategyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StrategyCategory.' . $this->StrategyCategory->primaryKey => $id));
			$this->request->data = $this->StrategyCategory->find('first', $options);
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
		$this->StrategyCategory->id = $id;
		if (!$this->StrategyCategory->exists()) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StrategyCategory->delete()) {
			$this->Session->setFlash(__('Strategy category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategy category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StrategyCategory->recursive = 0;
		$this->set('strategyCategories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StrategyCategory->exists($id)) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		$options = array('conditions' => array('StrategyCategory.' . $this->StrategyCategory->primaryKey => $id));
		$this->set('strategyCategory', $this->StrategyCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StrategyCategory->create();
			if ($this->StrategyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->StrategyCategory->exists($id)) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StrategyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StrategyCategory.' . $this->StrategyCategory->primaryKey => $id));
			$this->request->data = $this->StrategyCategory->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->StrategyCategory->id = $id;
		if (!$this->StrategyCategory->exists()) {
			throw new NotFoundException(__('Invalid strategy category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StrategyCategory->delete()) {
			$this->Session->setFlash(__('Strategy category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategy category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * StrategiesRulesOrders Controller
 *
 * @property StrategiesRulesOrder $StrategiesRulesOrder
 */
class StrategiesRulesOrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StrategiesRulesOrder->recursive = 0;
		$this->set('strategiesRulesOrders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StrategiesRulesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		$options = array('conditions' => array('StrategiesRulesOrder.' . $this->StrategiesRulesOrder->primaryKey => $id));
		$this->set('strategiesRulesOrder', $this->StrategiesRulesOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StrategiesRulesOrder->create();
			if ($this->StrategiesRulesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The strategies rules order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies rules order could not be saved. Please, try again.'));
			}
		}
		$strategies = $this->StrategiesRulesOrder->Strategy->find('list');
		$rules = $this->StrategiesRulesOrder->Rule->find('list');
		$this->set(compact('strategies', 'rules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StrategiesRulesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StrategiesRulesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The strategies rules order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies rules order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StrategiesRulesOrder.' . $this->StrategiesRulesOrder->primaryKey => $id));
			$this->request->data = $this->StrategiesRulesOrder->find('first', $options);
		}
		$strategies = $this->StrategiesRulesOrder->Strategy->find('list');
		$rules = $this->StrategiesRulesOrder->Rule->find('list');
		$this->set(compact('strategies', 'rules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StrategiesRulesOrder->id = $id;
		if (!$this->StrategiesRulesOrder->exists()) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StrategiesRulesOrder->delete()) {
			$this->Session->setFlash(__('Strategies rules order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategies rules order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StrategiesRulesOrder->recursive = 0;
		$this->set('strategiesRulesOrders', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StrategiesRulesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		$options = array('conditions' => array('StrategiesRulesOrder.' . $this->StrategiesRulesOrder->primaryKey => $id));
		$this->set('strategiesRulesOrder', $this->StrategiesRulesOrder->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StrategiesRulesOrder->create();
			if ($this->StrategiesRulesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The strategies rules order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies rules order could not be saved. Please, try again.'));
			}
		}
		$strategies = $this->StrategiesRulesOrder->Strategy->find('list');
		$rules = $this->StrategiesRulesOrder->Rule->find('list');
		$this->set(compact('strategies', 'rules'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->StrategiesRulesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StrategiesRulesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The strategies rules order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies rules order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StrategiesRulesOrder.' . $this->StrategiesRulesOrder->primaryKey => $id));
			$this->request->data = $this->StrategiesRulesOrder->find('first', $options);
		}
		$strategies = $this->StrategiesRulesOrder->Strategy->find('list');
		$rules = $this->StrategiesRulesOrder->Rule->find('list');
		$this->set(compact('strategies', 'rules'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->StrategiesRulesOrder->id = $id;
		if (!$this->StrategiesRulesOrder->exists()) {
			throw new NotFoundException(__('Invalid strategies rules order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StrategiesRulesOrder->delete()) {
			$this->Session->setFlash(__('Strategies rules order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Strategies rules order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

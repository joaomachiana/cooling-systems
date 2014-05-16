<?php
App::uses('AppController', 'Controller');
/**
 * ContractsEquipments Controller
 *
 * @property ContractsEquipment $ContractsEquipment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContractsEquipmentsController extends AppController {

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContractsEquipment->recursive = 0;
		$this->set('contractsEquipments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ContractsEquipment->id = $id;
		if (!$this->ContractsEquipment->exists()) {
			throw new NotFoundException(__('Invalid %s', __('contracts equipment')));
		}
		$this->set('contractsEquipment', $this->ContractsEquipment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContractsEquipment->create();
			if ($this->ContractsEquipment->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('contracts equipment')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('contracts equipment')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ContractsEquipment->id = $id;
		if (!$this->ContractsEquipment->exists()) {
			throw new NotFoundException(__('Invalid %s', __('contracts equipment')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContractsEquipment->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('contracts equipment')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('contracts equipment')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->ContractsEquipment->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ContractsEquipment->id = $id;
		if (!$this->ContractsEquipment->exists()) {
			throw new NotFoundException(__('Invalid %s', __('contracts equipment')));
		}
		if ($this->ContractsEquipment->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('contracts equipment')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('contracts equipment')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

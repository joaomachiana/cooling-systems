<?php
App::uses('AppController', 'Controller');
/**
 * ClientsIdentificationTypes Controller
 *
 * @property ClientsIdentificationType $ClientsIdentificationType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ClientsIdentificationTypesController extends AppController {

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
		$this->ClientsIdentificationType->recursive = 0;
		$this->set('clientsIdentificationTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsIdentificationType->id = $id;
		if (!$this->ClientsIdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('clients identification type')));
		}
		$this->set('clientsIdentificationType', $this->ClientsIdentificationType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsIdentificationType->create();
			if ($this->ClientsIdentificationType->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('clients identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('clients identification type')),
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
		$this->ClientsIdentificationType->id = $id;
		if (!$this->ClientsIdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('clients identification type')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsIdentificationType->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('clients identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('clients identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->ClientsIdentificationType->read(null, $id);
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
		$this->ClientsIdentificationType->id = $id;
		if (!$this->ClientsIdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('clients identification type')));
		}
		if ($this->ClientsIdentificationType->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('clients identification type')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('clients identification type')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

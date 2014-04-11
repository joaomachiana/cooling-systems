<?php
App::uses('AppController', 'Controller');
/**
 * Maintenances Controller
 *
 * @property Maintenance $Maintenance
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MaintenancesController extends AppController {

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
		$this->Maintenance->recursive = 0;
		$this->set('maintenances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Maintenance->id = $id;
		if (!$this->Maintenance->exists()) {
			throw new NotFoundException(__('Invalid %s', __('maintenance')));
		}
		$this->set('maintenance', $this->Maintenance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Maintenance->create();
			if ($this->Maintenance->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('maintenance')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('maintenance')),
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
		$this->Maintenance->id = $id;
		if (!$this->Maintenance->exists()) {
			throw new NotFoundException(__('Invalid %s', __('maintenance')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Maintenance->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('maintenance')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('maintenance')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Maintenance->read(null, $id);
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
		$this->Maintenance->id = $id;
		if (!$this->Maintenance->exists()) {
			throw new NotFoundException(__('Invalid %s', __('maintenance')));
		}
		if ($this->Maintenance->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('maintenance')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('maintenance')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

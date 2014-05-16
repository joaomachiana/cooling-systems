<?php
App::uses('AppController', 'Controller');
/**
 * IdentificationTypesPersonalInfos Controller
 *
 * @property IdentificationTypesPersonalInfo $IdentificationTypesPersonalInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IdentificationTypesPersonalInfosController extends AppController {

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
		$this->IdentificationTypesPersonalInfo->recursive = 0;
		$this->set('identificationTypesPersonalInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->IdentificationTypesPersonalInfo->id = $id;
		if (!$this->IdentificationTypesPersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification types personal info')));
		}
		$this->set('identificationTypesPersonalInfo', $this->IdentificationTypesPersonalInfo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IdentificationTypesPersonalInfo->create();
			if ($this->IdentificationTypesPersonalInfo->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('identification types personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('identification types personal info')),
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
		$this->IdentificationTypesPersonalInfo->id = $id;
		if (!$this->IdentificationTypesPersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification types personal info')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IdentificationTypesPersonalInfo->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('identification types personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('identification types personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->IdentificationTypesPersonalInfo->read(null, $id);
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
		$this->IdentificationTypesPersonalInfo->id = $id;
		if (!$this->IdentificationTypesPersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification types personal info')));
		}
		if ($this->IdentificationTypesPersonalInfo->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('identification types personal info')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('identification types personal info')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

<?php
App::uses('AppController', 'Controller');
/**
 * IdentificationTypes Controller
 *
 * @property IdentificationType $IdentificationType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IdentificationTypesController extends AppController {

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
		$this->IdentificationType->recursive = 0;
		$this->set('identificationTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->IdentificationType->id = $id;
		if (!$this->IdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification type')));
		}
		$this->set('identificationType', $this->IdentificationType->read(null, $id));
	}

    // @todo Adicionar validacao para verificar se tal IdentificationType já foi previamente inserido ou nao no sistema

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IdentificationType->create();
			if ($this->IdentificationType->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('identification type')),
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
		$this->IdentificationType->id = $id;
		if (!$this->IdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification type')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IdentificationType->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('identification type')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->IdentificationType->read(null, $id);
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
		$this->IdentificationType->id = $id;
		if (!$this->IdentificationType->exists()) {
			throw new NotFoundException(__('Invalid %s', __('identification type')));
		}
		if ($this->IdentificationType->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('identification type')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('identification type')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

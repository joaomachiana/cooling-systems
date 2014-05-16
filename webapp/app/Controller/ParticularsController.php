<?php
App::uses('AppController', 'Controller');
/**
 * Particulars Controller
 *
 * @property Particular $Particular
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ParticularsController extends AppController {

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
		$this->Particular->recursive = 0;
		$this->set('particulars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Particular->id = $id;
		if (!$this->Particular->exists()) {
			throw new NotFoundException(__('Invalid %s', __('particular')));
		}
		$this->set('particular', $this->Particular->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Particular->create();
			if ($this->Particular->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('particular')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('particular')),
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
		$this->Particular->id = $id;
		if (!$this->Particular->exists()) {
			throw new NotFoundException(__('Invalid %s', __('particular')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Particular->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('particular')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('particular')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Particular->read(null, $id);
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
		$this->Particular->id = $id;
		if (!$this->Particular->exists()) {
			throw new NotFoundException(__('Invalid %s', __('particular')));
		}
		if ($this->Particular->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('particular')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('particular')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

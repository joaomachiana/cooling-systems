<?php
App::uses('AppController', 'Controller');
/**
 * Workers Controller
 *
 * @property Worker $Worker
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class WorkersController extends AppController {

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
		$this->Worker->recursive = 0;
		$this->set('workers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Worker->id = $id;
		if (!$this->Worker->exists()) {
			throw new NotFoundException(__('Invalid %s', __('worker')));
		}
		$this->set('worker', $this->Worker->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Worker->create();
			if ($this->Worker->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('worker')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('worker')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$categories = $this->Worker->Category->find('list');
		$personalInfos = $this->Worker->PersonalInfo->find('list');
		$this->set(compact('categories', 'personalInfos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Worker->id = $id;
		if (!$this->Worker->exists()) {
			throw new NotFoundException(__('Invalid %s', __('worker')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Worker->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('worker')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('worker')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Worker->read(null, $id);
		}
		$categories = $this->Worker->Category->find('list');
		$personalInfos = $this->Worker->PersonalInfo->find('list');
		$this->set(compact('categories', 'personalInfos'));
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
		$this->Worker->id = $id;
		if (!$this->Worker->exists()) {
			throw new NotFoundException(__('Invalid %s', __('worker')));
		}
		if ($this->Worker->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('worker')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('worker')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

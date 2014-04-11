<?php
App::uses('AppController', 'Controller');
/**
 * PersonalInfos Controller
 *
 * @property PersonalInfo $PersonalInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonalInfosController extends AppController {

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
		$this->PersonalInfo->recursive = 0;
		$this->set('personalInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonalInfo->id = $id;
		if (!$this->PersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('personal info')));
		}
		$this->set('personalInfo', $this->PersonalInfo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalInfo->create();
			if ($this->PersonalInfo->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$locations = $this->PersonalInfo->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonalInfo->id = $id;
		if (!$this->PersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('personal info')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalInfo->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('personal info')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->PersonalInfo->read(null, $id);
		}
		$locations = $this->PersonalInfo->Location->find('list');
		$this->set(compact('locations'));
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
		$this->PersonalInfo->id = $id;
		if (!$this->PersonalInfo->exists()) {
			throw new NotFoundException(__('Invalid %s', __('personal info')));
		}
		if ($this->PersonalInfo->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('personal info')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('personal info')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}

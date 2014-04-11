<?php
App::uses('AppModel', 'Model');
/**
 * Worker Model
 *
 * @property Category $Category
 * @property PersonalInfo $PersonalInfo
 */
class Worker extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'worker_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonalInfo' => array(
			'className' => 'PersonalInfo',
			'foreignKey' => 'personal_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

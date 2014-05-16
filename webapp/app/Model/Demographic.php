<?php
App::uses('AppModel', 'Model');
/**
 * PersonalInfo Model
 *
 * @property Location $Location
 */
class PersonalInfo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'personal_info_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

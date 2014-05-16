<?php
App::uses('AppModel', 'Model');
/**
 * IdentificationType Model
 *
 */
class IdentificationType extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'identification_type_id';


 /**
  * Has and belongs to many associations
  *
  */

    public $hasAndBelongsToMany = array(
        'Client' =>
            array(
                'className' => 'Client',
                'joinTable' => 'clients_identification_types',
                'foreignKey' => 'identification_type_id',
                'associationForeignKey' => 'client_id',
                'unique' => 'True',
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => ''
            ),
        'PersonalInfo' =>
            array(
                'className' => 'PersonalInfo',
                'joinTable' => 'identification_types_personal_info',
                'foreignKey' => 'identification_type_id',
                'associationForeignKey' => 'personal_info_id',
                'unique' => 'True',
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => ''
            )
    );
}

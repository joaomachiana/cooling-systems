<?php
App::uses('AppModel', 'Model');
/**
 * Equipment Model
 *
 */
class Equipment extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'equipments';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'equipment_id';

}

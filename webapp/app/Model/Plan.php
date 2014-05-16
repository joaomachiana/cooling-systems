<?php
App::uses('AppModel', 'Model');
/**
 * Plan Model
 *
 */
class Plan extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'plan_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}

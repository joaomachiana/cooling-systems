<?php
App::uses('AppModel', 'Model');
/**
 * Corporate Model
 *
 */
class Corporate extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'corporate_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}

<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property Salaries $Salaries
 * @property TimeParts $TimeParts
 * @property Countries $Countries
 * @property Users $Users
 * @property Categories $Categories
 */
class Post extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Salaries' => array(
			'className' => 'Salaries',
			'foreignKey' => 'salaries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TimeParts' => array(
			'className' => 'TimeParts',
			'foreignKey' => 'time_parts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Countries' => array(
			'className' => 'Countries',
			'foreignKey' => 'countries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categories' => array(
			'className' => 'Categories',
			'foreignKey' => 'categories_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

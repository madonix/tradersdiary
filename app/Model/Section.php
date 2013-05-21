<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 * @property Rule $Rule
 */
class Section extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'section_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'section';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Rule' => array(
			'className' => 'Rule',
			'foreignKey' => 'section_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

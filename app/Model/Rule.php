<?php
App::uses('AppModel', 'Model');
/**
 * Rule Model
 *
 * @property Section $Section
 * @property StrategiesRulesOrder $StrategiesRulesOrder
 */
class Rule extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'rule_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rule';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'StrategiesRulesOrder' => array(
			'className' => 'StrategiesRulesOrder',
			'foreignKey' => 'rule_id',
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

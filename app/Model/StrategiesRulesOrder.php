<?php
App::uses('AppModel', 'Model');
/**
 * StrategiesRulesOrder Model
 *
 * @property Strategy $Strategy
 * @property Rule $Rule
 */
class StrategiesRulesOrder extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'strategies_rules_orders_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Strategy' => array(
			'className' => 'Strategy',
			'foreignKey' => 'strategy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rule' => array(
			'className' => 'Rule',
			'foreignKey' => 'rule_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

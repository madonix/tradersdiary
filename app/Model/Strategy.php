<?php
App::uses('AppModel', 'Model');
/**
 * Strategy Model
 *
 * @property StrategyCategory $StrategyCategory
 * @property StrategiesRulesOrder $StrategiesRulesOrder
 */
class Strategy extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'strategy_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'strategy';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'StrategyCategory' => array(
			'className' => 'StrategyCategory',
			'foreignKey' => 'strategy_category_id',
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
			'foreignKey' => 'strategy_id',
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

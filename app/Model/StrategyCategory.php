<?php
App::uses('AppModel', 'Model');
/**
 * StrategyCategory Model
 *
 * @property Strategy $Strategy
 */
class StrategyCategory extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'strategy_category_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'category';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Strategy' => array(
			'className' => 'Strategy',
			'foreignKey' => 'strategy_category_id',
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

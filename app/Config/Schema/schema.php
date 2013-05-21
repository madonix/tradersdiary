<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $rules = array(
		'rule_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rule' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'rule_id', 'unique' => 1),
			'fk_section_id_sections' => array('column' => 'section_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $sections = array(
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'section' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'section_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $strategies = array(
		'strategy_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'strategy_category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'strategy' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'strategy_id', 'unique' => 1),
			'fk_category_id_categories' => array('column' => 'strategy_category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $strategies_rules_orders = array(
		'strategies_rules_orders_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'strategy_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rule_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ruleorder' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'strategies_rules_orders_id', 'unique' => 1),
			'fk_strategy_id_strategies' => array('column' => 'strategy_id', 'unique' => 0),
			'fk_rules_id_rules' => array('column' => 'rule_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $strategy_categories = array(
		'strategy_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'strategy_category_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

}

<?php
App::uses('StrategyCategory', 'Model');

/**
 * StrategyCategory Test Case
 *
 */
class StrategyCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.strategy_category',
		'app.strategy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StrategyCategory = ClassRegistry::init('StrategyCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StrategyCategory);

		parent::tearDown();
	}

}

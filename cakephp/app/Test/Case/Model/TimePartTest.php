<?php
App::uses('TimePart', 'Model');

/**
 * TimePart Test Case
 */
class TimePartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.time_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TimePart = ClassRegistry::init('TimePart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimePart);

		parent::tearDown();
	}

}

<?php
/**
 * Post Fixture
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'salaries_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'time_parts_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'countries_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'users_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categories_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'salaries_id' => 1,
			'time_parts_id' => 1,
			'countries_id' => 1,
			'users_id' => 1,
			'categories_id' => 1,
			'start_date' => '2017-04-13 10:47:58',
			'end_date' => '2017-04-13 10:47:58'
		),
	);

}

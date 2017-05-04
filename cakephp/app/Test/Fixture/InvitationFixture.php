<?php
/**
 * Invitation Fixture
 */
class InvitationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'owner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'receiver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false, 'comment' => 'Gi?ng nh? cái role'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'owner_id' => array('column' => 'owner_id', 'unique' => 0),
			'receiver_id' => array('column' => 'receiver_id', 'unique' => 0)
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
			'owner_id' => 1,
			'receiver_id' => 1,
			'status' => 1
		),
	);

}

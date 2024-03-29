<?php
/**
 * Employee Fixture
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nazwisko' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8mb4_polish_ci', 'charset' => 'utf8mb4'),
		'imie' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8mb4_polish_ci', 'charset' => 'utf8mb4'),
		'etat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8mb4_polish_ci', 'charset' => 'utf8mb4'),
		'id_szefa' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '4,0', 'unsigned' => false),
		'zatrudniony' => array('type' => 'date', 'null' => true, 'default' => null),
		'placa_pod' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'placa_dod' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'id_zesp' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '2,0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_polish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nazwisko' => 'Lorem ipsum d',
			'imie' => 'Lorem ipsum d',
			'etat' => 'Lorem ip',
			'id_szefa' => '',
			'zatrudniony' => '2022-05-09',
			'placa_pod' => '',
			'placa_dod' => '',
			'id_zesp' => ''
		),
	);

}

<?php defined ('SYSPATH') or die('No direct script access.');

class Model_Dbconfig extends ORM
{
	protected $_table_name = 'module_dbconfig';

	protected $_primary_key = 'param';

	private $config = array ();

	protected $_table_columns = array (
		'param' => array ('type' => 'int'),
		'value' => array ('type' => 'mediumtext'),
	);
}
<?php defined('SYSPATH') or die('No direct access allowed.');

abstract class Dbconfig extends DB
{
//	private $config = array ();

	public static function get ($param = '')
	{
//		if (isset ($this->config[$param]))
//		{
//			return $this->config[$param];
//		}

		$t = ORM::factory ('Dbconfig', $param);
		if ($t->loaded ())
		{
//			$this->config[$param] = $t->value;
			return $t->value;
		}
		else
		{
			return null;
		}
	}

	public static function set ($param = '', $value = '')
	{
		$t = ORM::factory ('Dbconfig', $param);
		if ($t->loaded ())
		{
			$t->value = $value;
			$t->save ();
		}
		else
		{
			$n = ORM::factory ('Dbconfig');
			$n->param = $param;
			$n->value = $value;
			$n->save ();
		}
	}
}
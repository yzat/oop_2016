<?php
	namespace App\Models;

	use App\Db;

	class User
	{
		public static $table='users';
		
		public $email;
		public $name;
		public static function findAll(){
			$db=new \App\Db();
			$users=$db->query('SELECT * FROM '.self::$table ,'App\Models\User');
			return $users;
		}
	}
<?php
	namespace App\Models;

	use App\Db;

	class User
	{
		const TABLE='users';
		
		public $email;
		public $name;
		public static function findAll(){
			$db=new \App\Db();
			$users=$db->query('SELECT * FROM '.self::TABLE ,self::class);
			return $users;
		}
	}
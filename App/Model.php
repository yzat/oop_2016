<?php


	namespace App;
	use App\Db;
	class Model
	{
		const TABLE='';

		public static function findAll(){
			$db=new \App\Db();
			$users=$db->query('SELECT * FROM '.static::TABLE ,static::class);
			return $users;
		}
	}
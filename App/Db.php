<?php
	namespace App;

	class Db{
		protected $dbh;

		public function __construct(){
			$this->dbh=new \PDO('mysql:host=127.0.0.1;dbname=oop_yt','root','');
		}
		public function execute($sql){
			$sth=$this->dbh->prepare($sql);
			$res=$sth->execute();
			return $res;
		}
	}

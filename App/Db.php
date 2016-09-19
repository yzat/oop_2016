<?php
	namespace App;

	class Db{
		protected $dbh;

		public function __construct(){
			$this->dbh=new \PDO('mysql:host=127.0.0.1;dbname=oop_yt','root','');
			$this->dbh->exec("set names utf8");
		}
		public function execute($sql){
			$sth=$this->dbh->prepare($sql);
			$res=$sth->execute();
			return $res;
		}
		public function query($sql){
			$sth=$this->dbh->prepare($sql);
			$res=$sth->execute();
			if(false!==$res){
				return $sth->fetchAll();
			}
			return [];
		}
	}

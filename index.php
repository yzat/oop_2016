<?php
require __DIR__.'/autoload.php';

$db=new \App\Db();
//	$res=$db->execute('CREATE TABLE foo (id SERIAL)');
	$data=$db->query('SELECT * FROM albums');
//	echo "<pre>";
//		print_r($data);
//	echo "</pre>";
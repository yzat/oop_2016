<?php
require __DIR__.'/autoload.php';

$data= \App\Models\User::findAll();
var_dump($data);
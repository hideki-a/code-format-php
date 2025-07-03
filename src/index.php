<?php
require_once 'class.Prototype.php';

$app = new Prototype( ['id' => 'Worker'] );
$app->logging  = true;
$app->init();

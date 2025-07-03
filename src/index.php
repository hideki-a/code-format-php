<?php
require_once 'class.Prototype.php';

$app = new Prototype( ['id' => 'Worker'] );
$app->logging  = true;
$app->init();

$terms = ['status' => 4];
$entries = $app->db->model('entry')->load($terms);
foreach($entries as $entry) {
    echo $entry->title . PHP_EOL;
}

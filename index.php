<?php
$mongo = new Mongo();
$db = $mongo->selectDB(“test”);
$dbs = $mongo->listDBs();
print_r($dbs);
?>

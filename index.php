<?php
$mongo = new MongoClient();
$dbs = $mongo->listDBs();
print_r($dbs);
?>

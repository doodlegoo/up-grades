<?php
$mongo = new Mongo();
$db = $mongo->subjects;
$collection = $db->questions;

$courses = $db->courses;
$course = array(
    'nom'=>'GIS113',
    'owner' =>'Vince',
    'university'=>'Sherbrooke'
);
$course_id = $courses->insert($course);
print_r($db);
?>

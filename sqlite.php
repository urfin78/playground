<?php
$sqlite=PATH
$query="select * from data";
$db= new PDO('sqlite:$sqlite');
$result = $db->query($query);
?>
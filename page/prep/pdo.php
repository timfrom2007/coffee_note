<?php
　$dsn = "mysql:host=localhost;dbname=coffee_note";
　$db = new PDO($dsn, root, root);
　$count = $db-＞exec("INSERT INTO foo SET name = heiyeluren,gender=男,time=NOW()");
　echo $count;
　$db = null;
?>
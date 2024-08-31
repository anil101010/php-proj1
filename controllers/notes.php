<?php
require "Database.php";

$db=new Database();

$posts=$db->query("select * from posts" )->fetchAll(PDO::FETCH_ASSOC);




require "views/notes.view.php";
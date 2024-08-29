<?php
require "Database.php";

$db=new Database();
$id=$_GET["id"];
$posts=$db->query("select * from posts where id = ?" ,[$id])->fetchAll(PDO::FETCH_ASSOC);




require "views/notes.view.php";
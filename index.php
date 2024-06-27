<?php
require_once("pages/LIvres.php");
require_once("pages/author.php");
require_once("pages/user.php");




$livre = new author ("ocean",2000,"tamba","congolaise");

$user = new user("joel","eliezermasiala200@gmail.com",$livre->displayBook());

$user->displatDispo();

$status = new checkBook();

$status->getStatus();



?>
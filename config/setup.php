<?php


require_once("database.php");
$db = new PDO("mysql:host=$host", 'root', '123456');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("USE ".$dbname);

	$table = "users";
	$statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` (
		id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
		email varchar(255) NOT NULL, 
		username varchar(255) NOT NULL,
		passwd varchar(255) NOT NULL,
		token text NOT NULL,
		notifications varchar(255) NOT NULL,
		verified int DEFAULT '0' NOT NULL)";
	$table = $db->exec($statement);
	$table = "institutions";
	$columns = "id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
		`name` varchar(255) NOT NULL";
	$statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` ($columns)";
	$table = $db->exec($statement);
	$table = "courses";
	$columns = "id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`subjects` int COLLATE utf8_unicode_ci NOT NULL";
	$statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` ($columns)";
	$table = $db->exec($statement);
?>
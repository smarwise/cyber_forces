<?php
require_once "Facebook/autoload.php";
require_once "GoogleAPI/vendor/autoload.php";

if (!session_id()) {
    session_start();
}

require_once("database.php");
$db = new PDO("mysql:host=$host", 'root', '123456');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("USE ".$dbname);

	$table = "users";
	$statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` (
		id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
		username varchar(255) NOT NULL,
		name varchar(255) NOT NULL, 
		surname varchar(255) NOT NULL, 
		email varchar(255) NOT NULL, 
		password varchar(255) NOT NULL,
		token text NOT NULL,
		verified int DEFAULT '0' NOT NULL,
		fb_id bigint DEFAULT '0' NOT NULL,
		oauth int DEFAULT '0' NOT NULL,
		picture varchar(255) NOT NULL)";
	$table = $db->exec($statement);
	$table = "subjects";
	$columns = "`id` int PRIMARY KEY NOT NULL,
		`course_id` int NOT NULL,
		`name` varchar(255) NOT NULL,
		`mark` int NOT NULL";
	$statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` ($columns)";
	$table = $db->exec($statement);
	// $statement = "DROP TABLE IF EXISTS `courses`";
	// $table = $db->exec($statement);
	// $table = "courses";
	// $columns = "`id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	// `name` varchar(255)  NOT NULL,
	// `institution` varchar(255) NOT NULL,
	// `aps_score` int NOT NULL,
	// `field` varchar(255) NOT NULL";
	// $statement = "CREATE TABLE IF NOT EXISTS `$dbname`.`$table` ($columns)";
	// $table = $db->exec($statement);
	// $statement = "INSERT INTO `courses`(`id`, `name`, `institution`, `aps_score`, `field`) values 
	// ('1', 'BCom Business Administration', 'University of Johannesburg', '28', 'Business'),
	// ('2', 'BCom Business Administration', 'University of the Witwatersrand', '39', 'Business'),
	// ('3', 'BEd Degree in Foundation Phase Teaching', 'University of Johannesburg', '26', 'Education'),
	// ('4', 'Bachelor of Education in Senior Phase and Further Education and Training', 'University of the Witwatersrand', '36', 'Education')";
	// // -- (`1`, `Bachelor of Engineering`, `University of Johannesburg`, `28`),
	// // -- (`1`, `BCom Business Administration`, `University of Johannesburg`, `28`)";
	// $table = $db->exec($statement);
	// $statement = "INSERT INTO `subjects`(`id`, `course_id`, `name`, `mark`) values 
	// ('1', '1', 'Maths', '50'),
	// ('2', '1', 'English', '50'),
	// ('3', '2', 'Maths', '60'),
	// ('4', '2', 'English', '60'),
	// ('5', '3', 'English', '60'),
	// ('6', '4', 'English', '60')";
	// $table = $db->exec($statement);

	$fb = new \Facebook\Facebook([

		'app_id' => '1328595767346049',
		'app_secret' => '64a79761076fc714e4078c0d2d464d7a',
		'default_graph_version' => 'v3.2'
	]);
	
	$helper = $fb->getRedirectLoginHelper();

	if (!$_SESSION['FBRLH_state'] && $_GET['state'])
	{
		$_SESSION['FBRLH_state']=$_GET['state'];
	}

	$client = new Google_Client();
	$client->setClientId("398369088574-t3iu0ba7vbp8b9kcdg7u02o9a1dk4l1c.apps.googleusercontent.com");
	$client->setClientSecret("ehs7jGfO3LsWfTqEsHlQBXDz");
	$client->setApplicationName("EduTecHub");
	$client->setRedirectUri("http://127.0.0.1:82/cyber_forces/google_callback.php");
	$client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
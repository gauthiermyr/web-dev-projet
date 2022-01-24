<?php
$config = parse_ini_file(__DIR__ . "/config.ini");

$db = new PDO("mysql:dbname=". $config['database'] .";host=". $config['hostname'] .";charset=UTF8","". $config['username'] ."","". $config['password'] ."");

//$stmt = $db->query("SELECT * FROM utilisateurs");
//while ($row = $stmt->fetch()) {
//    echo $row['Nom'] . $row['Prenom'] ."<br />\n";
//}
//

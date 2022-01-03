<?php

require ('../db/database.php');

$stmt = $db->query("SELECT *, Nom, Prenom, Photo  FROM actualites natural join utilisateurs");
$res = $stmt->fetchAll(PDO::FETCH_OBJ);
$actu = array();
//foreach ($res as $actu){
//    $a =
//}
echo json_encode($res);
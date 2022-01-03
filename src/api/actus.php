<?php

require ('../db/database.php');

$stmt = $db->query("SELECT * FROM actualites");
$res = $stmt->fetchAll(PDO::FETCH_OBJ);
$actu = array();
foreach ($res as $actu){
    $a =
}
echo json_encode($res);
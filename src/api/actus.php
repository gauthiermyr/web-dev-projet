<?php

require ('../db/database.php');


$filter = '%';
if(isset($_GET['filter'])) $filter = '%' . $_GET['filter'] . '%';

$stmt = $db->prepare("SELECT *, Nom, Prenom, Photo  FROM actualites natural join utilisateurs where Nom like ? or Prenom like ? order by DatePublication asc");
$res = $stmt->execute([$filter, $filter]);
$res = $stmt->fetchAll(PDO::FETCH_OBJ);
$actu = array();

echo json_encode($res);
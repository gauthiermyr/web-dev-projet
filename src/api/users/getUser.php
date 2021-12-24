<?php

require('../../db/database.php');

if (isset($_GET['id'])){
    $stmt = $db->prepare("SELECT Nom, Prenom, DateDeNaissance, Email, IDTypeUtilisateur, Photo FROM utilisateurs where IDUtilisateur = ?");
    $stmt->execute(array($_GET['id']));
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    if(count($res) > 0){
        echo json_encode($res[0]);
    }
    else {
        echo json_encode(['success' => false]);
    }

}
else{
    $stmt = $db->query("SELECT Nom, Prenom, DateDeNaissance, Email, IDTypeUtilisateur, Photo FROM utilisateurs");
    $users = [];
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        array_push($users, $row);
    }

    echo json_encode($users);
}


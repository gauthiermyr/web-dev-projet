<?php

require('../../db/database.php');
//
//if (!isset($_GET['id'])){
//    echo json_encode(["success" => false]);
//}
else{
    $stmt = $db->query("SELECT * FROM utilisateurs");
    $users = [];
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        array_push($users, $row);
    }

    echo json_encode($users);
}


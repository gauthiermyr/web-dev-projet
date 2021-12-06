<?php

require('../../db/database.php');

$stmt = $db->query("SELECT * FROM utilisateurs");
$users = [];
while ($row = $stmt->fetch()) {
    array_push($users, $row);
}

echo json_encode($users);



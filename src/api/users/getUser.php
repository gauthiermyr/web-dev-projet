<?php

require('../../db/database.php');

$stmt = $db->query("SELECT * FROM utilisateurs");
while ($row = $stmt->fetch()) {
    echo $row['Nom'] . $row['Prenom'] ."<br />\n";
}



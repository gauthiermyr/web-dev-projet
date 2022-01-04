<?php

//$succes = false;

require ('../db/database.php');

if(isset($_POST['email']){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $stmt = $db->prepare("SELECT * FROM utilisateurs where Email = ?");
    $stmt->execute(array($email));
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);

    if(count($res)> 0) {
        $succes = session_start();
        $_SESSION['user'] = $res[0];
        if($succes){
            header('Location: ../../index.php');

        }
    }
}

//echo json_encode(['success' => $succes]);
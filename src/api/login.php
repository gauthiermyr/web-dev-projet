<?php

//$succes = false;

require ('../db/database.php');

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pwd = filter_var($_POST['password']);
    $hashed_pwd = hash('sha256', $pwd);
    $stmt = $db->prepare("SELECT * FROM utilisateurs where Email = ? and Password = ?");
    $stmt->execute(array($email, $pwd)); //TODO change to $hashed_pwd
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);

    if(count($res)> 0) {
        $succes = session_start();
        $_SESSION['user'] = $res[0];
    }
}
header('Location: ../../index.php');

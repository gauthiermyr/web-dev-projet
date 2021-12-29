<?php

if(isset($_SESSION['user'])){
    ////header connecté
    $user = $_SESSION['user'];
    echo $user->Nom;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/css/template.css" rel="stylesheet">
    <title>LeankDingue</title>
</head>
<body>
    <div class="navigation">
        <div id="nav-container">
            <div class="nav-element">
                <img src="./public/img/LeankDingue.png"></img>
            </div>
            <div class="nav-element nav-element-input">
                <input id="input-nav-bar" type="text" placeholder="Recherche..."></input>
                <button class="hover-translate" onclick="search()">Rechercher</button>
            </div>
            <div class="nav-element text-white">
                <span onclick="alert('Invitation')" class="clickable hover-translate">Invitation</span>
                <span onclick="alert('Chat')" class="clickable hover-translate">Chat</span>
                <span onclick="alert('Profil')" class="clickable hover-translate">Profile</span>
                <span onclick="alert('Deconnexion')" class="clickable hover-translate">Deconnexion</span>
            </div>
        </div>
    </div>
<?php
}
else{
    //header pas connecté
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/css/template.css" rel="stylesheet">
    <title>LeankDingue</title>
</head>
<body>
    <div class="navigation">
        <div id="nav-container">
            <div class="nav-element">
                <a href="./"><img src="./public/img/LeankDingue.png"></img></a>
            </div>
            <div class="nav-element nav-element-input">
                <input id="input-nav-bar" type="text" placeholder="Recherche..."></input>
                <button class="hover-translate" onclick="search()">Rechercher</button>
            </div>
            <div class="nav-element text-white">
                <a href="./login.php" class="hover-translate">Login</a>
                <a href="./register.php" class="hover-translate">Register</a>
            </div>
        </div>
    </div>
<?php
}

?>
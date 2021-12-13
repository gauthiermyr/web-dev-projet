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
            <div class="nav-element">
                <input id="input-nav-bar" type="text" placeholder="Recherche..."></input>
                <button class="hover-translate" onclick="search()">Rechercher</button>
            </div>
            <div class="nav-element text-white">
                <span onclick="alert('login')" class="clickable hover-translate">Login</span>
                <span onclick="alert('register')" class="clickable hover-translate">Register</span>
            </div>
        </div>
    </div>
    <div class="identification">
        <div class="identification-titre">
            <h2>Créer un compte</h2>
        </div>
        <div class="identification-write">
            <input class="identification-write-input" type="text" placeholder="E-mail"></input>
        </div>
        <div class="identification-write clickable">
            <input class="identification-write-input" type="text" placeholder="Mot de passe"></input>
        </div>
        <div class="identification-write clickable">
            <input class="identification-write-input" type="text" placeholder="Valider le mot de passe"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" onclick="">Créer un compte</button>
        </div>
        <div class="identification-changer clickable">
            <p><a href="login.php">Se connecter</a></p>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
</body>
</html>
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
                
            </div>
        </div>
    </div>
    <div class="identification">
        <div class="identification-titre">
            <h2>Connexion</h2>
        </div>
        <div class="identification-write">
            <input id="email-input" class="identification-write-input" type="text" placeholder="E-mail"></input>
        </div>
        <div class="identification-write clickable">
            <input id="password-input" class="identification-write-input" type="text" placeholder="Mot de passe"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" onclick="login()">Se connecter</button>
        </div>
        <div class="identification-changer clickable">
            <p><a href="register.php">Créer un compte</a></p>
            <p><a href="forgot-mdp.php">Mot de passe oublié</a></p>
        </div>
    </div>
    <script src="./public/js/login.js"></script>
</body>
</html>
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

    <div class="container-Profil">
        <div id="nav-blockhaut">
        <div id="nav-photo">
        <div id="nav-Nom-Prenom"> Prénom Nom </div>
        <div id="nav-Poste"> Poste </div>
        <div id="nav-Ville"> Ville </div>
        <div id="nav-Description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ... </div>
        <div id="nav-CV"> Votre CV : </div>
        <div id="nav-container-CV-Fichier"> </div>
        <div id="nav-Nom-Fichier-CV"> Nom Fichier </div>
        <div id="nav-CV-Actuel"> CV actuel (télécharger pour visualiser) </div>
        <div id="nav-container-CV-Import"></div>
        <div id="nav-import"> Importer un nouveau CV </div>
        <div id="nav-chat-acces"> Accéder au chat </div>
        <div id="nav-Bas-de-Page">  </div>

    </div>

    <script src="./public/js/navigation.js"></script>
</body>
</html>
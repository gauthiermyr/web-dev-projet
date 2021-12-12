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

    <div class="container">
        <div id="post-creation-container">
            Nouveau post
        </div>
        <div id="post-feed">
            <div class="post-container">
                <div class="post-navigation">
                    <div>01/12/2021 14h16</div>
                    <div>
                        <img src="./public/img/profil.png"></img>
                        <h4>Alpha 7</h4>
                        <h5>Full Stack</h5>
                    </div>
                </div>
                <div class="post-body">
                    <p>Fichier data csv !</p>
                </div>
                <div class="post-footer">

                </div>
            </div>
        </div>
    </div>

    <script src="./public/js/main.js"></script>
</body>
</html>
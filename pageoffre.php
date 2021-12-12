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
                <span onclick="alert('Invitation')" class="clickable hover-translate">Invitation</span>
                <span onclick="alert('Chat')" class="clickable hover-translate">Chat</span>
                <span onclick="alert('Profil')" class="clickable hover-translate">Profile</span>
                <span onclick="alert('Deconnexion')" class="clickable hover-translate">Deconnexion</span>
            </div>
        </div>
    </div>

    <div class="container-offre">
        <div id="post-offre-container">
            Voici les offres d'emploi:
        </div>
            <div class="post-offre">
                <div>
                    <img src="./public/img/profil.png"></img>
                    <h4>Capgemini</h4>
                    <h5>entreprise alpha</h5>
                </div>
            </div>
            <div class="offre">
                <input type="file" name="upload" id="upload-offre" accept="application/pdf" />
                <div class="offre-postuler">
                    <span onclick="alert('valider')" class="clickable-valider1">Apply</span>
                    <p id="offre-pdf">offre.pdf</p>
                    <p id="pdffile">pdf file</p>
                </div>

                <span onclick="alert('valider')" class="clickable-valider2">Apply</span>
            </div>
        </div>
        <div>
            <p id="titre-offre1">Google, entreprise alpha</p>
            <p id="contenu-offre1">offre pour stagière: blablabla</p>
        </div>
    </div>

    <script src="./public/js/main.js"></script>
</body>
</html>
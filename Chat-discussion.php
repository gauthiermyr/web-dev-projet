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

    <div class="container-Chat">
        <div id="nav-connaissance">Rechercher connaissance </div>
        <div id="nav-dicussion">Discussion </div>
        <div id="nav-container-Chat-Whole">
            <div id="nav-container-Chat"> </div>
            <div id="nav-chat-mot">Chat </div>
            <div id="nav-block-contacts1">
                <div id="nav-Nom-Prenom1"> Prénom Nom </div>
                <div id="nav-ligne-block1"> Première ligne du dernier message envoyé ... </div>
                <div id="nav-trait-separateur1"> </div>
            </div>
            <div id="nav-block-contacts2">
                <div id="nav-Nom-Prenom2"> Prénom Nom </div>
                <div id="nav-ligne-block2"> Première ligne du dernier message envoyé ... </div>
                <div id="nav-trait-separateur2"> </div>
            </div>
            <div id="nav-block-contacts3">
                <div id="nav-Nom-Prenom3"> Prénom Nom </div>
                <div id="nav-ligne-block3"> Première ligne du dernier message envoyé ... </div>
                <div id="nav-trait-separateur3"> </div>
            </div>
            <div id="nav-block-contacts4">
                <div id="nav-Nom-Prenom4"> Prénom Nom </div>
                <div id="nav-ligne-block4"> Première ligne du dernier message envoyé ... </div>
                <div id="nav-trait-separateur4"> </div>
            </div>
        </div>
        
        <img src="./public/img/profil.png" id="image"></img>
        <div class="post-navigation-profile2">
                <div id="Alpha7">Alpha 7</div>
                <div id="FullStack">Full Stack</div> 
            </div>

        <div id="nav-block-message">
            <div id="nav-message-recu"> Salut comment vas-tu ? </div>
        </div>

        <div id="nav-votre-message"> Votre Message : </div>
        <!-- <div class="nav-element">
                <input id="input-nav-bar2" type="text" placeholder="Message..."></input>
                <button id="pos" onclick="search()">Envoyer</button>
        </div> -->
        <input id="input-nav-bar2" type="text" placeholder="Message..."></input>
        <button id="pos" onclick="search()">Envoyer</button>


        <div id="nav-Bas-de-Page">  
            
        </div>

        <!-- <div id="nav-container-Chat"> </div>
        <div id="nav-chat-mot">Chat </div>
        <div id="nav-block-contacts1">
            <div id="nav-Nom-Prenom1"> Prénom Nom </div>
            <div id="nav-ligne-block1"> Première ligne du dernier message envoyé ... </div>
            <div id="nav-trait-separateur1"> </div>
        </div>
        <div id="nav-block-contacts2">
            <div id="nav-Nom-Prenom2"> Prénom Nom </div>
            <div id="nav-ligne-block2"> Première ligne du dernier message envoyé ... </div>
            <div id="nav-trait-separateur2"> </div>
        </div>
        <div id="nav-block-contacts3">
            <div id="nav-Nom-Prenom3"> Prénom Nom </div>
            <div id="nav-ligne-block3"> Première ligne du dernier message envoyé ... </div>
            <div id="nav-trait-separateur3"> </div>
        </div>
        <div id="nav-block-contacts4">
            <div id="nav-Nom-Prenom4"> Prénom Nom </div>
            <div id="nav-ligne-block4"> Première ligne du dernier message envoyé ... </div>
            <div id="nav-trait-separateur4"> </div>
        </div> -->

    </div>

    <script src="./public/js/navigation.js"></script>
</body>
</html>
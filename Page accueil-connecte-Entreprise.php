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
        <div id="nav-Nom-Prenom"> Entreprise </div>
        <div id="nav-Poste"> Domaine </div>
        <div id="nav-Ville"> Ville </div>
        <div id="nav-Description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ... </div>
        
        <div id="Block-messsage-liste"></div>
        <div id="Block-liste">Liste des employés connectés :</div>

        
        <div id="Block-colaborateur">
            <div id="nav-collab-mot">COLLABORATEURS : </div>
            <div id="nav-view-all">VIEW ALL</div>
            <div id="nav-trait-collabseparateur1"> </div>
            <div id="nav-block-collab1">
                <img src="./public/img/image.jpg"></img>
                <div id="nav-Nom-collab1"> Prénom Nom </div>
                <div id="Metier1">Full Stack</div> 
            </div>
            <div id="nav-block-collab2">
                <img src="./public/img/image.jpg"></img>
                <div id="nav-Nom-collab2"> Prénom Nom </div>
                <div id="Metier2">Full Stack</div> 
            </div>
            <div id="nav-block-collab3">
                <img src="./public/img/image.jpg"></img>
                <div id="nav-Nom-collab3"> Prénom Nom </div>
                <div id="Metier3">Full Stack</div> 
            </div>
            <div id="nav-block-collab4">
                <img src="./public/img/image.jpg"></img>
                <div id="nav-Nom-collab4"> Prénom Nom </div>
                <div id="Metier4">Full Stack</div> 
            </div>
        </div>


        <div id="Block-Offres"></div>
        <div id="Block-emploi-nom">Offres d'emploi</div>


        
        <div id="Block-Offres">
            <div id="nav-trait-separateurOffres1"> </div>
            <div id="nav-block-Offres1">
                <div id="nav-Offres1"> Prénom Nom </div>
                <div id="nav-ligne-blockOffres1"></div>
                <img src="./public/img/LeankDingue.png"></img>
                <div id="nav-trait-separateurOffres1"> </div>
            </div>
            <div id="nav-block-Offres2">
                <div id="nav-Offres2"> Prénom Nom </div>
                <div id="nav-ligne-blockOffres2"> </div>
                <img src="./public/img/LeankDingue.png"></img>
                <div id="nav-trait-separateurOffres2"> </div>
            </div>
            <div id="nav-block-Offres3">
                <div id="nav-Offres3"> Prénom Nom </div>
                <div id="nav-ligne-blockOffres3"></div>
                <img src="./public/img/LeankDingue.png"></img>
                <div id="nav-trait-separateurOffres3"> </div>
            </div>
            <div id="nav-block-Offres4">
                <div id="nav-Offres4"> Prénom Nom </div>
                <div id="nav-ligne-blockOffres4"></div>
                <img src="./public/img/LeankDingue.png"></img>
                <div id="nav-trait-separateurOffres4"> </div>
            </div>
        </div>

        <button id="pos" onclick="search()">Soummettre Offre</button>
        
        
        
        
        
        
       

        <div id="nav-Bas-de-Page">  </div>

    </div>

    <script src="./public/js/main.js"></script>
</body>
</html>
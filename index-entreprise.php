<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/css/template.css" rel="stylesheet">
    <link href="./public/css/templateAccueilEntreprise.css" rel="stylesheet">
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
    <div id="nav-blockhaut"></div>
    <div id="nav-photo"></div>
    <div id="nav-Nom-Prenom"> Entreprise </div>
    <div id="nav-Poste"> Domaine </div>
    <div id="nav-Ville"> Ville </div>
    <div id="nav-Description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ... </div>
    
    <div class="container-Entreprise">
        
        <div id="nav-Block-messsage-liste"></div>
        <div id="nav-Block-liste">Liste des employés connectés :</div>
        <div id="nav-collab-mot">COLLABORATEURS : </div>
        <div id="nav-view-all">VIEW ALL</div>
        
        
        <div id="nav-block-collab1">
            <img src="./public/img/profil.png" id="image1"></img>
            <div id="nav-Nom-collab1">Darlene Black</div>
            <div id="Metier1">HR-manager</div> 
        </div>
        <div id="nav-block-collab2">
            <img src="./public/img/profil.png" id="image1"></img>
            <div id="nav-Nom-collab1">Theresa Steward</div>
            <div id="Metier1">iOS developer</div> 
        </div>
        <div id="nav-block-collab3">
            <img src="./public/img/profil.png" id="image1"></img>
            <div id="nav-Nom-collab1">Brandon Wilson</div>
            <div id="Metier1"> Senior UX designer</div> 
        </div>


        <div id="Block-Offres"></div>
        <div id="Block-emploi-nom">Offres d'emploi :</div>


        <div id="nav-Offres1">Offre D'Emploi: Développeur Web Saragosse, Aragon, Espagne Temps plein</div>
        <button id="pos1" onclick="search()">Voir Postulant</button>
        <div id="nav-ligne-blockOffres1"></div>

        <div id="nav-Offres2">Offre D'Emploi: Agent Immobilier Paris, Île de France, France Temps plein</div>
        <button id="pos2" onclick="search()">Voir Postulant</button>
        <div id="nav-ligne-blockOffres2"></div>

        <div id="nav-Offres3">Offre D'Emploi: Développeur Blockchain Barcelone, Cataluna, Espagne Temps plein</div>
        <button id="pos3" onclick="search()">Voir Postulant</button>
        <div id="nav-ligne-blockOffres3"></div>
        
        
        
        <button id="posS" onclick="search()">Soummettre Offre</button>
        
        
        
        
        
       

        <div id="nav-Bas-de-Page">  </div>

    </div>

    <script src="./public/js/navigation.js"></script>
</body>
</html>
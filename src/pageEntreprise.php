<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/template.css" rel="stylesheet">
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
<!--
    <div class="container">
        <div id="post-creation-container">
            <h2>Nouveau post ?</h2>
            <div class="post-creation-box">
                <textarea id="post-creation-textarea" placeholder="Quelque chose à dire ..."></textarea>
                <button>Publier</button>
            </div>
        </div>
        <div id="post-feed">
            <div class="post-container">
                <div class="post-navigation">
                    <div class="post-navigation-date">
                        <p>01/12/2021 14h16</p>
                    </div>
                    <div class="post-navigation-profile">
                        <img src="./public/img/profil.png"></img>
                        <div class="post-navigation-profile-info">
                            <h4>Alpha 7</h4>
                            <h5>Full Stack</h5>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <p>Fichier data csv !</p>
                </div>
                <div class="post-footer">
                    <div>
                        <span>189 pouces</span>
                        <span>17 commentaires</span>
                    </div>
                    <span>share</span>
                </div>
            </div>
        </div>
    </div>
-->

<div class="Info-Entreprise">
    <div id="post-entreprise">
        <p> <span class ="NomEntreprise"> Nom </span> <input class="ClasseNomOffre" type="text" placeholder="Votre Nom">
            </p>
        <p> <span class ="VilleEntreprise"> Ville </span> <input class="ClasseVilleOffre" type="text" placeholder="Votre Nom">
            </p>
            <p> <a href="mettre lien ici"><span class ="nav-Save-post"> </span>Sauvegarder les modifications</a> ?<br /></p>
            <p> <span class ="DescrEntreprise">  </span> <input class="OffreDesciption" type="text" placeholder="Description de l'entreprise">
            </p>
        <div id='Offre_Entreprise'>
        
        <div id="Votre_Offre"> Votre Offre : </div>
        <div id="Offre-Actuel"> Offre d’emploi(télécharger pour visualiser)</div>
        <div id="cadre_offre"> 
            <div id="nav-Import-offer"> 
            <p> <span class= "Offer-add"> Importer une nouvelle offre<p>
                <p>Déposez les fichiers ici ou cliquez sur ce bouton : <p>
                <div id="Televerser"> <input type="file" name="upload" id="Upload-Offre-Entreprise" accept="application/pdf" /> </div>  
                <p>Vous pouvez téléverser des fichiers jusqu'à un maximum de 2 Go.<p>         
        </div>
        <div id = "Description_Offre">
            <p>Desciption de l'offre: <p>  
            <p> <input class="In_Offre_Desciption" type="text" placeholder="Description de l'offre">
            </p> 
            <div id="CadreSubmitPost"> <button id ="Poster_Offre"> Publier Offre<button>
            </div>
        </div>
       
    <script src="./public/js/main.js"></script>
<?php
        include('src/dynamic/footer.php');
?>

</body>
</html>

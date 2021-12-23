<?php
        include('src/dynamic/header.php');
?>


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
        <div id="Offre-Actuel"> Offre d’emploi ( Télécharger pour visualiser )</div>
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

<?php
        include('src/dynamic/header.php');
?>

    <div class="container">
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

<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/navigation.js"></script>
</body>
</html>
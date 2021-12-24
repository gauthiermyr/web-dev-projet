<?php
        include('src/dynamic/header.php');
?>

    <div class="invitations-profil">
        <img src="./public/img/profil.png"></img>
        <h6><a class="clickable">NOM Prénom</a></h6> <!-- Lien qui renvoi vers le profil du mec -->
        <h5>Titre</h5>
    </div>
    <div class="invitations-notifs">
        <h2>Liste des invitations :</h2>
        <p class="invitations-notifs-titre">------- x demandes en attentes -------</p>
        <div class="invitations-attente">
            <div class="invitations-attente-liste"> <!-- Multiplier cette div par le nombre de demandes -->
                <div class="invitations-attente-profil">
                    <img src="./public/img/profil.png"></img>
                    <div class="invitations-attente-profil-detail">
                        <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                        <h5>Titre</h5>
                        <h6>X Connexions</h6>
                    </div>
                </div>
                <div class="invitations-attente-message">
                    <p>Message demande d'amis.</p>
                </div>
                <div class="invitations-attente-choix">
                    <button class="invitations-attente-accepter clickable">Accepter</button>
                    <button class="invitations-attente-refuser clickable">Refuser</button>
                </div>
            </div>
            <div class="invitations-attente-liste"> <!-- Multiplier cette div par le nombre de demandes -->
                <div class="invitations-attente-profil">
                    <img src="./public/img/profil.png"></img>
                    <div class="invitations-attente-profil-detail">
                        <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                        <h5>Titre</h5>
                        <h6>X Connexions</h6>
                    </div>
                </div>
                <div class="invitations-attente-message">
                    <p>Message demande d'amis.</p>
                </div>
                <div class="invitations-attente-choix">
                    <button class="invitations-attente-accepter clickable">Accepter</button>
                    <button class="invitations-attente-refuser clickable">Refuser</button>
                </div>
            </div>
        </div>
        <p class="invitations-notifs-titre">------- Connexions récentes -------</p> <!-- Mettre les 4 dernières connexions -->
        <div class="invitations-recent">
            <div class="invitations-recent-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
            </div>
            <div class="invitations-recent-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
            </div>
            <div class="invitations-recent-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
            </div>
            <div class="invitations-recent-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
            </div>
        </div>
        <p class="invitations-notifs-titre">------- Nouveaux contacts potentiels -------</p>
        <div class="invitations-nouveau">
            <div class="invitations-nouveau-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
                <h6>X Connexions</h6>
                <button class="invitations-nouveau-connecter clickable">Se connecter</button>
            </div>
            <div class="invitations-nouveau-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
                <h6>X Connexions</h6>
                <button class="invitations-nouveau-connecter clickable">Se connecter</button>
            </div>
            <div class="invitations-nouveau-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
                <h6>X Connexions</h6>
                <button class="invitations-nouveau-connecter clickable">Se connecter</button>
            </div>
            <div class="invitations-nouveau-profil">
                <img src="./public/img/profil.png"></img>
                <a class="clickable">NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->
                <h5>Titre</h5>
                <h6>X Connexions</h6>
                <button class="invitations-nouveau-connecter clickable">Se connecter</button>
            </div>
        </div>
    </div>

    <?php
        include('src/dynamic/footer.php');
    ?>

    <script src="./public/js/main.js"></script>
</body>
</html>
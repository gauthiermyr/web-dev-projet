<?php
        include('src/dynamic/header.php');
?>
    <div class="identification">
        <div class="identification-titre">
            <h2>Créer un compte</h2>
        </div>
        <div class="identification-write">
            <input id="email-input" class="identification-write-input" type="text" placeholder="E-mail"></input>
        </div>
        <div class="identification-write clickable">
            <input id="password-input" class="identification-write-input" type="text" placeholder="Mot de passe"></input>
        </div>
        <div class="identification-write clickable">
            <input id="conf-password-input" class="identification-write-input" type="text" placeholder="Valider le mot de passe"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" onclick="register()">Créer un compte</button>
        </div>
        <div class="identification-changer clickable">
            <p><a href="./login.php">Se connecter</a></p>
        </div>
    </div>
    <script src="./public/js/navigation.js"></script>

    <?php
        include('src/dynamic/footer.php');
    ?>

    <script src="./public/js/register.js"></script>
    <script src="./public/js/navigation.js"></script>
</body>
</html>
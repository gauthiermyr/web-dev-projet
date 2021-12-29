<?php
        include('src/dynamic/header.php');
?>
    <div class="identification">
        <div class="identification-titre">
            <h2>Connexion</h2>
        </div>
        <div class="identification-write">
            <input class="identification-write-input" type="text" placeholder="E-mail"></input>
        </div>
        <div class="identification-write clickable">
            <input class="identification-write-input" type="text" placeholder="Mot de passe"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" onclick="">Se connecter</button>
        </div>
        <div class="identification-changer clickable">
            <p><a href="register.php">Créer un compte</a></p>
            <p><a href="forgot-mdp.php">Mot de passe oublié</a></p>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
<?php
    include('src/dynamic/footer.php');
?>

<script src="./public/js/main.js"></script>
</body>
</html>
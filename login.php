<?php
        include('src/dynamic/header.php');
?>
    <div class="identification">
        <div class="identification-titre">
            <h2>Connexion</h2>
        </div>
        <form method="post" action="./src/api/login.php">
            <div class="identification-write">
                <input name="email" id="email-input" class="identification-write-input" type="text" placeholder="E-mail"></input>
            </div>
            <div class="identification-write clickable">
                <input name="password" id="password-input" class="identification-write-input" type="password" placeholder="Mot de passe"></input>
            </div>
            <div class="identification-valider">
                <input type="submit" class="identification-valider-button clickable" onclick="">Se connecter</input>
            </div>
        </form>
        <div class="identification-changer clickable">
            <p><a href="./register.php">Créer un compte</a></p>
            <p><a href="./forgot-mdp.php">Mot de passe oublié</a></p>
        </div>
    </div>
    <script src="./public/js/navigation.js"></script>
<?php
    include('src/dynamic/footer.php');
?>

<script src="./public/js/navigation.js"></script>
<script src="./public/js/login.js"></script>
</body>
</html>
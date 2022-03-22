<?php
include('src/dynamic/header.php');
require ('./src/db/database.php');


if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['prenom'])){
    $email = $_POST['email'];
    $pwd = $_POST['password']; //TODO hash $pwd
    $prenom = $_POST['prenom'];
    $nom = $_POST['name'];

    $date = date("Y-m-d");
    $stmt = $db->prepare( "INSERT INTO utilisateurs VALUES (?,?,?,?,?,?,?,NULL,0600000000,1,NULL)");
    $res = $stmt->execute(array(rand(0,9999999),$nom, $prenom,$date,$nom.$prenom,$pwd,$email));
    header('Location: ./login.php');
}
?>
    <form class="identification" method="post" action="./register.php">
        <div class="identification-titre">
            <h2>Créer un compte</h2>
        </div>
        <div class="identification-write">
            <input name="email" id="email-input" class="identification-write-input" type="text" placeholder="E-mail"></input>
        </div>
        <div class="identification-write clickable">
            <input type="password" name="password" id="password-input" class="identification-write-input" type="text" placeholder="Mot de passe"></input>
        </div>
        <div class="identification-write clickable">
            <input name="name" id="conf-password-input" class="identification-write-input" type="text" placeholder="Nom"></input>
        </div>
        <div class="identification-write clickable">
            <input name="prenom" id="conf-password-input" class="identification-write-input" type="text" placeholder="Prénom"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" >Créer un compte</button>
        </div>
        <div class="identification-changer clickable">
            <p><a href="./login.php">Se connecter</a></p>
        </div>
    </form>
    <script src="./public/js/navigation.js"></script>

    <?php
        include('src/dynamic/footer.php');
    ?>

    <script src="./public/js/register.js"></script>
    <script src="./public/js/navigation.js"></script>
</body>
</html>
<?php
    if (isset($_GET["section"])) {
        $section=$_GET["section"];
    } else{
        $section=0;
    }
?>

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
    <div class="identification">
        <div class="identification-titre">
            <h2>Mot de passe oublié</h2>
            <p>Insérez votre e-mail pour recevoir un nouveau mot de passe.</p>
        </div>
<?php /* 
        <div class="identification-write">
            <input class="identification-write-input" type="text" placeholder="E-mail" name="mail"></input>
        </div>
        <div class="identification-valider">
            <button class="identification-valider-button clickable" name="oublie" onclick="">Changer mon mot de passe</button>
        </div>
*/    ?>
        <?php if(isset($_GET["section"]) && $section == 'code') { ?>
        Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?>
        <br/>
            <form method="post">
                <input class="identification-write-input" type="text" placeholder="Code de vérification" name="verif_code"/><br/>
                <input class="identification-valider-button clickable" type="submit" value="Valider" name="verif_submit"/>
            </form>
        <?php } elseif(isset($_GET["section"]) && $section == "changemdp") { ?>
        Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?>
            <form method="post">
                <input class="identification-write-input" type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
                <input class="identification-write-input" type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
                <input class="identification-valider-button clickable" type="submit" value="Valider" name="change_submit"/>
            </form>
        <?php } else { ?>
            <form method="post">
                <input class="identification-write-input" type="text" placeholder="E-mail" name="recup_mail"/><br/>
                <input class="identification-valider-button clickable" type="submit" value="Changer mon mot de passe" name="recup_submit"/>
            </form>
        <?php } ?>
        <?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } else { echo ""; } ?>


        <div class="identification-changer clickable">
            <p><a href="login.php">Se connecter</a></p>
        </div>
    </div>
    <script src="./public/js/navigation.js"></script>
</body>
</html>
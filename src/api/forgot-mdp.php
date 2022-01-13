<?php

//$succes = false;

require ('../db/database.php');

if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
    if(!empty($_POST['recup_mail'])) {
        $recup_mail = htmlspecialchars($_POST['recup_mail']);
        if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
            //echo($recup_mail); ok
            $mailexist = $db->prepare("SELECT User FROM utilisateurs WHERE Email = ?");
            $mailexist->execute(array($recup_mail));
            $mailexist_count = $mailexist->rowCount();
            if($mailexist_count == 1) {
                $User = $mailexist->fetch();
                $User = $User['User'];
                $_SESSION['recup_mail'] = $recup_mail;
                $recup_code = "";
                for($i=0; $i < 8; $i++) {
                $recup_code .= mt_rand(0,9);
                }
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"[VOUS]"<votremail@mail.com>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $message = '
            <html>
            <head>
            <title>Récupération de mot de passe - Leankdingue</title>
            <meta charset="utf-8" />
            </head>
            <body>
            <font color="#303030";>
                <div align="center">
                <table width="600px">
                    <tr>
                    <td>
                        
                        <div align="center">Bonjour <b>'.$User.'</b>,</div>
                        Voici votre code de récupération: <b>'.$recup_code.'</b>
                        A bientôt sur <a href="#">Votre site</a> !
                        
                    </td>
                    </tr>
                    <tr>
                    <td align="center">
                        <font size="2">
                        Ceci est un email automatique, merci de ne pas y répondre
                        </font>
                    </td>
                    </tr>
                </table>
                </div>
            </font>
            </body>
            </html>
            ';
            mail($recup_mail, "Récupération de mot de passe - Votresite", $message, $header);
                header("Location:./forgot-mdp.php?section=code");
            } else {
                $error = "Cette adresse mail n'est pas enregistrée";
                echo($error);
            }
        } else {
            $error = "Adresse mail invalide";
            echo($error);
        }
    } else {
        $error = "Veuillez entrer votre adresse mail";
        echo($error);
    }
}
if(isset($_POST['verif_submit'],$_POST['verif_code'])) {
if(!empty($_POST['verif_code'])) {
    $verif_code = htmlspecialchars($_POST['verif_code']);
    if($verif_req == $recup_code) {
        $up_req = $db->prepare('SELECT id,User FROM utilisateurs WHERE Email = ?');
        $up_req->execute(array($_SESSION['recup_mail']));
        header('Location:./forgot-mdp.php?section=changemdp');
    } else {
        $error = "Code invalide";
    }
} else {
    $error = "Veuillez entrer votre code de confirmation";
}
}
if(isset($_POST['change_submit'])) {
if(isset($_POST['change_mdp'],$_POST['change_mdpc'])) {
    $verif_confirme = $db->prepare('SELECT confirme FROM recuperation WHERE mail = ?');
    $verif_confirme->execute(array($_SESSION['recup_mail']));
    $verif_confirme = $verif_confirme->fetch();
    $verif_confirme = $verif_confirme['confirme'];
    if($verif_confirme == 1) {
        $mdp = htmlspecialchars($_POST['change_mdp']);
        $mdpc = htmlspecialchars($_POST['change_mdpc']);
        if(!empty($mdp) AND !empty($mdpc)) {
            if($mdp == $mdpc) {
            $mdp = sha1($mdp);
            $ins_mdp = $db->prepare('UPDATE membres SET motdepasse = ? WHERE mail = ?');
            $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
            header('Location:./login.php');
            } else {
            $error = "Vos mots de passes ne correspondent pas";
            }
        } else {
            $error = "Veuillez remplir tous les champs";
        }
    } else {
        $error = "Veuillez valider votre mail grâce au code de vérification qui vous a été envoyé par mail";
    }
} else {
    $error = "Veuillez remplir tous les champs";
}
}
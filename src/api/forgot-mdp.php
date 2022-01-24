<?php

use PHPMailer\PHPMailer\PHPMailer;

//$succes = false;
session_start();

require (__DIR__ . "/../db/database.php");
$usernamemail = $config['usernamemail'];
$passwordmail = $config['passwordmail'];

if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
    if(!empty($_POST['recup_mail'])) {
        $recup_mail = htmlspecialchars($_POST['recup_mail']);
        if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
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
                require_once "../../PHPMailer/PHPMailer.php";
                require_once "../../PHPMailer/SMTP.php";
                require_once "../../PHPMailer/Exception.php";
                $header='recuperation mot de passe sur Leankdingue';
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
                            A bientôt sur <a href="#">Leankdingue</a> !
                            
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
                $mail = new PHPMailer();
                //smtp settings
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = $usernamemail;
                $mail->Password = $passwordmail;
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";

                //email settings
                $mail->isHTML(true);
                $mail->setFrom("leankdingue@gmail.com", $User);
                $mail->addAddress($recup_mail);
                $mail->Subject = ($header);
                $mail->Body = $message;
                $mail->send();
                /* if($mail->send()){
                    $status = "success";
                    $response = "Email is sent!";
                }
                else
                {
                    $status = "failed";
                    $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                }

                exit(json_encode(array("status" => $status, "response" => $response))); */
                
                $mail_recup_exist = $db->prepare('SELECT id FROM recuperation WHERE mail = ?');
                $mail_recup_exist->execute(array($recup_mail));
                $mail_recup_exist = $mail_recup_exist->rowCount();
                if($mail_recup_exist == 1) {
                    $recup_insert = $db->prepare('UPDATE recuperation SET code = ? WHERE mail = ?');
                    $recup_insert->execute(array($recup_code,$recup_mail));
                    header("Location:../../forgot-mdp.php?section=code");
                    } 
                else {
                    $recup_insert = $db->prepare('INSERT INTO recuperation(mail,code) VALUES (?, ?)');
                    $recup_insert->execute(array($recup_mail,$recup_code));
                    header("Location:../../forgot-mdp.php?section=code");
                    }
            } else {
                $error = "Cette adresse mail n'est pas enregistrée";
                echo($error);
            }
        } else {
            $error = "Adresse mail invalide";
            echo($error);
        }
    }};

if(isset($_POST['verif_submit'],$_POST['verif_code'])) {
    if(!empty($_POST['verif_code'])) {
        $verif_code = htmlspecialchars($_POST['verif_code']);
        $verif_req = $db->prepare('SELECT id FROM recuperation WHERE mail = ? AND code = ?');
        $verif_req->execute(array($_SESSION['recup_mail'],$verif_code));
        $verif_req = $verif_req->rowCount();
        if($verif_req == 1) {
            $up_req = $db->prepare('UPDATE recuperation SET confirmer = 1 WHERE mail = ?');
            $up_req->execute(array($_SESSION['recup_mail']));
            header("Location:../../forgot-mdp.php?section=changemdp");
            } else {
                $error = "Code invalide";
            }
    } else {
        $error = "Veuillez entrer votre code de confirmation";
    }
};


if(isset($_POST['change_submit'],$_POST['change_mdpc'])) {
    $verif_confirme = $db->prepare('SELECT confirmer FROM recuperation WHERE mail = ?');
    $verif_confirme->execute(array($_SESSION['recup_mail']));
    $verif_confirme = $verif_confirme->fetch();
    $verif_confirme = $verif_confirme['confirmer'];
    if($verif_confirme == 1) {
        $mdp = htmlspecialchars($_POST['change_mdp']);
        $mdpc = htmlspecialchars($_POST['change_mdpc']);
        if(!empty($mdp) AND !empty($mdpc)) {
            if($mdp == $mdpc) {
            $ins_mdp = $db->prepare('UPDATE utilisateurs SET Password = ? WHERE Email = ?');
            $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
            $del_req = $db->prepare('DELETE FROM recuperation WHERE mail = ?');
            $del_req->execute(array($_SESSION['recup_mail']));
            header('Location:../../login.php');
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
};

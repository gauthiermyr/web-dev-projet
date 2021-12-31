<?php
        include('src/dynamic/header.php');
?>

<?php

include('src/db/database.php');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$donne1 = $db->prepare("
                  SELECT *
                  FROM offresdemploie
                  INNER JOIN entreprise ON offresdemploie.IDEntreprise = entreprise.IDEntreprise
                  WHERE IDOffre=1404355998
                ");
$donne1-> execute();
$result1 = $donne1->fetchAll(PDO::FETCH_ASSOC);

$donne2 = $db->prepare("
                  SELECT *
                  FROM offresdemploie
                  INNER JOIN entreprise ON offresdemploie.IDEntreprise = entreprise.IDEntreprise
                  WHERE IDOffre=2
                ");
$donne2-> execute();
$result2 = $donne2->fetchAll(PDO::FETCH_ASSOC);


?>
<?php              
foreach ($result1 as $a) {
?>

<section class="fdb-block" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12-1">
                <div class="col-12-2">
                    <h1><?php echo $a['titre']; ?></h1>
                    <p class="lead"><?php echo $a['commentaire']; ?></p>
                    <p class="lead">salaire:<?php echo $a['Salaire']; ?></p>
                </div>
                <p><img class="img-fluid" src="<?php echo $a['Logo']; ?>"></p>
            </div>
        </div>
        <div class="postuler">
            <input type="file" name="upload" id="upload-offre" accept="application/pdf" />
            <span onclick="alert('valider')" class="upload-offre">Apply</span>
        </div>
    </div>
    
</section>

<?php
}
?>

<?php              
foreach ($result2 as $b) {
?>

<section class="fdb-block" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12-1">
                <div class="col-12-2">
                    <h1><?php echo $b['titre']; ?></h1>
                    <p class="lead"><?php echo $b['commentaire']; ?></p>
                    <p class="lead">salaire:<?php echo $b['Salaire']; ?></p>
                </div>
                <p><img class="img-fluid" src="<?php echo $b['Logo']; ?>"></p>
            </div>
        </div>
        <div class="postuler">
            <input type="file" name="upload" id="upload-offre" accept="application/pdf" />
            <span onclick="alert('valider')" class="upload-offre">Apply</span>
        </div>
    </div>
    
</section>

<?php
}
?>

<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/main.js"></script>
</body>
</html>
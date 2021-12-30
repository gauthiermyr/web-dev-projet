<?php
        include('src/dynamic/header.php');
?>

<?php

/*
$Host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "siteweb";


//create connection
$connection = mysqli_connect($Host, $user, $pass, $db_name);


$hostname="localhost";
$username="root";
$password="";
$database="siteweb";
$db = new PDO("mysql:dbname=". $database .";host=". $hostname .";charset=UTF8","". $username ."","". $password ."");
*/

require('src/db/database.php');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $db->prepare("
                  SELECT *
                  FROM offresdemploie
                  INNER JOIN entreprise ON offresdemploie.IDEntreprise = entreprise.IDEntreprise
                  WHERE IDOffre=1404355998
                ");
$sth-> execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
/*
//get results from database
$result1 = mysqli_query($connection,"SELECT * FROM offresdemploie,entreprise WHERE entreprise.IDEntreprise = offresdemploie.IDEntreprise AND offresdemploie.IDOffre=1404355998");
$result2 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=2");
$result3 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=3");
$result4 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=4");
$result5 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=5");
$result6 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=6");

$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_Push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";

foreach ($result as $result) {
    ?>
        <h4>nom de l'entreprise:<?php echo $result['titre']; ?></h4>
        <h5>description:<?php echo $result['commentaire']; ?></h5>
        <h6>salaire:<?php echo $result['Salaire']; ?></h6>
    <?php
    }
?>
<?php                   
foreach ($result as $result) {
?>
    <img src="./public/img/profil.png"></img>
    <h4 id="titre-offre1"><?php echo $result['titre']; ?></h4>
    <h5>entreprise alpha</h5>
    <p>description:<?php echo $result['commentaire']; ?></p>
    <p id="contenu-offre1">salaire:<?php echo $result['Salaire']; ?></p>
    <input type="file" name="upload" id="upload-offre" accept="application/pdf" />
    <span onclick="alert('valider')" class="clickable-valider1">Apply</span>
<?php
}
*/
?>
<?php              
foreach ($result as $result) {
?>

<section class="fdb-block" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12-1">
                <div class="col-12-2">
                    <h1><?php echo $result['titre']; ?></h1>
                    <p class="lead"><?php echo $result['commentaire']; ?></p>
                    <p class="lead">salaire:<?php echo $result['Salaire']; ?></p>
                </div>
                <p><img class="img-fluid" src="<?php echo $result['Logo']; ?>"></p>
            </div>
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
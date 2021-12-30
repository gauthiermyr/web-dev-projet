<?php
        include('src/dynamic/header.php');
?>

<?php
$Host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "siteweb";


//create connection
$connection = mysqli_connect($Host, $user, $pass, $db_name);

//get results from database
$result1 = mysqli_query($connection,"SELECT * FROM offresdemploie INNER JOIN entreprise ON entreprise.IDEntreprise = offresdemploie.IDEntreprise WHERE offresdemploie.IDOffre=1404355998");
$result2 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=2");
$result3 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=3");
$result4 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=4");
$result5 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=5");
$result6 = mysqli_query($connection,"SELECT * FROM offresdemploie WHERE IDOffre=6");

$all_property = array();  //declare an array for saving property


/*
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

<section class="fdb-block fp-active" data-block-type="features" data-id="2" draggable="true">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-left">
        <h1>Offre d'emploi</h1>
        <p class="lead">Voici plusieurs offre d'emploi susceptible de vous interesser</p>
      </div>
    </div>
<?php              
foreach ($result1 as $result) {
?>
    <div class="row text-left mt-5">
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto ml-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
<?php
}                  
foreach ($result1 as $result) {
?>
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto pt-5 pt-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
<?php
}                 
foreach ($result1 as $result) {
?>
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto ml-md-auto mr-md-0 pt-5 pt-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
    </div>
<?php
}                  
foreach ($result1 as $result) {
?>
    <div class="row text-left mt-5">
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto ml-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
<?php
}                  
foreach ($result1 as $result) {
?>
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto pt-5 pt-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
<?php
}                  
foreach ($result1 as $result) {
?>
      <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto ml-md-auto mr-md-0 pt-5 pt-md-0">
        <img alt="image" class="img-fluid rounded" src="">
        <h3><strong><?php echo $result['titre']; ?></strong></h3>
        <p><?php echo $result['commentaire']; ?></p>
      </div>
    </div>
  </div>
</section>


<?php
}
?>



    </div>

<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/main.js"></script>
</body>
</html>
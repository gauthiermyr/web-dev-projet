<?php
        include('src/dynamic/header.php');
?>

    <div class="container">
        <div id="post-offre-container">
            Voici les offres d'emploi:
        </div>
            <div class="post-offre">
                <div>
                    <img src="./public/img/profil.png"></img>
                    <h4>Capgemini</h4>
                    <h5>entreprise alpha</h5>
                </div>
            </div>
            <div class="offre">
                <input type="file" name="upload" id="upload-offre" accept="application/pdf" />
                <div class="offre-postuler">
                    <span onclick="alert('valider')" class="clickable-valider1">Apply</span>
                    <p id="offre-pdf">offre.pdf</p>
                    <p id="pdffile">pdf file</p>
                </div>

                <span onclick="alert('valider')" class="clickable-valider2">Apply</span>
            </div>
        </div>
        <div>
    
<?php
$Host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "siteweb";

//create connection
$connection = mysqli_connect($Host, $user, $pass, $db_name);


//get results from database
$result = mysqli_query($connection,"SELECT * FROM offresdemploie");
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
?>
            <p id="contenu-offre1">offre pour stagière: blablabla</p>
        </div>
    </div>

<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/main.js"></script>

</body>
</html>
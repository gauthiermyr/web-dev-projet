<?php
include('src/dynamic/header.php');
require ('./src/db/database.php');

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

    if(isset($_POST['message'])){
        $date = date("Y-m-d");
        $stmt = $db->prepare( "INSERT INTO actualites VALUES (?, 'Nouveau message',?,?,True,NULL,'',True,?)");
        $res = $stmt->execute(array(rand(0,9999999),$_POST['message'], $date, $user->IDUtilisateur));
    }

?>
    <div class="container">
        <div id="post-creation-container">
            <h2>Nouveau post ?</h2>
            <form action="./" method="post" class="post-creation-box">
                <textarea name="message" id="post-creation-textarea" placeholder="Quelque chose à dire ..."></textarea>
                <button>Publier</button>
            </form>
        </div>
<?php
}
else{
?>
        <div class="container">
            <div id="post-creation-container">
            </div>
<?php
}
?>
        <div id="post-feed">

        </div>
    </div>
<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/navigation.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>
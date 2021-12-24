<?php
        include('src/dynamic/header.php');
?>
    <div class="container">
        <div id="post-creation-container">
            <h2>Nouveau post ?</h2>
            <div class="post-creation-box">
                <textarea id="post-creation-textarea" placeholder="Quelque chose à dire ..."></textarea>
                <button>Publier</button>
            </div>
        </div>
        <div id="post-feed">
            <div class="post-container">
                <div class="post-navigation">
                    <div class="post-navigation-date">
                        <p>01/12/2021 14h16</p>
                    </div>
                    <div class="post-navigation-profile">
                        <img src="./public/img/profil.png"></img>
                        <div class="post-navigation-profile-info">
                            <h4>Alpha 7</h4>
                            <h5>Full Stack</h5>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <p>Fichier data csv !</p>
                </div>
                <div class="post-footer">
                    <div>
                        <span>189 pouces</span>
                        <span>17 commentaires</span>
                    </div>
                    <span>share</span>
                </div>
            </div>
        </div>
    </div>

<?php
        include('src/dynamic/footer.php');
?>

    <script src="./public/js/main.js"></script>
</body>
</html>
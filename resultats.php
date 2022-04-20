<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="marges">
    <section class="logo">
        <a href="index.html">
            <img src="img/ces-logo.png" alt="logo">
        </a>
    </section>
    <h1>Résultats</h1>
    <?php
        session_start();
        echo $_SESSION["response"];
    ?>
    </div>
    <footer>
        <div class="socialnetwork">
            <div class="facebook">
                <a target="_blanck" href="https://www.facebook.com/CES">
                    <img src="img/facebook-svgrepo-com.svg" alt="facebook">
                </a>
            </div>
            <div class="youtube">
                <a target="_blanck" href="https://www.youtube.com/user/cesonthetube">
                    <img src="img/youtube-svgrepo-com.svg" alt="youtube">
                </a>
            </div>
            <div class="instagram">
                <a target="_blanck" href="https://www.instagram.com/ces/">
                    <img src="img/instagram-svgrepo-com.svg" alt="instagram">
                </a>
            </div>
            <div class="twitter">
                <a target="_blanck" href="https://twitter.com/ces">
                    <img src="img/twitter-svgrepo-com.svg" alt="twitter">
                </a>
            </div>
            <div class="linkedin">
                <a target="_blanck" href="https://www.linkedin.com/showcase/ceslasvegas/">
                    <img src="img/linkedin-svgrepo-com.svg" alt="linkedin">
                </a>
            </div>
        </div>
        <div class="condition">
            <a href="conditions.html">Condition Générales d'Utilisation</a>
        </div>
</footer>
</body>
</html>
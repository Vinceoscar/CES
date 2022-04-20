<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="marges">
    <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $questions1 = $_GET['q1'];
            $questions2 = $_GET['q2'];
            $questions3 = $_GET['q3'];
            $questions4 = $_GET['q4'];
            $questions5 = $_GET['q5'];

            if(($questions1 === 'b') && ($questions2 === 'b') && ($questions3 === 'b') && ($questions4 === 'b') && ($questions5 === 'b')){
                $_SESSION["response"]= '<div class="gagné">Félicitation ! Vous avez réussi le questionnaire !</div>';
            }
            else{
                $_SESSION["response"]= "<div class="perdu">Malheureusement vous n'avez pas réussi le questionnaire </div>";
            }

        }
        else {
            echo 'console.log("dans le else")';
        }
    ?>

    <section class="logo">
        <a href="index.html">
            <img src="img/ces-logo.png" alt="logo">
        </a>
    </section>
    <h1>Validation</h1>
    <div class="number">
        <p>Votre participation a bien été enregistré !</p>
        <p>Remplissez ce formulaire pour pouvoir être contacté si vous remportez des lots proposés.</p>
    </div>
    <form class="text" action="">
        <div class="groupname">
            <div class="name">
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Votre Nom">
            </div>
            <div class="name">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" placeholder="Votre Prénom">
            </div>
        </div>
        <div class="info">
            <label for="Email">E-mail</label>
            <input type="email" name="nom" placeholder="Votre E-mail">
            <label for="age">Age</label>
            <input type="date" name="age">
        </div>
        <div class="choice">
            <p>Serez-vous présent ?</p>
            <div class="rep">
                <div class="groupyes">
                    <p class="yes">oui</p>
                    <input type="radio" name="q1" value="b">
                </div>
                <div class="groupno">
                    <p class="no">non</p>
                    <input type="radio" name="q1" value="b">
                </div>
            </div>
        </div>
        <div class="choice">
            <p>Si oui, est-ce que vous serez accompagné ?</p>
            <div class="rep">
                <div class="groupyes">
                    <p class="yes">oui</p>
                    <input type="radio" name="q1" value="b">
                </div>
                <div class="groupno">
                    <p class="no">non</p>
                    <input type="radio" name="q1" value="b">
                </div>
            </div>
        </div>
    </form>
    <p class="center"><a  type="submit" class="valider" href="resultats.php">Valider</a></p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Accueil - ATLAZ</title>
    <link rel="shortcut icon" href="images/logoatlaz2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
</style>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <div id="accueil-container-1">
        <div id="accueil-container-bienvenue">
            <p id="Grand-Titre" style="color: white; text-align: center;">Bonjour et bienvenue sur Atlaz.</p>
            <p id="Commentaire" style="font-size: 15px;">Portfolio PERUS Maxence.</p>
        </div>
    </div>
    <div id="grande-separation-bleue"></div>
    <div id="accueil-container-2">
        <div id="accueil-presentation"><img src="images/moi.png" id="accueil-img"></div>
        <div id="ligne-vertical" style="border: solid 2px rgb(1, 124, 224);"></div>
        <div id="accueil-presentation">
            <div id="accueil-présentation-texte">
                <p id="Grand-Titre">Perus Maxence</p>
                <p id="Commentaire" style="color: black; font-size: 15px;">Je poursuit actuellement en 1ère année d'un BTS SIO option SLAM (Développement Informatique) au Lycée Polyvalent Algoud Laffemas à Valence (26000).<br>Je suis intéressé par l'informatique en général, particulièrement l'assemblage et la programmation.<br>Je travaille les week-ends dans une station-service comme emploi étudiant. ⛽️</p>
            </div>
        </div>
    </div>
    <div id="accueil-container-3">
        <p id="Grand-Titre" style="text-align: center; margin-top: 10px;">Découvrez sur Atlaz.</p>
        <br>
        <div id="accueil-decouverte">
            <div id="accueil-decouverte-btn">
                <a href="scolarite.php" style="text-decoration: none;">
                    <p style="text-align: center;"><i class="fa-solid fa-graduation-cap fa-2xl" style="color: #000000;"></i></p>
                    <div id="ligne-horizontal" style="border: solid 1px black; width: 50px; margin-top: 10px; margin-bottom: 10px;"></div>
                    <p style="color: black; margin: 10px;">Ma Scolarité.</p>
                </a>
            </div>
            <div id="accueil-decouverte-btn">
                <a href="projet.php" style="text-decoration: none;">
                    <p style="text-align: center;"><i class="fa-solid fa-diagram-project fa-2xl" style="color: #000000;"></i></p>
                    <div id="ligne-horizontal" style="border: solid 1px black; width: 50px; margin-top: 10px; margin-bottom: 10px;"></div>
                    <p style="color: black; margin: 10px;">Mes Projets.</p>
                </a>
            </div>
            <div id="accueil-decouverte-btn">
                <a href="certification.php" style="text-decoration: none;">
                    <p style="text-align: center;"><i class="fa-solid fa-certificate fa-2xl" style="color: #000000;"></i></p>
                    <div id="ligne-horizontal" style="border: solid 1px black; width: 50px; margin-top: 10px; margin-bottom: 10px;"></div>
                    <p style="color: black; margin: 10px;">Mes Certifs.</p>
                </a>
            </div>
        </div>
        <br>
    </div>
    <div id="accueil-container-4">
        <p id="Grand-Titre" style="text-align: center; color: white; font-size: 25px;">Mes languages.</p>
        <div id="ligne-horizontal" style="margin-top: 8px; margin-bottom: 8px; border: solid 2px white;"></div>
        <div id="accueil-languages">
            <a href=""><i class="fa-brands fa-html5 fa-2xl" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-brands fa-css3-alt fa-2xl" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-brands fa-php fa-2xl" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-brands fa-python fa-2xl" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-solid fa-database fa-2xl" style="color: #ffffff;"></i></a>
        </div>
    </div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>
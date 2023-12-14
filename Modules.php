<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="u+2019">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewGoblins</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="./font.css">
    <link rel="stylesheet" href="./Modules.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" type="image/x-icon" href="./images/Gobelins-icon.ico">
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="./bg/background.mp4" type="video/mp4">
    </video>
    <header>
        <nav class="tm-nav">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="tm-main-nav">
                <li class="nav-item">                                
                    <a href="./index.html" class="nav-link">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./presentation.html" class="nav-link">
                        Présentation et histoire
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./Modules.php" class="nav-link current">
                        Formations
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./Projets.html" class="nav-link">
                        Projets
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./Contact.html" class="nav-link">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Formations</h1>
    <div class="card-container">
    <div class="card">
        <img class="card-img" src="./images/Asterix-obelix-et-idefix.jpg">
        <p>Cinéma d’animation<br>
            La filière d’animation de GOBELINS c’est fait connaitre grâce à Astérix ! En 1976, sort diplômée 
            une 1ère promotion d’étudiants spécialisés dans le cinéma d’animation. GOBELINS est alors la seule école
            à former aux techniques du cinéma d’animation grâce à l’enthousiasme de professionnels autodidactes passionnés.
            C’est dans cette bonne ambiance que les prochaines promotions voit le jour, ils vont vite forger à 
            l’école une réputation d’excellence, en contribuant à l’élaboration de projets qui marqueront leur époque.Par la suite 
            l’école ne va cesser d’évoluer.</p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="card">
        <img class="card-img" src="./images/3eme-page-comunication-multimédia.jpg">
        <p>Communication imprimée et plurimédia<br>
            l’école propose des formations en Communication imprimée et 
            plurimédia qui prennent en compte les récentes évolutions dans ce secteur. 
            Les savoir-faire traditionnels sont complétés par l’acquisition de compétences
            permettant de faire des médias numériques un complément naturel du média imprimé.</p>
    </div>
    <div class="card">
    <img class="card-img" src="./images/design-graphique-3eme-page.jpg">
        <p>Design graphique Motion Design<br>
            Précurseur du design en mouvement et spécialiste de l’expérimentation,
            le département Design graphique/Motion design  s’appuie sur des partenariats 
            de renom dans le domaine de l’art et des médias.</p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="card">
        <img class="card-img" src="./images/image-page-3-du-design-interactif-et-web-mobile.jpg">
        <p>Design interactif web et mobile<br>
            Pionnière dans les formations à la communication digitale et interactive dès les années 90,
            GOBELINS est aujourd’hui l’école la plus citée dans les classements par les professionnels du secteur.</p>
    </div>
    <div class="card">
        <img class="card-img" src="./images/jeu-video-page-3.jpg">
        <p>Jeu vidéo <br>
            Le jeu vidéo offre l’opportunité de créer et de faire vivre des histoires au travers d’expériences ludiques. 
            Le design est au cœur de nos enseignements : la conception de jeu vidéo fait appel aussi bien au game design 
            (création de jeu vidéo) qu’à la direction artistique (sonore et visuelle). Les compétences mobilisées sont transverses et créatives.</p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    <div class="card">
    <img class="card-img" src="./images/photographie-et-video-page-3.jpg">
        <p>Photographie et vidéo<br>
            A GOBELINS, on apprend à être curieux, visionnaires et à prendre plaisir en créant des images. 
            Des procédés anciens à la réalité virtuelle, nous formons aujourd’hui des photographes réalisateurs, 
            maîtrisant la prise de vue, la post-production et le tournage-montage vidéo.
</p>
    </div>
    <div class="card">
        <img class="card-img" src="./images/image-page-3-musique-et-son.jpg">
        <p>Musique et son<br>
            Les créations musicales et sonores se mélangent dans les arts visuels et sonores modernes. 
            La mise en scène des sons et musiques forment un tout les services de la narration, le Cinéma, 
            jeu vidéo, publicité, podcast, expériences immersives… les techniques varient mais l’écriture musicale 
            et sonore contribue à rendre chaque œuvre culturelle unique.</p>
    </div>
    <div class="cardI">
        <p></p>
    </div>
    </div>
    <div class="tab">
    <table>
        <tr>
            <th>Niveau</th>
            <th>Formations</th>
            <th>Durée</th>
        </tr>
        <?php include './affichage_matieres.php'; ?>
    </table>
    </div>
    <div class="carre-container">
    <div class="carré"></div>
    <div class="carré1"></div>
    <div class="carré2"></div>
    <div class="carré3">
    <img class="card-img" src="./images/formation-cinéma-d'animation.jpgs">
    </div>
    <div class="carré4">
    <img class="card-img" src="./images/présentation-filière-com.jpg">
    </div>
    <div class="carré5">
    <img class="card-img" src="./images/présentation-filière-design.jpg">
    </div>
    <div class="carré6">
    <img class="card-img" src="./images/image-design-interactif.jpg">
    </div>
    <div class="carré7">
    <img class="card-img" src="./images/image-jeu-video-formation.jpeg">
    </div>
    <div class="carré8">
    <img class="card-img" src="./images/photographie-et-video-formation.jpg">
    </div>
    <div class="carré9">
    <img class="card-img" src="./images/musique-et-son-formation.jpeg">
    </div>
    </div>
</body>
</html>
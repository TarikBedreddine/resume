<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLES & DESCRIPTION-->
    <title>Titre</title>
    <meta name="description" content="Mon cv"/>
    <!--STYLESHEET-CSS / FONTS-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,600;1,700&display=swap" rel="stylesheet">
    <!--FAVICONES -->
    <script src="https://kit.fontawesome.com/a5376696a6.js" crossorigin="anonymous"></script>

</head>


<body>
<main>


<!--    GLOBAL WRAPPER & CONTAINER TO GET HORIZONTAL POSITION -->

    <div class="outer-wrapper">
        <div class="wrapper">

<!--            SLIDE 1 ABOUT ME -->

            <div class="slide one">
                    <section class="content-one">
                            <h1>Tarik, <br> Développeur Web</h1>
                            <div class="flex-img_paragraph">
                                <img src="images/slide-1/me.jpg" alt="Ma photo">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it.
                                </p>
                            </div>
                    </section>
            </div>

<!--            SLIDE 2 MAJOR COMPETENCES -->

            <div class="slide two">
                <section class="content-two">
                        <h2>Développement</h2>
                        <div class="bg-rectangle">
                            <article class="programming-languages">
                                <img src="images/slide-2/html.png" alt="html logo">
                                <img src="images/slide-2/css.png" alt="css logo">
                                <img src="images/slide-2/php.png" alt="php logo">
                                <img src="images/slide-2/js.png" alt="js logo">
                                <img src="images/slide-2/java.png" alt="java logo">
                            </article>
                            <article class="tools-container">
                                <div class="tools">
                                    <img src="images/slide-2/vs-code.png" alt="vs-code logo">
                                    <img src="images/slide-2/phpstorm.png" alt="php storm logo">
                                    <img src="images/slide-2/git.png" alt="git logo">
                                    <img src="images/slide-2/trello.png" alt="trello logo">
                                </div>
                            </article>
                        </div>
                </section>
            </div>

<!--            SLIDE 3 DESIGN & COMPUTING/LANGUAGES COMPETENCES -->

            <div class="slide three">
                <section class="content-three">
                    <div class="bg-rectangle-1">
                        <article class="content-three-design">
                            <h3>Graphisme</h3>
                            <img src="images/slide-3/design.png" alt="Graphisme">
                        </article>
                    </div>
                    <div class="bg-rectangle-2">
                        <article class="content-three-languages">
                            <h3>Informatique & Langues</h3>
                            <img src="images/slide-3/computer.png" alt="Ordinateur">
                            <img src="images/slide-3/language.png" alt="Langues">
                        </article>
                    </div>
                </section>
            </div>

<!--            SLIDE 4 CAROUSEL USING THE CHECKBOX METHOD -->

            <div class="slide four">
                <section class="content-four">
                    <h2>Expériences</h2>
                    <ul class="accordion">
                        <li class="sub-accordion">
                            <input type="radio" id="experience1" name="menu">
                            <label for="experience1" class="accordion-label"><span class="job-title">ACHAT & REVENTE D'ELECTROMENAGER |</span> MICRO-ENTREPRISE</label>
                            <ul class="sub">
                                <li>Création du site internet via Wordpress</li>
                                <li>Achats de lots auprès de centrales d'achats</li>
                                <li>Gestion de l'intégralité du processus de vente</li>
                            </ul>
                        </li>
                        <li class="sub-accordion">
                            <input type="radio" id="experience2" name="menu">
                            <label for="experience2" class="accordion-label"><span class="job-title">CHEF D'EQUIPE JUNIOR |</span> EASYDIS</label>
                            <ul class="sub">
                                <li>Supervision des préparateurs de commandes et des
                                        réceptionnaires</li>
                                <li>Suivi des indicateurs de performance</li>
                                <li>Organisation et gestion du flux entrant</li>
                                <li>Mise en place d'outils et de méthodes afin
                                        d'optimiser les expéditions et le taux de qualité</li>
                            </ul>
                        </li>
                        <li class="sub-accordion">
                            <input type="radio" id="experience3" name="menu">
                            <label for="experience3" class="accordion-label"><span class="job-title">COMMERCIAL |</span> CIMM IMMOBILIER</label>
                            <ul class="sub">
                                <li>Accueil physique et téléphonique</li>
                                <li>Prospection de nouveaux mandats et visite des
                                        biens de l'agence</li>
                                <li>Tâches administratives et gestion des publicités</li>
                            </ul>
                        </li>
                    </ul>

                </section>
            </div>
            <div class="slide five">
                <section class="content-five">
                    <h2>Hobbys</h2>
                    <div class="container">
                        <article class="hobby-card">
                            <img src="images/slide-5/trading.jpg" alt="Image de Trading">
                            <span class="text-center">Trading</span>
                        </article>
                        <article class="hobby-card">
                            <img src="images/slide-5/football.png" alt="Image de Football">
                            <span class="text-center">Football</span>
                        </article>
                        <article class="hobby-card">
                            <img src="images/slide-5/jeux-videos.png" alt="Image de Jeux-vidéos">
                            <span class="text-center">Jeux-vidéos</span>
                        </article>
                    </div>



                </section>
            </div>
            <div class="slide six">
                Slide Six
            </div>
        </div>
    </div>
</main>
</body>
</html>
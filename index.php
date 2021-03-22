<?php

$filters = [
    'nomprenom' => FILTER_SANITIZE_STRING,
    'objet' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
    'message' => FILTER_SANITIZE_STRING,
    'send' => FILTER_SANITIZE_STRING,
];
    $myInputs = filter_input_array(INPUT_POST, $filters);

    if (isset($myInputs)) {
        $nomprenom = $myInputs['nomprenom'];
        $objet = $myInputs['objet'];
        $email = $myInputs['email'];
        $message = $myInputs['message'];
        $send = $myInputs['send'];
    }

    $isSend = false;


    if (isset($send)) {
        if (isset($nomprenom) && !empty($nomprenom)
            && isset($objet) && !empty($objet)
            && isset($email) && !empty($email)
            && isset($message) && !empty($message)
        ) {
            $targetMail = "tarik.bedreddine@yahoo.com";

            $bodyHtml = "Nom & Prénom : " . $nomprenom . PHP_EOL;
            $bodyHtml .= "Email : " . $email . PHP_EOL;
            $bodyHtml .= "Message : " . $message . PHP_EOL;

//            mail($targetMail, $objet, $bodyHtml);
            $isSend = true;
        }
    }

?>

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

<!--            NAVIGATION -->
<div class="nav-slide">
    <a href="#accueil"></a>
    <a href="#competences"></a>
    <a href="#competences-2"></a>
    <a href="#experiences"></a>
    <a href="#hobbys"></a>
    <a href="#contact"></a>
</div>


<body>
<main>


<!--    GLOBAL WRAPPER & CONTAINER TO GET HORIZONTAL POSITION -->

    <div class="outer-wrapper">
        <div class="wrapper">

<!--            SLIDE 1 ABOUT ME -->

            <div class="slide one" id="accueil">
                    <section class="content-one">
                            <h1>Tarik, <br> Développeur Web</h1>
                            <div class="flex-img_paragraph">
                                <img src="images/slide-1/me.jpg" alt="Ma photo">
                                <div class="a-propos">
                                    <span class="smiley-animation" id="smiley-animation"></span>
                                    <h3 id="h3-a-propos">A propos de Moi  </h3>
                                    <p>Issu d'études en Commerce et Management, j'ai décidé
                                        de regagner un domaine qui me passionne depuis longtemps: le <span>Développement web</span>. <br>
                                        <span>Autonome, curieux et motivé</span>, j'ai pour objectif de devenir développeur Full-Stack.
                                    </p>
                                </span>
                            </div>
                    </section>
            </div>

<!--            SLIDE 2 MAJOR COMPETENCES -->

            <div class="slide two" id="competences">
                <section class="content-two">
                        <h2>Développement</h2>
                    <div class="card-animation">
                        <div class="card-1" id="card-1">
                            <div class="front-card">
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
                            <div class="back-card">
                                    <table class="table-competences">
                                        <tr>
                                            <th>Langages</th>
                                            <th colspan="5">Notions abordés</th>
                                        </tr>
                                        <tr>
                                            <td>HTML / CSS</td>
                                            <td colspan="4">Gestion du responsive d'un site & des formulaires, Utilisation du Framework BOOSTRAP</td>
                                        </tr>
                                        <tr>
                                            <td>PHP </td>
                                            <td colspan="4">Conception d'une Base de donnée, requêtes SQL, utilisation du modèle MVC, framework LARAVEL</td>
                                        </tr>
                                        <tr>
                                            <td>JS</td>
                                            <td colspan="4">Mise en place d'un projet Front-end avec le Framework React, développer une application mobile en utilisant le Framework React
                                                Native</td>
                                        </tr>
                                        <tr>
                                            <td>JAVA</td>
                                            <td colspan="4">Maitriser les bases de la programmation orientée objet, manipuler des collections d’objets
                                            , accéder à des données via JDBC, mettre en œuvre le pattern DAO</td>
                                        </tr>
                                        <tr>
                                            <td>Soft skills</td>
                                            <td colspan="4">AGILE & Méthode SCRUM, maitrise de l'application GIT et du dépôt distant GIT HUB, kanban Trello, théâtre</td>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<!--            SLIDE 3 DESIGN & COMPUTING/LANGUAGES COMPETENCES -->

            <div class="slide three" id="competences-2">
                <section class="content-three">
                    <div class="card-animation">
                        <div class="card-2" id="card-2">
                            <div class="front-card">
                                <article class="content-three-design">
                                    <h3>Graphisme</h3>
                                    <img src="images/slide-3/design.png" alt="Graphisme">
                                </article>
                            </div>
                            <div class="back-card">
                                <ul>
                                    <li>Figma (outil de maquettage) / Photoshop / Inkscape</li>
                                    <li>Montage vidéo (Sony Vegas & After effect)</li>
                                    <li>Notions d'UX/UI</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-animation">
                        <div class="card-2" id="card-2">
                            <div class="front-card">
                                <article class="content-three-languages">
                                    <h3>Informatique & Langues</h3>
                                    <img src="images/slide-3/computer.png" alt="Ordinateur">
                                    <img src="images/slide-3/language.png" alt="Langues">
                                </article>
                            </div>
                            <div class="back-card">
                                <ul>
                                    <li>OS Linux (distribution Ubuntu) / Windows</li>
                                    <li>Bases en Maintenance</li>
                                    <li>ERP GOLD (Groupe Casino)</li>
                                    <li>Anglais : 845 au TOIC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<!--            TRANSITION BETWEEN COMPETENCES & EXPERIENCES  -->
            <div class="bg-transition"></div>

<!--            SLIDE 4 CAROUSEL USING THE CHECKBOX METHOD -->

            <div class="slide four" id="experiences">
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

<!--            SLIDE 5 HOBBYS-->

            <div class="slide five" id="hobbys">
                <section class="content-hobby">
                    <h2>Hobbys</h2>
                    <div class="hobby-container">
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

<!--            SLIDE CONTACT FORM -->
            <?php if ($isSend == false) :?>
            <div class="slide six" id="contact">
                <section class="content-form">
                    <h2>Me contacter</h2>
                    <div class="form-container">
                        <form action="#" method="post">
                            <div class="name">
                                <input type="text" name="nomprenom" id="nom_et_prenom" required>
                                <label for="nom_et_prenom">Votre Nom et Prénom : </label>
                            </div>
                            <div class="contact-raison">
                                <select name="objet" id="raison_de_contact" required>
                                    <option value=""></option>
                                    <option value="Demande de renseignement">Demande de renseignement</option>
                                    <option value="RDV">Programmer un RDV</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <label for="raison_de_contact">Motif de votre contact : </label>
                            </div>
                            <div class="email">
                                <input type="email" name="email" id="email" required>
                                <label for="email">Votre adresse e-mail : </label>
                            </div>
                            <div class="message">
                                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                                <label for="message">Message : </label>
                            </div>
                            <div class="send">
                                <input type="submit" name="send" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <?php else: ?>
            <div class="slide six" id="contact">
                <section class="content-form">
                    <div class="form-sucess">
                        <h2>Merci !</h2>
                        <p>J'ai bien reçu votre message, je vous recontacte rapidement ! </p>
                        <button><a href="">Envoyez un autre message</a></button>
                    </div>
                </section>
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>
</body>
</html>
<?php include 'inc/connect.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Jojo Story</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon-96x96.png"/>
</head>


<body>

    <div class="sidenav">
        <a href="javascript:void(0)" class="croix">&times;</a>
        <a href="#creation">Création</a>
        <div class="div-line"></div>
        <a href="#presentation">Présentation</a>
        <div class="div-line"></div>
        <div class="menu-deroulant">
            <a href="#protagonistes">Protagonistes</a>
            <div class="deroule-contenu">
                <a href="personnages.php?perso=jonathan">Jonathan</a>
                <a href="personnages.php?perso=joseph" >Joseph</a>
                <a href="personnages.php?perso=jotaro" >Jotaro</a>
                <a href="personnages.php?perso=josuke" >Josuke</a>
                <a href="personnages.php?perso=giorno" >Giorno</a>
                <a href="personnages.php?perso=jolyne" >Jolyne</a>
                <a href="personnages.php?perso=johnny" >Johnny</a>
                <a href="personnages.php?perso=josuke8" >Josuke part8</a>
            </div>
        </div>
        <div class="div-line"></div>
        <a href="#sites">Sites</a>
        <div class="div-line"></div>
        <a href="php/forum.php">Forum</a>
        <div class="div-line"></div>
        <a href="php/galerie.php">Galerie</a>
        <div class="div-line"></div>
        <a href="php/contact.php">Contact</a>
        <div class="div-line"></div>
        <a class="mention">Mentions légales</a>
        <div class="div-line"></div>
        <div id="change-js" class="mention-block">

            <div class="mention-contenu">
                <div class="close">&times;</div>
                <h2 class="mentionH2">Mentions légales</h2>
                <p>Responsable : Campistron Lucas</p>
                <p>Adresse postale : 5 rue Maurice Ravel Herblay 95220
                </p>
                <p>Email : Lucascampistron95@gmail.com
                </p>
                <p>Téléphone : 0601142164
                </p>
                <p>Hébergeur : www.jojo-story.fr</p>
                <p class="projet">Site Web créé dans le cadre d'un projet scolaire de l'IIM</p>
            </div>

        </div>

    </div>

    <div class="menu-act" id="opacity">
        <div class="triangle"></div>
        <!--creation dun triangle avec propriete css-->
    </div>

    <?php 

    //On verifie si quelqu un est connecte et quel est son statut
    
    if(empty($_SESSION['membre'])) { ?> <!--si personne est connecte alors le bouton affiche "se connecter" et inversement-->
        <div class="connect">
            <a href="php/connexion.php">Se connecter</a>
        </div>
    <?php } else{?>
        <div class="connect">
            <a href="php/deconnexion.php">Se déconnecter</a>
        </div>
    <?php } ?>

    <?php
        if($_SESSION && $_SESSION['membre']['statut'] == 2){ ?> <!-- si la personne connecte a le statut 2, donc admin, un bouton admin apparait pour la gestion de certaines choses -->
            <div class="admin">
                <a href="php/gestion.php">Admin</a>
            </div>
    <?php } ?>

    <div id="space">
        <div class="title-block">

            <p class="txt-title">JOJO STORY</p>
            <hr class="underline-title">

        </div>

        <div id="creation">
            <h1 class="creation-title">Création</h1>
            <p class="creation-txt"><img class="araki" src="img/araki.png" alt="HirohikoAraki Piture">Jojo's Bizarre
                Adventure est un manga d'action/aventure/fantastique de type shonen et seinen réalisé par Hirohiko
                Araki. Il possède actuellement 126 volumes et est toujours en cours de parution. En octobre 2012 une
                version animé est adapté par le studio David Production, c'est cette adaptation qui donnera le grand
                succès au manga à l'international. La série a laissée depuis le début de sa parution une empreinte dans
                la culture populaire, inspirant nombre d'artistes et laissant une ribambelle de phrases cultes et
                références à travers tous les médias ce qui fait de JoJo's Bizarre Adventure une référence indéniable du
                manga. Nombre d'artistes se sont revendiqués avoir été fortement influencés par Araki. Parmis les œuvres
                les plus influencées, on peut noter Yu Yu Akusho, Yu Gi Oh, Persona... De nombreux moments de
                l'adaptation animé, sont depuis rentrés dans l'imaginaire populaire comme des répliques cultes. "Za
                Warudo" et "Kono Dio da !" de Dio, To Be Continued, les fameuses « jojoposes »... Et ces moments se sont
                très fortement impregnés de la culture du meme sur internet ce qui a énormément contribué à sa
                popularité.</p>
        </div>

        <hr class="line">

        <div id="presentation">
            <h1 class="presentation-title">Présentation</h1>
            <div class="slider-container">

                <div class="mySlides fade">
                    <img src="img/jojo-family1.jpg" style="width:100%" alt="jojo-family 1">
                </div>

                <div class="mySlides fade">
                    <img src="img/jojo-family2.jpg" style="width:100%" alt="jojo-family 2">
                </div>

                <div class="mySlides fade">
                    <img src="img/jojo-family3.jpg" style="width:100%" alt="jojo-family 3">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <!-- le clique sur les boutons permet de lancer une fonction avec pour parametre 1 ou -1 pour pouvoir passer a la slide d apres-->
            </div>
            <br>

            <div style="text-align:center">
                <div class="rond" onclick="currentSlide(1)"></div>
                <div class="rond" onclick="currentSlide(2)"></div>
                <div class="rond" onclick="currentSlide(3)"></div>
                <!-- le clique sur les rond permet de lancer la fonction qui affiche la slide voulue selon le parametre donne a la fonction -->
            </div>

            <p class="presentation-txt">L'histoire de JoJo's Bizarre Adventure raconte les aventures de la lignée
                Joestar, une famille issue de l'Angleterre victorienne. L’histoire commence avec la première partie
                racontant la relation mortelle entre Dio Brando et Jonathan Joestar, fils de famille noble qui deviendra
                rival de Dio. La série couvre plusieurs générations, et chaque partie propose de suivre un descendant
                des Joestar comme protagoniste principal, entouré de nombreux personnages qui seront appelés les
                "Jojobros". Tout au long de l'histoire les différents protagonistes des parties seront amenés à
                affronter des ennemis en utilisant des pouvoirs très spéciaux et différents comme les très célèbres
                "stands" ce qui donnera des combats plus axés sur la tactique et l'ingéniosité que sur la simple force
                brute.</p>
        </div>

        <hr class="line">

        <div id="protagonistes">
            <h1 class="protagoniste-title">Protagonistes</h1>
            <div class="container-protagoniste">
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=jonathan" class="aconstruct" ><img src="img/Jonathan-rond.png"
                            alt="Jonathan Joestar head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Jonathan</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=joseph" class="aconstruct" ><img src="img/Joseph-rond.png"
                            alt="Joseph Joestar head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Joseph</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=jotaro" class="aconstruct" ><img src="img/Jotaro-rond.png"
                            alt="Jotaro Kujo Joestar head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Jotaro</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=josuke" class="aconstruct" ><img src="img/Josuke-rond.png"
                            alt="Josuke Higashikata head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Josuke</figcaption>
                    </a>
                </figure>
            </div>
            <br />
            <br />
            <div class="container-protagoniste">
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=giorno" class="aconstruct" ><img src="img/Giorno-rond.png"
                            alt="Giorno Giovanna head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Giorno</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=jolyne" class="aconstruct"><img src="img/Jolyne-rond.png"
                            alt="Jolyne Kujo head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Jolyne</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=johnny" class="aconstruct" ><img src="img/Johnny-rond.png"
                            alt="Johnny Joestar head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Johnny</figcaption>
                    </a>
                </figure>
                <figure class="figure-protagoniste">
                    <a href="personnages.php?perso=josuke8" class="aconstruct"><img src="img/Josuke8-rond.png"
                            alt="Josuke Higashikata head" class="protagoniste-img">
                        <figcaption class="figcaption-protagoniste">Josefumi</figcaption>
                    </a>
                </figure>
            </div>
        </div>

        <hr class="line">

        <div id="sites">
            <h1 class="sites-title">Sites Officiels</h1>

            <p class="site-txt-anime">Version animé : <a href="https://www.crunchyroll.com/fr/jojos-bizarre-adventure"
                    target="_blank"><img src="img/Crunchyroll-logo.png" alt="logo crunchyroll" class="crunchyroll"></a>
            </p>

            <br />
            <br />
            <br />

            <p class="site-txt-manga">Version papier : <a href="http://stairwaytovf.blogspot.com/" target="_blank"><img
                        src="img/starway_to_vf.JPG" alt="site Stairway to VF" class="stairway"></a></p>

            <br />
            <br />
            <br />
            <br />
        </div>
    </div>

    <div class="bloc-fin">
        <p class="txt-fin">Site fait par un fan <br /> Pour des fans</p>
        <hr class="line-fin">
        <p class="txt-fin-fin">© 2020 - Projet final</p>
    </div>




    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
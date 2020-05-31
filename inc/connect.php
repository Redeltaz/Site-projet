<?php
//fichier de connection à la base de donnée
try {
    $database = new PDO(
        'mysql:host=localhost;port=3308;dbname=sitejojo',
        'root',
        ''
    );
} catch(PDOException $e) {
   echo 'Base de données indisponible' . $e;
   die; 
}

// ouverture d'une $_SESSION  pour la connexion utilisateur 
session_start();

// pour supprimer une session : session_destroy();

// pour la gestion des liens, on déclare une constante contenant le chemin absolu du projet
define('URL', 'http://localhost/site/');
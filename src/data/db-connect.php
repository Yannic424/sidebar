<?php

// On définit le titre de la page
$titre = "Accueil";

// Déclaration des données de connexion
$monTaleauMulti = [
    "DBHOST" => "localhost",
    "DBUSER" => "root",
    "DBPASS" => "",
    "DBNAME" => "php-depense"
];

// Déclaration du Data Source Name DSN
$dsn = "mysql:dbname=" . $monTaleauMulti["DBNAME"] . ";host=" . $monTaleauMulti["DBHOST"];


try {
 
    // On va instancier PDO
    $db = new PDO($dsn, $monTaleauMulti["DBUSER"], $monTaleauMulti["DBPASS"]);

    // On s'assure d'envoyer les donées en UTF-8
    $db->exec("SET NAMES 'utf8'");

    // On définit le mode de fetch par défault
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // On veut récupérer la liste des utilisateurs (users)
            $query = "SELECT * FROM `users`";

            // On exécute directement la requête
            $stmt = $db->query($query);

            // On récupère les données (fetch ou fetchAll)
            $user = $stmt->fetchAll();

            
            // echo "<pre>";
            // var_dump($user);
            // echo "</pre>";
}

catch(Exception $e) {
    die("Erreur : " . $e->getMessage());

}
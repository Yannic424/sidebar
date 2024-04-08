<?php

// On inclut le fichier de connection
require_once "../src/data/db-connect.php";

// On inclut le header
include "../templates/header.php";

// On inclut la navbar
include "../templates/navbar.php";


// Contenu de la page
include "../src/pages/index.html.php";

include "../src/pages/connexion.php";
include "../src/pages/inscription.php";


// On inclut le footer
include "../templates/footer.php";


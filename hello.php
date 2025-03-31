<?php
   $nom = $_GET['nom'] ?? "visiteur";  // Récupère le paramètre 'nom' s'il existe, sinon 'visiteur'
   echo "Bonjour, " . htmlspecialchars($nom) . " !";

   var_dump($_POST);
?>
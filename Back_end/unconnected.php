<?php
    session_start();
    session_unset();
    session_destroy();
    echo "Vous avez été déconnecté";
    echo "<br><a href=\"../Front_end/index.php\">Retour à la page de connexion</a>";
    header('Location: ../Front_end/disconnected.php'); 
?>
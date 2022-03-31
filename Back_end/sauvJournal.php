<?php 
    require_once('database.php');
    $mysqli->set_charset("utf8mb4");

    $type_repas = $_POST['type_repas'];
    $place_repas = $_POST['place_repas'];
    $aliment = $_POST['aliment'];
    $qt = $_POST['qt'];

    $query[] = "UPDATE MANGE SET NOM_REPAS='$type_repas', PARTIE_DU_REPAS='$place_repas', ALIMENT = '$aliment', QUANTITE = '$qt' WHERE (DATE_REPAS='$date' AND HEURE_REPAS='$heure' AND LOGIN_USER='$login' AND NOM_REPAS='$type_repas' AND PARTIE_DU_REPAS='$place_repas')"; 
    
    $result = true;
    $result = $result && mysqli_query($mysqli, $query[0]);

    $res['req'] = $query;
    $res['status'] = 'Erreur requête';
    if($result)
        $res['status'] = 'req OK';    
        echo json_encode($res);
    }
?>
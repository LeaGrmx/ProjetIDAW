<?php 
    require_once('database.php');

    $type_repas = $_POST['type_repas'];
    $entree1 = $_POST['entree1'];
    $entree2= $_POST['entree2'];
    $plat= $_POST['plat'];
    $acc1= $_POST['acc1'];
    $acc2= $_POST['acc2'];
    $laitage= $_POST['laitage'];
    $fruit1= $_POST['fruit1'];
    $fruit2= $_POST['fruit2'];

    $query = "UPDATE MANGE SET WHERE (DATE_REPAS='$date' AND HEURE_REPAS='$heure' AND NOM_REPAS='$repas')"; 
    $result = mysqli_query($mysqli, $query);

    $res['req'] = $query;
    $res['status'] = 'Erreur requête';
    if($result)
        $res['status'] = 'req OK';    

    //print_r($res);
    echo json_encode($res);
    }

?>
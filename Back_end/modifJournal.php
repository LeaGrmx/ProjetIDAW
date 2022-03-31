<?php 
    require_once('database.php');

    $type_repas = $_POST['type_repas'];
    $ligne=[$_POST['entree1'],$_POST['entree2'],$_POST['plat'],$_POST['acc1'],$_POST['acc2'],$_POST['laitage'],$_POST['fruit1'],$_POST['fruit2']];
    for each($ligne as $value){
        if isset($value){
            $nom_aliment=$value ;
        }
    }

    $query = "UPDATE MANGE SET ALIMENT='$nom_aliment' WHERE (DATE_REPAS='$date' AND HEURE_REPAS='$heure' AND NOM_REPAS='$repas')"; 
    $result = mysqli_query($mysqli, $query);

    $res['req'] = $query;
    $res['status'] = 'Erreur requête';
    if($result)
        $res['status'] = 'req OK';    

    //print_r($res);
    echo json_encode($res);
    }

?>
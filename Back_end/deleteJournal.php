<?php 
    require_once('database.php');
    $mysqli->set_charset("utf8mb4");

    if(isset($_POST['date'])){
        $repas = $_POST['type_repas'];
        $date = $_POST['date'];
        $heure= $_POST['heure'];

        $query = "DELETE FROM MANGE WHERE (DATE_REPAS='$date' AND HEURE_REPAS='$heure' AND NOM_REPAS='$repas')"; 
        $result = mysqli_query($mysqli, $query);

        $res['req'] = $query;
        $res['status'] = 'Erreur requête';
        if($result)
            $res['status'] = 'req OK';    

        //print_r($res);
        echo json_encode($res);
    }

?>

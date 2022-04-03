<?php 
    require_once('database.php');
    $mysqli->set_charset("utf8mb4");

    if(isset($_POST['date'])){
        $nom = $_POST['nom'];
        $id_type = $_POST['id_type'];

        $query = "DELETE FROM ALIMENTS WHERE (NOM_ALIMENT = '$nom' AND ID_TYPE = '$id_type'"; 
        $result = mysqli_query($mysqli, $query);

        $res['req'] = $query;
        $res['status'] = 'Erreur requête';
        if($result)
            $res['status'] = 'req OK';    

        //print_r($res);
        echo json_encode($res);
    }

?>
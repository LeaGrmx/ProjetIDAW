<?php
    
    require_once("database.php");
    $mysqli->set_charset("utf8mb4");

    if(isset($_POST['nom']) && isset($_POST['type_aliment'])){
        $nom = $_POST['nom'];
        $type_aliment = $_POST['type_aliment'];
        $apports = $_POST['apports'];
        $eau = $_POST['eau'];
        $proteines = $_POST['proteines'];
        $glucides = $_POST['glucides'];
        $lipides = $_POST['lipides'];
        $sucres = $_POST['sucres'];
        $fibres = $_POST['fibres'];
        $sel = $_POST['sel'];
        $vd = $_POST['vd'];
        $ve = $_POST['ve'];
        $vc = $_POST['vc'];

        $query[] = "INSERT INTO ALIMENTS (NOM_ALIMENT,ID_TYPE,APPORT_CALO,Eau,Proteines, Glucides, Lipides, Sucres, Fibres_Alimentaires, Sel, Vitamine_D, Vitamine_E, Vitamine_C) VALUES ('$nom','$type_aliment','$apports','$eau','$proteines', '$glucides','$lipides','$sucres','$fibres','$sel','$vd','$ve','$vc')";

        $result = true;
        $result = $result && mysqli_query($mysqli, $query[0]);

        $res['req'] = $query;
        $res['status'] = 'Erreur requête';
        if($result)
            $res['status'] = 'req OK';    
            echo json_encode($res);
        }
?>

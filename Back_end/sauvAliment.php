<?php 
    require_once('database.php');
    $mysqli->set_charset("utf8mb4");

    $apports = $_POST['apports'];
    $eau = $_POST['eau'];
    $proteines = $_POST['proteines'];
    $glucides = $_POST['glucides'];
    $lipides = $_POST['lipides'];
    $sucres = $_POST['sucres'];
    $fibres = $_POST['fibres'];
    $sel = $_POST['sel'];
    $vd = $_POST['vd'];
    $vc = $_POST['vc'];
    $ve = $_POST['ve'];

    $login = $_POST['login'];

    $query[] = "UPDATE ALIMENTS SET APPORT_CALO = '$apports', Eau = '$eau', Eau = '$eau', Proteines = '$proteines', Glucides = '$glucides', Lipides = '$lipides', Sucres = '$sucres', Fibres_Alimentaires = '$fibres', Sel = '$sel', Vitamine_D = '$vd', Vitamine_C = '$vc', Vitamine_E = '$ve' WHERE LOGIN_USER='$login'"; 
    
    $result = true;
    $result = $result && mysqli_query($mysqli, $query[0]);

    $res['req'] = $query;
    $res['status'] = 'Erreur requête';
    if($result)
        $res['status'] = 'req OK';    
        echo json_encode($res);
?>
<?php 
    require_once('database.php');
    $mysqli->set_charset("utf8mb4");

    $aliment = $_POST['aliment'];
    $qt = $_POST['qt'];

    $login = $_POST['login'];

    $query[] = "UPDATE MANGE SET ALIMENT = '$aliment', QUANTITE = '$qt' WHERE LOGIN_USER='$login'"; 
    
    $result = true;
    $result = $result && mysqli_query($mysqli, $query[0]);

    $res['req'] = $query;
    $res['status'] = 'Erreur requête';
    if($result)
        $res['status'] = 'req OK';    
        echo json_encode($res);
?>
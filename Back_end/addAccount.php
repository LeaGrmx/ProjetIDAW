<?php
    
    require_once("database.php");
    $mysqli->set_charset("utf8mb4");

    if(isset($_POST['login']) && isset($_POST['mdp'])){
        $nom = $_POST['nom'];
        $prénom = $_POST['prénom'];
        $login = $_POST['login'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $confirm_mdp = $_POST['confirm_mdp'];
       
        if($mdp==$confirm_mdp){
            $query = "INSERT INTO UTILISATEUR (USER_LOGIN,Mdp,AGE,SEXE,Nom,PRENOM,ID_SPORT, Mail) VALUES ('$login','$mdp','$age',NULL,'$nom','$prénom',NULL,'$mail')";
        }
        else{
            echo json_encode('Les mots de passe ne sont pas identiques !');
        }
        

        $result = true;
        $result = $result && mysqli_query($mysqli, $query);

        $res['req'] = $query;
        $res['status'] = 'Erreur requête';
        if($result)
            $res['status'] = 'req OK';    
            echo json_encode($res);
        }
?>
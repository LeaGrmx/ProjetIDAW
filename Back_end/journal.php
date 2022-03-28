<?php
    
    require_once("database.php");
    
    if(isset($_POST['date'])){
        $login = $_SESSION['login'];
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $repas = $_POST['type_repas'];
        $entree1 = $_POST['entree1'];
        $entree2 = $_POST['entree2'];
        $plat = $_POST['plat'];
        $accompagnement1 = $_POST['accompagnement1'];
        $accompagnement2 = $_POST['accompagnement2'];
        $laitage = $_POST['laitage'];
        $fruit1 = $_POST['fruit1'];
        $fruit2 = $_POST['fruit2'];
        $qt1 = $_POST['qt1'];
        $qt2 = $_POST['qt2'];
        $qt3 = $_POST['qt3'];
        $qt4 = $_POST['qt4'];
        $qt5 = $_POST['qt5'];
        $qt6 = $_POST['qt6'];
        $qt7 = $_POST['qt7'];
        $qt8 = $_POST['qt8'];

        $query1 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$entree1', '$login', '$qt1', '$date', '$heure','$repas','Entrée')";
        $query2 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$entree2', '$login', '$qt2', '$date', '$heure','$repas','Entrée')";
        $query3 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$plat', '$login', '$qt3', '$date', '$heure','$repas','Plat')";
        $query4 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$acc1', '$login', '$qt4', '$date', '$heure','$repas','Plat')";
        $query5 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$acc2', '$login', '$qt5', '$date', '$heure','$repas','Plat')";
        $query6 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$laitage', '$login', '$qt6', '$date', '$heure','$repas','Dessert')";
        $query7 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$fruit1', '$login', '$qt7', '$date', '$heure','$repas','Dessert')";
        $query8 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$fruit2', '$login', '$qt8', '$date', '$heure','$repas','Dessert')";

        $result1 = mysqli_query($mysqli, $query1);
        $result2 = mysqli_query($mysqli, $query2);
        $result3 = mysqli_query($mysqli, $query3);
        $result4 = mysqli_query($mysqli, $query4);
        $result5 = mysqli_query($mysqli, $query5);
        $result6 = mysqli_query($mysqli, $query6);
        $result7 = mysqli_query($mysqli, $query7);
        $result8 = mysqli_query($mysqli, $query8);


        if($result1 and $result2 and $result3 and $result4 and $result5 and $result6 and $result7 and $result8)
            echo json_encode($result1);
            echo json_encode($result2);
            echo json_encode($result3);
            echo json_encode($result4);
            echo json_encode($result5);
            echo json_encode($result6);
            echo json_encode($result7);
            echo json_encode($result8);        
        else{
            echo 'Erreur requête';
        }
    }
?>
<?php
    
    require_once("database.php");
    
    switch($_SERVER["REQUEST_METHOD"]){
        case 'POST':
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

                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$entree1', '$login', '$qt1', '$date', '$heure','$repas','Entrée')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$entree2', '$login', '$qt2', '$date', '$heure','$repas','Entrée')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$plat', '$login', '$qt3', '$date', '$heure','$repas','Plat')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$acc1', '$login', '$qt4', '$date', '$heure','$repas','Plat')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$acc2', '$login', '$qt5', '$date', '$heure','$repas','Plat')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$laitage', '$login', '$qt6', '$date', '$heure','$repas','Dessert')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$fruit1', '$login', '$qt7', '$date', '$heure','$repas','Dessert')";
                $query[] = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,QUANTITE,DATE_REPAS,HEURE_REPAS,NOM_REPAS,PARTIE_DU_REPAS) VALUES ('$fruit2', '$login', '$qt8', '$date', '$heure','$repas','Dessert')";

                $result = true;
                $result = $result && mysqli_query($mysqli, $query[0]);
                $result = $result &&  mysqli_query($mysqli, $query[1]);
                $result = $result &&  mysqli_query($mysqli, $query[2]);
                $result = $result &&  mysqli_query($mysqli, $query[3]);
                $result = $result &&  mysqli_query($mysqli, $query[4]);
                $result = $result &&  mysqli_query($mysqli, $query[5]);
                $result = $result &&  mysqli_query($mysqli, $query[6]);
                $result = $result &&  mysqli_query($mysqli, $query[7]);

                $result['queries'] = $query;
                echo json_encode($result);    
            }
        break;

        case 'DELETE':
        
        break;
    }
?>
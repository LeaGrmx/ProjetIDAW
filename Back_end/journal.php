<?php
    
    require_once("database.php");
    
    if(isset($_POST['date'])){
        $date = $_POST['date'];
        $repas = $_POST['repas'];
        $entree1 = $_POST['entree1'];
        $entree2 = $_POST['entree2'];
        $plat = $_POST['plat'];
        $accompagnement1 = $_POST['accompagnement1'];
        $accompagnement2 = $_POST['accompagnement2'];
        $laitage = $_POST['laitage'];
        $fruit1 = $_POST['fruit1'];
        $fruit2 = $_POST['fruit2'];

        $query1 = "INSERT INTO MANGE (ALIMENT,LOGIN_USER,Date_de_naissance,Aime_le_cours_web,Remarques) VALUES ('$nom', '$prenom', '$date', '$cours', '$remarques')";
        $result = mysqli_query($mysqli, $query);

        if($result)
            echo json_encode($result);
        
        else{
            echo 'Erreur requête';
        }
    }
?>
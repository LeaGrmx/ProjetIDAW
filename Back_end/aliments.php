<?php
    
    require_once("database.php");

    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $saison = $_POST['saison'];
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

        $query1 = "INSERT INTO aliments (NOM_ALIMENT,SAISON,APPORT_CALO(KCAL/100G)) VALUES ('$nom','$saison','$apports')";
        $query2 = "INSERT INTO aliments (NOM_ALIMENT,Eau (g/100g), Proteines (x6,25g/100g), Glucides (g/100g), Lipides (g/100g), 
        Sucres (g/100g), Fibres alimentaires (g/100g), Sel (g/100g), Vitamine D (microg/100g), Vitamine E (mg/100g), Vitamine C (mg/100g)) 
        VALUES ('$eau','$proteines','$glucides','$lipides','$sucres','$fibres','$sel','$vd','$ve','$vc')";

        $result1 = mysqli_query($mysqli, $query1);
        $result2 = mysqli_query($mysqli, $query2);

        if($result1 and $result2){
            echo json_encode($result1);
            echo json_encode($result2);
        }
        else{
            echo 'Erreur requête';
        }
    }
?>
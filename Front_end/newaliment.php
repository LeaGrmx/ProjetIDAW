<?php
    require_once('../Back_end/database.php');
    $requete = "SELECT DISTINCT LIBELLE_TYPE, NOM_ALIMENT FROM aliments join types on aliments.id_type = types.id_type ORDER BY types.LIBELLE_TYPE, aliments.NOM_ALIMENT;";
    $retours = mysqli_query($mysqli,$requete);
    
    $fichier = fopen("../Back_end/type_aliment.js","w");
    fclose($fichier);
    
    $fichier = fopen("../Back_end/type_aliment.js","w+");
    $chaine=""; $un_type=""; $chaine_types="";

    fwrite($fichier, "function retour_aliments(un_type)\r\n");
    fwrite($fichier, "{\r\n\tvar chaine_aliments='';\r\n");
    fwrite($fichier, "\r\n\tswitch(un_type)\r\n\t{\r\n");

    while($retour = mysqli_fetch_array($retours)){
        if($retour["liste_types"])!= $un_type){
            if($un_type!=""){
                $chaine = rtrim($chaine, "|");
                $chaine .= "';\r\n";
                $chaine .= "\t\t\tbreak;\r\n";
            }
            $un_type = $retour["liste_types"]);
            $chaine_types .= $retour["liste_types"]."|";
            $chaine .= "\t\tcase '".substr($un_type, 0, 50)."':\r\n";
            $chaine .= "\t\t\tchaine_aliments='";
        }
        else{
            $chaine .= trim(utf8_encode($retour["liste_aliments"]))."|";
        }
    }
    $chaine = rtrim($chaine, "|");
    $chaine .= "';\r\n";
    $chaine .= "\t\t\tbreak;\r\n";

    fwrite($fichier, $chaine);

    fwrite($fichier, "\t}\r\n\r\n\treturn chaine_aliments;\r\n}");
    fclose($fichier);
?>

<?php
    require_once('template_header.php');
?>

<body>
<form method="post" id="addNewAliment" action="" onsubmit="onFormSubmit();">
    <h4> Données de l'aliment : </h4><br><br>
    <div class="form-group row">
        <select id="choix_type">
            <option value="00">Sélectionner un type</option>
            <?php
                $tous_types = explode("|", rtrim($chaine_types,"|"));
                foreach($tous_types as $le_type){
                    echo "<option value='".utf8_encode($le_type)."'>".utf8_encode($le_type)."</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group row">
        <select id="choix_aliment">
            <option value="00">Sélectionner un aliment</option>
        </select>
    </div>
    <!-- <div class="form-group row">
        <label for="inputNom" class="nom" id="inputNom">Nom de l'aliment</label>
        <input type="text" class="form-control" id="inputNom2" required>
    </div> -->
    <div class="form-group row">
        <label for="inputSaison" class="nom" id="inputSaison">Saison(s)</label>
        <input type="text" class="form-control" id="inputSaison2">
    </div>
    <div class="form-group row">
        <label for="inputApports" class="nom" id="inputApports">Apports calorifiques pour 100 grammes (en kcal): </label>
        <input type="text" class="form-control" id="inputAppCalo">
    </div>
    <br><br>
    <p> Détails des apports nutritionnels (pour <strong>100 grammes</strong> de l'aliment) : </p>
    <div class="form-group row">
        <label for="inputEau" class="eau" id="inputEau">Eau (en grammes)</label>
        <input type="text" class="form-control" id="inputEau2">
    </div>
    <div class="form-group row">
        <label for="inputProteines" class="proteines" id="inputProteines">Protéines (*6,25; en grammes)</label>
        <input type="text" class="form-control" id="inputProteines2">
    </div>
    <div class="form-group row">
        <label for="inputGlucides" class="glucides" id="inputGlucides">Glucides (en grammes)</label>
        <input type="text" class="form-control" id="inputGlucides2">
    </div>
    <div class="form-group row">
        <label for="inputLipides" class="lipides" id="inputLipides">Lipides (en grammes)</label>
        <input type="text" class="form-control" id="inputLipides2">
    </div>
    <div class="form-group row">
        <label for="inputSucres" class="sucres" id="inputSucres">Sucres (en grammes)</label>
        <input type="text" class="form-control" id="inputSucres2">
    </div>
    <div class="form-group row">
        <label for="inputFibres" class="fibres" id="inputFibres">Fibres alimentaires (en grammes)</label>
        <input type="text" class="form-control" id="inputFibres2">
    </div>
    <div class="form-group row">
        <label for="inputSel" class="sel" id="inputSel">Sel (en grammes)</label>
        <input type="text" class="form-control" id="inputSel2">
    </div>
    <div class="form-group row">
        <label for="inputVD" class="VD" id="inputVD">Vitamine D (en microgrammes)</label>
        <input type="text" class="form-control" id="inputVD2">
    </div>
    <div class="form-group row">
        <label for="inputVE" class="VE" id="inputVE">Vitamine E (en milligrammes)</label>
        <input type="text" class="form-control" id="inputVE2">
    </div>
    <div class="form-group row">
        <label for="inputVC" class="VC" id="inputVC">Vitamine C (en milligrammes)</label>
        <input type="text" class="form-control" id="inputVC2">
    </div>
</form>

<script>
    function onFormSubmit() {
        event.preventDefault();
        let nom = $("#inputNom2").val();
        let saison = $("#inputSaison2").val();
        let apports = $("#inputAppCalo").val();
        let eau = $("#inputEau2").val();
        let proteines = $("#inputProteine2").val();
        let glucides = $("#inputGlucides2").val();
        let lipides = $("#inputLipides2").val();
        let sucres = $("#inputSucres2").val();
        let fibres = $("#inputFibres2").val();
        let sel = $("#inputSel2").val();
        let vd = $("#inputVD2").val();
        let ve = $("#inputVE2").val();
        let vc = $("#inputVC2").val();
        let donnees = {nom,saison,apports,eau,proteines,glucides,lipides,sucres,fibres,sel,vd,ve,vc};
        $.post({
                url : '../Back_end/aliments.php',
                dataType : 'json',
                data : donnees
        })
        .done(function(){
            echo "Nouvel aliment ajouté";
        })
        .fail(function(){
            echo "Echec de l'ajout";
        })
    }
</script>

</body>

<?php
    require_once('template_footer.php');
?>    

<?php
    mysqli_close($mysqli);
?>
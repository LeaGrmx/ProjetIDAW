<?php
    require_once('template_header.php');
?>

<body>
<form method="post" id="addNewAliment" action="" onsubmit="onFormSubmit();">
    <h4> Données de l'aliment : </h4><br><br>
    <div class="form-group row">
        <label for="inputNom" class="nom" id="inputNom">Nom de l'aliment</label>
        <input type="text" class="form-control" id="inputNom2" required>
    </div>
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
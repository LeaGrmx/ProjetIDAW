<!DOCTYPE html>
<html>
    <head>
        <title>Journal</title>
        <meta charset="utf-8">
        <link rel="stylesheet_journal" href="cv.css">
    </head>
<body>
    <h1>REPAS</h1>
    <form method="post" id="addNewRepas" action="" onsubmit="onFormSubmit();">
        <div class="form-group row">
            <label for="inputEntree1" class="nom_entree1">Entrée 1</label>
            <div class="nom-entree1">
                <input type="text" class="form-control" id="inputEntree1" name="nomEntree1">
            </div>
            <label for="inputEntree2" class="nom_entree2">Entrée 2</label>
            <div class="nom-entree2">
                <input type="text" class="form-control" id="inputEntree2" name="nomEntree2">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="inputPlat" class="nom_plat">Plat de résistance</label>
            <div class="nom-plat2">
                <input type="text" class="form-control" id="inputPlat" name="nomPlat">
            </div>
            <label for="inputAcc1" class="nom_acc1">Accompagnement 1</label>
            <div class="nom-acc11">
                <input type="text" class="form-control" id="inputAcc1" name="nomAcc1">
            </div>
            <label for="inputAcc2" class="nom_acc2">Accompagnement 2</label>
            <div class="nom-acc21">
                <input type="text" class="form-control" id="inputAcc2" name="nomAcc2">
            </div>
        </div>
        <br>       
        <div class="form-group row">
            <label for="inputLaitage" class="nom_lait">Laitage</label>
            <div class="nom-lait">
                <input type="text" class="form-control" id="inputLait" name="nomLait">
            </div>
            <label for="inputFruit" class="nom_fruit">Fruit 1</label>
            <div class="nom-fruit1">
                <input type="text" class="form-control" id="inputFruit1" name="nomFruit1">
            </div>
            <label for="inputFruit" class="nom_fruit">Fruit 2</label>
            <div class="nom-fruit2">
                <input type="text" class="form-control" id="inputFruit2" name="nomFruit2">
            </div>
        </div>
        <div class="form-group row">
            <span class="col-sm-2"></span>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary form-control">Valider</button>
            </div>
       </div>
    </form>

    <table id="table_repas">
        <thead>
            <tr>
                <th scope="col">Entrée 1</th>
                <th scope="col">Entrée 2</th>
                <th scope="col">Plat de résistance</th>
                <th scope="col">Accompagnement 1</th>
                <th scope="col">Accompagnement 2</th>
                <th scope="col">Laitage</th>
                <th scope="col">Fruit 1</th>
                <th scope="col">Fruit 2</th>
            </tr>
        </thead>
        <tbody id="AlimentsTableBody">
        </tbody>
    </table>

    <script>
        function onFormSubmit() {
            event.preventDefault();
            let entree1 = $("#inputEntree1").val();
            let entree2 = $("#inputEntree2").val();
            let plat = $("#inputPlat").val();
            let accompagnement1 = $("#inputAcc1").val();
            let accompagnement2 = $("#inputAcc2").val();
            let laitage = $("#inputLait").val();
            let fruit1 = $("#inputFruit1").val();
            let fruit2 = $("#inputFruit2").val();
            let repas = {entree1,entree2,plat,accompagnement1,accompagnement2,laitage,fruit1,fruit2};
            $.post({
                url : 'aliments.php',
                dataType : 'json',
                data : personne
            })
            .done(function(){
                $('#AlimentsTableBody').append(`<tr><td>${entree1}</td>
                <td>${entree2}</td><td>${plat}</td><td>${accompagnement1}</td>
                <td>${accompagnement2}</td><td>${laitage}</td>
                <td>${fruit1}</td><td>${fruit2}</td>
                    <td>
                        <input type="button" value="Modifier" onclick="modif(this)">
                        <input type="button" value="Supprimer" onclick="suppr(this)">
                        <input type="button" value="Sauvegarder" onclick="sauv(this)">
                    </td>
                </tr>`);)
            })
            .fail(function(){
                console.log('Erreur');
            })
        }

        function suppr(btn) {
            var row = btn.parentNode.parentNode;
            let nom = row.children[0].innerHTML;
            let prenom = row.children[1].innerHTML;
            let date = row.children[2].innerHTML;
            let cours = row.children[3].innerHTML;
            let remarques = row.children[4].innerHTML;
            let personne = {nom, prenom, date, cours, remarques}; 
            $.post({
                url : "deleteRepas.php",
                dataType: "json",
                data : personne,
            })
            .done(function(data){
                row.parentNode.removeChild(row);
            })
            .fail(function(){
                console.log('Erreur lors de la suppression');
            })
        }

        function modif(btn) {
            var row = btn.parentNode.parentNode;
            var repas = row.childNodes;

            var entree1 = repas[0];
            var newentree1 = entree1.innerHTML;
            entree1.innerHTML = "<input type='text' value='"+newentree1+"'>";

            var entree2 = repas[1];
            var newentree2 = entree2.innerHTML;
            entree2.innerHTML = "<input type='text' value='"+newentree2+"'>";

            var plat = repas[2];
            var newplat = plat.innerHTML;
            plat.innerHTML = "<input type='text' value='"+newplat+"'>";

            var acc1 = repas[3];
            var newacc1 = acc1.innerHTML;
            acc1.innerHTML = "<input type='text' value='"+newacc1+"'>";

            var acc2 = repas[4];
            var newacc2 = acc2.innerHTML;
            acc2.innerHTML = "<input type='text' value='"+newacc2+"'>";

            var laitage = repas[5];
            var newlaitage = laitage.innerHTML;
            laitage.innerHTML = "<input type='text' value='"+newlaitage+"'>";

            var fruit1 = repas[6];
            var newfruit1 = fruit1.innerHTML;
            fruit1.innerHTML = "<input type='text' value='"+newfruit1+"'>";

            var fruit2 = repas[7];
            var newfruit2 = fruit2.innerHTML;
            fruit2.innerHTML = "<input type='text' value='"+newfruit2+"'>";
        }

        function sauv(btn) {
            var row = btn.parentNode.parentNode;
            var repas = row.childNodes;
            for(k=0;k<=7;k++) {
                repas[k].innerHTML = repas[k].childNodes[0].value;
            }
        }
    </script>
</body>
</html>        






        

<?php
    require_once('template_header.php');
    require_once("template_menu.php");
    $currentlogin = $_SESSION['login'];
?>

<body>
    
    <h2>REPAS</h2>
    <?php
    renderMenuToHTML($currentPageId='journal');
    ?>
    <p> Vous pouvez saisir les détails de votre repas ici, ils seront ajoutés à vos précédentes sélections. <br> Vous pouvez d'ailleurs les visualiser ci-dessous.</p>
    <p> Veillez à remplir le champ quantité des parties de repas que vous remplissez!</p>
    <form method="post" id="addNewRepas" action="" onsubmit="onFormSubmit();">
        <div class="form-group row">
            <!-- <label for="inputLogin" class="login" id="inputLogin">Utilisateur</label>
            <div class="login">
                <input type="text" class="form-control" id="inputEntree1" name="nomEntree1"> -->
            <label for="inputRepas" class="nom_repas" id="inputRepas">Repas de la journée</label>
            <div class="type_repas">
                <select id="repas" required>
                    <option value="Default">Choisissez une valeur</option>
                    <option value="Petit-déjeuner">Petit-déjeuner</option>
                    <option value="Déjeuner">Déjeuner</option>
                    <option value="Goûter">Goûter</option>
                    <option value="Dîner">Dîner</option>
                </select>
            </div>
            <label for="inputDate" class="date"> Date </label>
            <div class="date_repas">
                <input type="date" class="form-control" id="inputDate" required>
            </div>
            <label for="inputHeure" class="heure"> Heure </label>
            <div class="heure_repas">
                <input type="time" class="form-control" id="inputHeure">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="inputEntree1" class="nom_entree1">Entrée 1</label>
            <div class="nom-entree1">
                <input type="text" class="form-control" id="inputEntree1" name="nomEntree1">
                <input type="text" id="qt1" placeholder="100g">
            </div>
            <label for="inputEntree2" class="nom_entree2">Entrée 2</label>
            <div class="nom-entree2">
                <input type="text" class="form-control" id="inputEntree2" name="nomEntree2">
                <input type="text" id="qt2" placeholder="100g">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="inputPlat" class="nom_plat">Plat de résistance</label>
            <div class="nom-plat2">
                <input type="text" class="form-control" id="inputPlat" name="nomPlat">
                <input type="text" id="qt3" placeholder="100g">
            </div>
            <label for="inputAcc1" class="nom_acc1">Accompagnement 1</label>
            <div class="nom-acc11">
                <input type="text" class="form-control" id="inputAcc1" name="nomAcc1">
                <input type="text" id="qt4" placeholder="100g">
            </div>
            <label for="inputAcc2" class="nom_acc2">Accompagnement 2</label>
            <div class="nom-acc21">
                <input type="text" class="form-control" id="inputAcc2" name="nomAcc2">
                <input type="text" id="qt5" placeholder="100g">
            </div>
        </div>
        <br>       
        <div class="form-group row">
            <label for="inputLaitage" class="nom_lait">Laitage</label>
            <div class="nom-lait">
                <input type="text" class="form-control" id="inputLait" name="nomLait">
                <input type="text" id="qt6" placeholder="100g">
            </div>
            <label for="inputFruit" class="nom_fruit">Fruit 1</label>
            <div class="nom-fruit1">
                <input type="text" class="form-control" id="inputFruit1" name="nomFruit1">
                <input type="text" id="qt7" placeholder="100g">
            </div>
            <label for="inputFruit" class="nom_fruit">Fruit 2</label>
            <div class="nom-fruit2">
                <input type="text" class="form-control" id="inputFruit2" name="nomFruit2">
                <input type="text" id="qt8" placeholder="100g">
            </div>
        </div>
        <div class="form-group row">
            <span class="col-sm-2"></span>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary form-control">Valider</button>
            </div>
       </div>
    </form>
<br><br><br><br><br><br><br><br><br><br>
    <table id="table_repas">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Repas</th>
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
            let date = $("#inputDate").val();
            let heure = $("#inputHeure").val();
            //let type_repas = $("#inputRepas").val();
            let selectElmt = document.getElementById("repas");
            let type_repas = selectElmt.options[selectElmt.selectedIndex].text;
            let entree1 = $("#inputEntree1").val();
            let qt1 = $("#qt1").val();
            let entree2 = $("#inputEntree2").val();
            let qt2 = $("#qt2").val();
            let plat = $("#inputPlat").val();
            let qt3 = $("#qt3").val();
            let accompagnement1 = $("#inputAcc1").val();
            let qt4 = $("#qt4").val();
            let accompagnement2 = $("#inputAcc2").val();
            let qt5 = $("#qt5").val();
            let laitage = $("#inputLait").val();
            let qt6 = $("#qt6").val();
            let fruit1 = $("#inputFruit1").val();
            let qt7 = $("#qt7").val();
            let fruit2 = $("#inputFruit2").val();
            let qt8 = $("#qt8").val();
            let login = "<?php echo $currentlogin;?>";
            let repas = {login, date, heure, type_repas, entree1,entree2,plat,accompagnement1,accompagnement2,laitage,fruit1,fruit2, qt1, qt2, qt3, qt4, qt5, qt6, qt7, qt8};
            $.post({
                url : '../Back_end/journal.php',
                dataType : 'json',
                data : repas
            })
            .done(function(){
                $('#AlimentsTableBody').append(`<tr><td>${date}</td><td>${heure}</td><td>${type_repas}</td><td>${entree1}</td>
                <td>${entree2}</td><td>${plat}</td><td>${accompagnement1}</td>
                <td>${accompagnement2}</td><td>${laitage}</td>
                <td>${fruit1}</td><td>${fruit2}</td>
                    <td>
                        <input type="button" value="Modifier" onclick="modif(this)">
                        <input type="button" value="Supprimer" onclick="suppr(this)">
                        <input type="button" value="Sauvegarder" onclick="sauv(this)">
                    </td>
                </tr>`);
            })
            .fail(function(){
                console.log('Erreur lors de l\'ajout');
            })
        }

        function suppr(btn) {
            var row = btn.parentNode.parentNode;
            let date = row.children[0].innerHTML;
            let heure = row.children[1].innerHTML;
            let type_repas = row.children[2].innerHTML;
            let entree1 = row.children[3].innerHTML;
            let entree2 = row.children[4].innerHTML;
            let plat = row.children[5].innerHTML;
            let acc1 = row.children[6].innerHTML;
            let acc2 = row.children[7].innerHTML;
            let laitage = row.children[8].innerHTML;
            let fruit1 = row.children[9].innerHTML;
            let fruit2 = row.children[10].innerHTML;
            let login = "<?php echo $currentlogin;?>";
            let repas = {login,date,heure,type_repas,entree1,entree2,plat,acc1,acc2,laitage,fruit1,fruit2}; 
            $.ajax({
                url : "../Back_end/journal.php",
                method : "delete",
                dataType: "json",
                data : repas,
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

            var date = repas[0];
            var newdate = date.innerHTML;
            date.innerHTML = "<input type='text' value='"+newdate+"'>";

            var type_repas = repas[1];
            var newtype_repas = type_repas.innerHTML;
            type_repas.innerHTML = "<input type='text' value='"+newtype_repas+"'>";

            var entree1 = repas[2];
            var newentree1 = entree1.innerHTML;
            entree1.innerHTML = "<input type='text' value='"+newentree1+"'>";

            var entree2 = repas[3];
            var newentree2 = entree2.innerHTML;
            entree2.innerHTML = "<input type='text' value='"+newentree2+"'>";

            var plat = repas[4];
            var newplat = plat.innerHTML;
            plat.innerHTML = "<input type='text' value='"+newplat+"'>";

            var acc1 = repas[5];
            var newacc1 = acc1.innerHTML;
            acc1.innerHTML = "<input type='text' value='"+newacc1+"'>";

            var acc2 = repas[6];
            var newacc2 = acc2.innerHTML;
            acc2.innerHTML = "<input type='text' value='"+newacc2+"'>";

            var laitage = repas[7];
            var newlaitage = laitage.innerHTML;
            laitage.innerHTML = "<input type='text' value='"+newlaitage+"'>";

            var fruit1 = repas[8];
            var newfruit1 = fruit1.innerHTML;
            fruit1.innerHTML = "<input type='text' value='"+newfruit1+"'>";

            var fruit2 = repas[9];
            var newfruit2 = fruit2.innerHTML;
            fruit2.innerHTML = "<input type='text' value='"+newfruit2+"'>";
        }

        function sauv(btn) {
            var row = btn.parentNode.parentNode;
            var repas = row.childNodes;
            for(k=0;k<=9;k++) {
                repas[k].innerHTML = repas[k].childNodes[0].value;
            }
        }
    </script>
</body>
<?php
    require_once('template_footer.php');
?>    






        
